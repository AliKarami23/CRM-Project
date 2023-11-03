<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function create(){

        $store = request()->all();
        Store::create($store);
        return response()->json([
            'store' => $store
        ]);
    }
    public function index(){

        $store = Store::all();
        return response()->json([
                'store' => $store
            ]
        );
    }
    public function edit($id){

        $store = Store::findOrFail($id);
        $store->update([
            $store->Location_lag = request('Location_lag'),
            $store->Location_lat = request('Location_lat'),
            $store->Status = request('Status'),
            $store->save()
        ]);

        $store = request()->all();

        return response()->json([
            'json'=>'store is Edit',
            'store'=>$store
        ]);
    }
    public function destroy($id){

        $store = Store::findOrFail($id);
        $store->delete();

        return response()->json(['store is Deleted']);

    }
}
