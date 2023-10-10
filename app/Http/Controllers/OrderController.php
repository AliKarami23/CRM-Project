<?php

namespace App\Http\Controllers;

use App\Mail\OrderEmail;
use App\Models\Order;
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
        $insert->customer_id = request('user_id');
        $insert->save();

        $order = request()->all();

        $content = "your order is add.";
        OrderEmail::dispatch($content);

        return response()->json([
            'json'=>'Order is Add',
            'order'=>$order,
            'message' => 'order email sent successfully'

        ]);
    }

    public function ListOrder()
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

        $order = request()->all();

        return response()->json([
            'json'=>'Order is Edit',
            'order'=>$order
        ]);
    }

    public function DeleteOrder($id){

        $order = Order::findOrFail($id);
        $order->delete();

        return response()->json(['Order is Deleted']);
    }
}
