<?php

namespace Modules\Factor\Http\Controllers;

use App\Models\Address;
use App\Models\Factor;
use App\Models\Order;
use App\Models\Store;
use App\Models\User;
use App\Models\Vehicle;
use GuzzleHttp\Client;
use \Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Factor\Http\Requests\FactorRequest;

class FactorController extends Controller
{


    public function create(Request $request)
    {
        $order_id = $request->order_id;
        $order = Order::find($order_id);
        $product_price = $order->Total_price;

        $vehicle_type = $order->vehicle;
        $vehicle = Vehicle::where("vehicle", $vehicle_type)->first();
        $base_price = $vehicle->base_price;
        $distance_odds = $vehicle->distance_odds;
        $vehicle_send = $order->vehicle;


        // Find addresses
        $originAddress = Address::where('user_id', 1)->first();
        $lat_origin = $originAddress->lat;
        $lag_origin = $originAddress->lag;

        $store_address = Store::where('user_id', $request->user_id)->first();
        $lat_store = $store_address->lat;
        $lag_store = $store_address->lag;

        $destination_address = Order::where('user_id', $request->user_id)->first();
        $lat_destination = $destination_address->lat;
        $lag_destination = $destination_address->lag;


        $client = new Client();
        $apiUrl = 'https://graphhopper.com/api/1/vrp?key=d55f4ede-e416-4f2a-9759-388281869153';

        $data = [
            'vehicles' => [
                [
                    'vehicle_id' => 'vehicle-1',
                    'type_id' => $vehicle_send,
                    'start_address' => [
                        'location_id' => 'start_address-1',
                        'lon' => $lag_origin,
                        'lat' => $lat_origin,
                    ],
                    'end_address' => [
                        'location_id' => 'end_address-1',
                        'lon' => $lag_destination,
                        'lat' => $lat_destination,
                    ],
                ]
            ],
            'vehicle_types' => [
                ['type_id' => $vehicle_send,
                    'profile' => $vehicle_send,
                    'speed_factor' => 1]
            ],
            'services' => [
                [
                    'id' => 's-1',
                    'name' => 'store',
                    'address' => [
                        'location_id' => 'end-1',
                        'lon' => $lag_store,
                        'lat' => $lat_store,
                    ]
                ]
            ],
        ];

        $response = $client->post($apiUrl, [
            'json' => $data,
            'headers' => [
                'Content-Type' => 'application/json'
            ]
        ]);
        $routeData = json_decode($response->getBody()->getContents());


        $distance = $routeData->solution->distance;
        $time = $routeData->solution->time;
        $Final_distance = ($distance / 1000) - 3;
        $Final_time = ($time / 60);
        $deliver_time = $Final_time + 15;
        $shipping_price = ($base_price + ($base_price * $Final_distance * $distance_odds) + ($base_price * $Final_time * $distance));
        $total_price = $product_price + $shipping_price;
        dd($deliver_time,$product_price,$time ,$distance, $Final_distance,$Final_time ,$total_price ,$shipping_price,$shipping_price);

        Factor::create([
            'user_id' => $request->user_id,
            'order_id' => $order_id,
            'Total_price' => $total_price,
            'Status' => $request->Status,
            'Description' => $request->Description,
            'Destination' => json_encode($routeData),
            'factor_number' => $request->factor_number,
            'deliver_time' => $deliver_time,
        ]);

        $Factor = request()->all();

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

        $factor->update($request->all());

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
