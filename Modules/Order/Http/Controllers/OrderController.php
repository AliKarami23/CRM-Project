<?php

namespace Modules\Order\Http\Controllers;

use App\Jobs\AddOrderJob;
use App\Mail\OrderEmail;
use App\Models\Order;
use App\Models\Product;
use \Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Order\Http\Requests\OrderRequest;

class OrderController extends Controller
{
    public function create(OrderRequest $request){
        $productIds = $request->product_id;
        $totalPrice = 0;

        foreach ($productIds as $productId) {
            $product = Product::findOrFail($productId);
            $totalPrice += $product->Price;
        }

        $order = Order::create([
            'user_id' => $request->user_id,
            'Description' => $request->Description,
            'Total_price' => $totalPrice,
            'order_number' => $request->order_number,
            'Status' => $request->Status,
            'product_id' => implode(',', $productIds),
            'Shipping_time' => $request->Shipping_time,
            'distance' => $request->distance,
            'lag' => $request->lag,
            'lat' => $request->lat,
            'location' => $request->location,
            'vehicle' => $request->vehicle
        ]);

        $content = 'order is add by number ' . $request->order_number;
        AddOrderJob::dispatch($content);

        return response()->json([
            'json' => 'Order is Add',
            'order' => $order,
            'message' => 'order email sent successfully'
        ]);
    }


    public function index()
    {
        $orders = Order::all();
        return response()->json(['orders' => $orders]);
    }



    public function edit(OrderRequest $request, $id){
        $order = Order::find($id);

        if (!$order) return response()->json(['error' => 'Order not found'], 404);

        $totalPrice = 0;

        foreach ($request->product_id as $productId) {
            $product = Product::findOrFail($productId);
            $totalPrice += $product->Price;
        }

        $order->update(array_merge($request->except('product_id'), [
            'Total_price' => $totalPrice,
            'product_id' => implode(',', $request->product_id),
        ]));

        AddOrderJob::dispatch("Order is updated with number {$request->order_number}");

        return response()->json(['json' => 'Order is updated', 'order' => $order]);
    }



    public function destroy($id){

        $order = Order::findOrFail($id);
        $order->delete();

        return response()->json(['Order is Deleted']);
    }
}
