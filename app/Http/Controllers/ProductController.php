<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProductRequest;
use App\Mail\ProductEmail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    public function AddProduct(AddProductRequest $request){


        Product::create(request()->all());

        $product = request()->all();

        $Product_name = $request->Product_name;
        ProductEmail::dispatch($Product_name);


        return response()->json([
            'json'=>'Product is Add',
            'product'=>$product,
            'message' => 'product email sent successfully'

            ]
        );
    }


    public function ListProduct(){

        $products = Product::all();
        return response()->json($products);
    }


    public function EditProduct(AddProductRequest $request,$id){
        $data = request()->all();
        Product::where('id', $id)->update($data);
        $product = request()->all();
        return response()->json([
                'json'=>'Product is Edit',
                'product'=>$product]
        );
    }


    public function DeleteProduct($id){

        Product::destroy($id);
        return response()->json(['Product is Deleted']);

    }

}
