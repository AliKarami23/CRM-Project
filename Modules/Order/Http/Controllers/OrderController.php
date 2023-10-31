<?php

namespace Modules\Order\Http\Controllers;

use App\Mail\OrderEmail;
use App\Models\Order;
use App\Models\Product;
use \Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Order\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    public function create(Request $request){

        $productIds = $request->product_id;
        $totalPrice = 0;
        foreach ($productIds as $productId) {
            $product = Product::find($productId);
            if ($product) {
                $totalPrice += $product->price;
            }
        }
        $order_product_id = implode(',', $productIds);

        $order = Order::create([
            'user_id' => $request->user_id,
            'Description' => $request->Description,
            'Total_price' => $totalPrice,
            'order_number' => $request->order_number,
            'Status' => $request->Status,
            'product_id' => $order_product_id,
            'Shipping_time' => $request->Shipping_time,
            'distance' => $request->distance,
            'vehicle' => $request->vehicle
        ]);

        return response()->json([
            'json'=>'Order is Add',
            'order' => $order,
            'message' => 'order email sent successfully'

        ]);
    }
//        OrderEmail::dispatch($content);

    public function index()
    {
        $orders = Order::all();
        return response()->json(['orders' => $orders]);
    }



    public  function  edit(Request $request, $id) {



        $order = Order::findOrFail($id);
        $order->update([
            $order->price = request('Price'),
            $order->description = request('Description'),
            $order->user_id = request('user_id'),
            $order->save()
        ]);

        $order = request()->all();

        return response()->json([
            'json'=>'Order is Edit',
            'order'=>$order
        ]);
    }

    public function destroy($id){

        $order = Order::findOrFail($id);
        $order->delete();

        return response()->json(['Order is Deleted']);
    }
}
