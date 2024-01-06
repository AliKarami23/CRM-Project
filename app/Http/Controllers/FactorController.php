<?php

namespace App\Http\Controllers;

use App\Http\Requests\FactorRequest;
use App\Models\Address;
use App\Models\Factor;
use App\Models\Order;
use App\Models\Store;
use App\Models\Vehicle;
use GuzzleHttp\Client;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;


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


        $str_number = Str::random();
        // Create a factor
        Factor::create([
            'user_id' => $request->user_id,
            'order_id' => $request->order_id,
            'Total_price' => $total_price,
            'Status' => $request->Status,
            'Description' => $request->Description,
            'Destination' => json_encode($routeData),
            'factor_number' => $str_number,
            'deliver_time' => $deliver_time,
        ]);

        $token = "Vqu6QOrZgXv8cOufFGwv5q2FBy7NEkrAdh7aLrphmrc";
        $args = [
            "amount" => 1000,
            "payerIdentity" => auth()->user()->PhoneNumber,
            "payerName" => auth()->user()->FullName,
            "returnUrl" => route('FactorEnd'),
            "clientRefId" => $str_number
        ];

        $payment = new \PayPing\Payment($token);

        try {
            $payment->pay($args);
        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }


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

        if ($request->has('origin_lat') && $request->has('origin_lag') &&
            $request->has('destination_lat') && $request->has('destination_lag')) {
            $origin_lat = $request->origin_lat;
            $origin_lag = $request->origin_lag;
            $destination_lat = $request->destination_lat;
            $destination_lag = $request->destination_lag;

            $factor->origin_lat = $origin_lat;
            $factor->origin_lag = $origin_lag;
            $factor->destination_lat = $destination_lat;
            $factor->destination_lag = $destination_lag;
        }
        $factor->update($request->except(['origin_lat', 'origin_lag', 'destination_lat', 'destination_lag']));

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

    public function FactorEnd()
    {

        $Factor = Factor::all();
        return response()->json([
            'Factor' => $Factor
        ]);
    }
}
