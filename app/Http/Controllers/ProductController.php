<?php

namespace App\Http\Controllers;

use App\Mail\ProductEmail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    public function AddProduct(Request $request){
        $valid = request()->validate([
            'Product_name'=>'required' ,
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


    public function EditProduct($id){
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
