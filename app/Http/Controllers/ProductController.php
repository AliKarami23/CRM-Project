<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function AddProduct(){
        $valid = request()->validate([
            'product_name'=>'required' ,
            'Description'=>'required' ,
            'Category'=>'required' ,
            'Price'=>'required' ,
            'Inventory'=>'required' ,
            'Color'=>'required' ,
            'Image'=>'required' ,
        ]);

        $insert = new Product();
        $insert->product_name = request('Product_name');
        $insert->Description = request('Description');
        $insert->Category = request('Category');
        $insert->Price = request('Price');
        $insert->inventory = request('Inventory');
        $insert->color = request('Color');
        $insert->image = request('Image');
        $insert->save();

        return response()->json('Product is Add');
    }


    public function ProductsList(){

        $products = Product::all();
        return response()->json($products);
    }

}
