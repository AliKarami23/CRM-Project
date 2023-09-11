<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_product(){
        $valid = request()->validate([
            'product_name'=>'required' ,
            'Description'=>'required' ,
            'Category'=>'required' ,
            'Price'=>'required' ,
            'inventory'=>'required' ,
            'color'=>'required' ,
            'image'=>'required' ,




        ]);

        $insert = new Product();
        $insert->product_name = request('product_name');
        $insert->Description = request('Description');
        $insert->Category = request('Category');
        $insert->Price = request('Price');
        $insert->inventory = request('inventory');
        $insert->color = request('color');
        $insert->image = request('image');
        $insert->save();

        return redirect()->route('panel');
    }


    public function productsList(){
        return view('layout.Product.ProductsList' , ['products'=>Product::all()]);
    }

    public function Newproduct()
    {
        return view('layout.Product.Newproduct');
    }


}
