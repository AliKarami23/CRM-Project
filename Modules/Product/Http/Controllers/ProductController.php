<?php

namespace Modules\Product\Http\Controllers;

use App\Jobs\AddProductJob;
use App\Mail\ProductEmail;
use App\Models\Product;
use Illuminate\Routing\Controller;
use Modules\Product\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function create(ProductRequest $request){


        Product::create(request()->all());
        $product = request()->all();

        $Product_name = $request->Product_name;
        AddProductJob::dispatch($Product_name);


        return response()->json([
                'json'=>'Product is Add',
                'product'=>$product,
                'message' => 'product email sent successfully'

            ]
        );
    }


    public function index(){

        $products = Product::all();
        return response()->json($products);
    }


    public function edit(ProductRequest $request, $id){
        $data = $request->all();
        $product = Product::find($id);

        if (!$product) {
            return response()->json([
                'error' => 'Product not found'
            ], 404);
        }

        $product->update($data);

        return response()->json([
            'json' => 'Product is updated',
            'product' => $product
        ]);
    }



    public function destroy($id){

        Product::destroy($id);
        return response()->json(['Product is Deleted']);

    }

}
