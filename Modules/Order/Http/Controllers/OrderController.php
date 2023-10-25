<?php

namespace Modules\Order\Http\Controllers;

use App\Mail\OrderEmail;
use App\Models\Order;
use Illuminate\Routing\Controller;
use Modules\Order\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    public function create(OrderRequest $request){

        $valid = request()->validate([
            'Price'=>'required' ,
            'Description'=>'required' ,
            'user_id'=>'required' ,

        ]);

        $insert = new Order();
        $insert->price = request('Price');
        $insert->description = request('Description');
        $insert->user_id = request('user_id');
        $insert->save();

        $order = request()->all();

        $content = "your order is add.";
//        OrderEmail::dispatch($content);

        return response()->json([
            'json'=>'Order is Add',
            'order'=>$order,
            'message' => 'order email sent successfully'

        ]);
    }

    public function index()
    {
        $orders = Order::all();
        return response()->json([$orders]);
    }



    public  function  edit(OrderRequest $request, $id) {

        $valid = request()->validate([
            'Price'=>'required' ,
            'Description'=>'required' ,
            'user_id'=>'required' ,
        ]);

        $order = Order::findOrFail($id);
        $order->update([
            $order->price = request('Price'),
            $order->description = request('Description'),
            $order->user_id = request('user_id'),
            $order->save()
        ]);

        $order = request()->all();

        return response()->json([
            'json'=>'Order is Edit',
            'order'=>$order
        ]);
    }

    public function destroy($id){

        $order = Order::findOrFail($id);
        $order->delete();

        return response()->json(['Order is Deleted']);
    }
}
