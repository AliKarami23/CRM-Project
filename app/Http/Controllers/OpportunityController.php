<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use Illuminate\Http\Request;

class OpportunityController extends Controller
{
    public function Newopportunity(){
        return view('layout.newopportunity');
    }

    public function add_opportunity(){

        $valid = request()->validate([
            'user_id'=>'required' ,
            'category'=>'required' ,
            'product_id'=>'required' ,
            'number'=>'required' ,
            'price'=>'required' ,
            'total_price'=>'required' ,
            'description'=>'required' ,
        ]);

        $insert = new Opportunity();
        $insert->user_id = request('user_id');
        $insert->category= request('category');
        $insert->product_id = request('product_id');
        $insert->number = request('number');
        $insert->color = request('color');
        $insert->price = request('price');
        $insert->total_price = request('total_price');
        $insert->description = request('description');
        $insert->status = request('status');
        $insert->save();


        return redirect('/panel/listopportunity');
    }

    public function listoppo(){
          return view('layout.listopportunity' , ['oppos'=>Opportunity::all()]);
    }

    public function show_edit_oppo($id){

        $oppo = Opportunity::findOrFail($id);
        return view('layout.Editopportunity', ['oppos'=>$oppo]);
    }

    public function edit_oppo($id){
        $valid = request()->validate([
            'user_id'=>'required' ,
            'category'=>'required' ,
            'product_id'=>'required' ,
            'number'=>'required' ,
            'price'=>'required' ,
            'total_price'=>'required' ,
            'description'=>'required' ,
        ]);

        $insert = Opportunity::findOrFail($id);
        $insert->update([
        $insert->user_id = request('user_id'),
        $insert->category= request('category'),
        $insert->product_id = request('product_id'),
        $insert->number = request('number'),
        $insert->color = request('color'),
        $insert->price = request('price'),
        $insert->total_price = request('total_price'),
        $insert->description = request('description'),
        $insert->status = request('status'),
        $insert->save()
     ]);

        return redirect('/panel');
    }

    public function delete($id){

        $order = Opportunity::findOrFail($id);
        $order->delete();

        return back();
    }


}
