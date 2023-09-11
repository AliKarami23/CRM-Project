<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;

class OrderController extends Controller
{
    public function add_order(){

        $valid = request()->validate([
            'price'=>'required' ,
            'description'=>'required' ,
            'customer_id'=>'required' ,

        ]);

        $insert = new Order();
        $insert->price = request('price');
        $insert->description = request('description');
        $insert->customer_id = request('customer_id');
        $insert->save();



        return redirect()->route('panel');
    }

    public function listorders()
    {
        return view('layout.order.Listoforders' , ['orders'=>Order::all()]);
    }

    public function Neworder()
    {
        $customers = Customer::select('id','name','fname')->get();
        $Products = Product::select('id','product_name')->get();
        return view('layout.order.Neworder',compact('customers', 'Products'));
    }

    public function show_edit_order($id){

        $order = Order::findOrFail($id);
        $customer = Customer::all();
        $product = Product::all();
        return view('layout.order.Editorder', compact('order','customer','product'));
    }

    public  function  edit($id) {

        $valid = request()->validate([
            'price'=>'required' ,
            'description'=>'required' ,
            'customer_id'=>'required' ,
        ]);

        $order = Order::findOrFail($id);
        $order->update([
            $order->price = request('price'),
            $order->description = request('description'),
            $order->customer_id = request('customer_id'),
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
