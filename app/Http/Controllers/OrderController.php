<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Routing\Controller;

class OrderController extends Controller
{
    public function AddOrder(){

        $valid = request()->validate([
            'Price'=>'required' ,
            'Description'=>'required' ,
            'customer_id'=>'required' ,

        ]);

        $insert = new Order();
        $insert->price = request('Price');
        $insert->description = request('Description');
        $insert->customer_id = request('customer_id');
        $insert->save();



        return response()->json(['Order is Add']);
    }

    public function ListOrders()
    {
        $orders = Order::all();
        return response()->json([$orders]);
    }



    public  function  EditOrder($id) {

        $valid = request()->validate([
            'Price'=>'required' ,
            'Description'=>'required' ,
            'customer_id'=>'required' ,
        ]);

        $order = Order::findOrFail($id);
        $order->update([
            $order->price = request('Price'),
            $order->description = request('Description'),
            $order->customer_id = request('customer_id'),
            $order->save()
        ]);

        return response()->json(['Order is Edit']);
    }

    public function DeleteOrder($id){

        $order = Order::findOrFail($id);
        $order->delete();

        return response()->json(['Order is Deleted']);
    }
}
