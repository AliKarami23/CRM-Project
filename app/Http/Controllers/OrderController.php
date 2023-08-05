<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function add_order(Request $request){
        $insert = DB::table('orders')->insert([
            'product'=>$request->post('product'),
            'price'=>$request->post('price'),
            'description'=>$request->post('description'),
            'buyer'=>$request->post('buyer'),
            'status'=>$request->post('status')
        ]);

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

}
