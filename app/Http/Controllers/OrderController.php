<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function add_order(){

        $valid = request()->validate([
            'product_id'=>'required' ,
            'price'=>'required' ,
            'description'=>'required' ,
            'user_id'=>'required' ,

        ]);

        $insert = new Order();
        $insert->product_id = request('product_id');
        $insert->price = request('price');
        $insert->description = request('description');
        $insert->user_id = request('user_id');
        $insert->save();

   return redirect()->route('panel');
    }

    public function listorders()
    {
        return view('layout.Listoforders' , ['orders'=>Order::all()]);
    }

    public function Neworder()
    {
        return view('layout.Neworder');
    }

    public function show_edit_order($id){

        $order = Order::findOrFail($id);
        return view('layout.Editorder', ['order'=>$order]);
    }

    public  function  edit($id) {

        $valid = request()->validate([
            'product_id'=>'required' ,
            'price'=>'required' ,
            'description'=>'required' ,
            'user_id'=>'required' ,
        ]);

        $order = Order::findOrFail($id);
        $order->update([
          $order->product_id = request('product_id'),
          $order->price = request('price'),
          $order->description = request('description'),
          $order->user_id = request('user_id'),
          $order->save()
        ]);

        return redirect('/panel/Listoforders');
    }

    public function delete($id){

        $order = Order::findOrFail($id);
        $order->delete();

        return back();
    }
}
