<?php

namespace Modules\Factor\Http\Controllers;

use App\Models\Address;
use App\Models\Factor;
use App\Models\Order;
use App\Models\Product;
use App\Models\Store;
use App\Models\User;
use App\Models\Vehicle;
use GuzzleHttp\Client;
use \Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Factor\Http\Requests\FactorRequest;

class FactorController extends Controller
{


    public function create(FactorRequest $request)
    {
        // Find order and related information
        $order = Order::findOrFail($request->order_id);
        $product_price = $order->Total_price;
        $vehicle_type = $order->vehicle;

        // Find vehicle details
        $vehicle = Vehicle::where('vehicle', $vehicle_type)->first();
        $base_price = $vehicle->base_price;
        $distance_odds = $vehicle->distance_odds;
        $vehicle_send = $vehicle_type;

        // Find origin, store, and destination addresses
        $originAddress = Address::where('user_id', 1)->first();
        $store_address = Store::where('user_id', $request->user_id)->first();
        $destination_address = Address::where('user_id', $request->user_id)->first();

        // Prepare data for routing
        $data = [
            'vehicles' => [
                [
                    'vehicle_id' => 'vehicle-1',
                    'type_id' => $vehicle_send,
                    'start_address' => [
                        'location_id' => 'start_address-1',
                        'lon' => $originAddress->lag,
                        'lat' => $originAddress->lat,
                    ],
                    'end_address' => [
                        'location_id' => 'end_address-1',
                        'lon' => $destination_address->lag,
                        'lat' => $destination_address->lat,
                    ],
                ]
            ],
            'vehicle_types' => [
                [
                    'type_id' => $vehicle_send,
                    'profile' => $vehicle_send,
                    'speed_factor' => 1
                ]
            ],
            'services' => [
                [
                    'id' => 's-1',
                    'name' => 'store',
                    'address' => [
                        'location_id' => 'end-1',
                        'lon' => $store_address->lag,
                        'lat' => $store_address->lat,
                    ]
                ]
            ],
        ];

        // Make a request to the routing API
        $client = new Client();
        $apiUrl = 'https://graphhopper.com/api/1/vrp?key=d55f4ede-e416-4f2a-9759-388281869153';

        $response = $client->post($apiUrl, [
            'json' => $data,
            'headers' => [
                'Content-Type' => 'application/json'
            ]
        ]);

        $routeData = json_decode($response->getBody()->getContents());

        // Calculate shipping details
        $distance = $routeData->solution->distance;
        $time = $routeData->solution->time;
        $Final_distance = ($distance / 1000) - 3;
        $Final_time = ($time / 60);
        $deliver_time = $Final_time + 15;
        $shipping_price = ($base_price + ($base_price * $Final_distance * $distance_odds) + ($base_price * $Final_time * $distance));
        $total_price = $product_price + $shipping_price;

        // Create a factor
        Factor::create([
            'user_id' => $request->user_id,
            'order_id' => $request->order_id,
            'Total_price' => $total_price,
            'Status' => $request->Status,
            'Description' => $request->Description,
            'Destination' => json_encode($routeData),
            'factor_number' => $request->factor_number,
            'deliver_time' => $deliver_time,
        ]);

        $Factor = $request->all();

        return response()->json([
            'json' => 'Factor is Add',
            'Factor' => $Factor,
            'routeData' => $routeData
        ]);
    }


    public function edit(FactorRequest $request, $id)
    {
        $factor = Factor::find($id);

        if (!$factor) {
            return response()->json(['error' => 'Factor not found'], 404);
        }

        // Check if the user wants to update locations
        if ($request->has('origin_lat') && $request->has('origin_lag') &&
            $request->has('destination_lat') && $request->has('destination_lag')) {
            $origin_lat = $request->origin_lat;
            $origin_lag = $request->origin_lag;
            $destination_lat = $request->destination_lat;
            $destination_lag = $request->destination_lag;

            // Update origin and destination locations
            $factor->origin_lat = $origin_lat;
            $factor->origin_lag = $origin_lag;
            $factor->destination_lat = $destination_lat;
            $factor->destination_lag = $destination_lag;
        }

        // Check if the user wants to update products
        if ($request->has('product_id')) {
            $productIds = $request->product_id;
            $product_price = 0;

            foreach ($productIds as $productId) {
                $product = Product::findOrFail($productId);
                $product_price += $product->Price;
            }

            // Update product information
            $factor->product_id = implode(',', $productIds);
            $factor->Total_price = $product_price;
        }

        // Update other factor information
        $factor->update($request->except(['origin_lat', 'origin_lag', 'destination_lat', 'destination_lag', 'product_id']));

        return response()->json([
            'message' => 'Factor is Edit',
            'factor' => $factor
        ]);
    }


    public function destroy($id)
    {
        Factor::destroy($id);

        return response()->json([
            'json' => 'Factor is Deleted']);
    }


    public function index()
    {

        $Factor = Factor::all();
        return response()->json([
            'Factor' => $Factor
        ]);
    }
}
