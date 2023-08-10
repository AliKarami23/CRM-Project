<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_product(){
        $valid = request()->validate([
            'product_id'=>'required' ,
            'product_name'=>'required' ,
            'description'=>'required' ,
            'Category'=>'required' ,
            'Price'=>'required' ,
            'inventory'=>'' ,
            'color'=>'' ,
            'image'=>'' ,




        ]);

        $insert = new product();
        $insert->product_id = request('product_id');
        $insert->product_name = request('product_name');
        $insert->description = request('description');
        $insert->Category = request('Category');
        $insert->Price = request('Price');
        $insert->inventory = request('inventory');
        $insert->color = request('color');
        $insert->image = request('image');
        $insert->save();

   return redirect()->route('panel');
    }

    public function productlist()
    {
        return view('layout.productsList' , ['products'=>product::all()]);
    }

    public function Newproduct()
    {
        return view('layout.Newproduct');
    }




}
