<?php

namespace Modules\Factor\Http\Controllers;

use App\Models\Factor;
use App\Models\Order;
use App\Models\User;
use App\Models\Vehicle;
use \Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Factor\Http\Requests\FactorRequest;

class FactorController extends Controller
{


    public function create(Request $request)
    {
        $order_id = $request->order_id;
        $order = Order::find($order_id)->first();
        $product_price = $order->Total_price;
        $distance = (($order->distance)/1000)-3;
        $time = $order->time/1000/60;
        $deliver_time = $time + 15;
        $vehicle = $order->vehivle;

        $vehicle = Vehicle::weher("vehicle",$vehicle)->first();
        $base_price = $vehicle->base_price;
        $distance_odds = $vehicle->time_odds;

        $shipping_price = ($base_price + ($base_price*$distance*$distance_odds)+($base_price*$time*$distance));
        $total_price = $product_price + $shipping_price;

        $Destination_users = User::all();
        foreach ($Destination_users as $user) {
            $Destination =  $user->address;
        }

         Factor::create([
            'user_id'=>$request->user_id,
            'order_id' => $order_id,
            'Total_price' => $total_price,
            'Status' => $request->Status,
            'Description' => $request->Description,
            'Destination' => $Destination,
            'factor_number' => $request->factor_number,
            'deliver_time' => $deliver_time
    ]);

        $Factor = request()->all();

        return response()->json([
            'json'=>'Factor is Add',
            'Factor'=>$Factor
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
            'json'=>'Factor is Deleted']);
    }


    public function index()
    {

        $Factor = Factor::all();
        return response()->json([
            'Factor' => $Factor
        ]);
    }
}
