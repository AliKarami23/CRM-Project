<?php

namespace App\Http\Controllers;


use App\Models\Factor;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FactorController extends Controller
{


    public function AddFactor(Request $request)
    {

        Factor::create($request->all());

        $Factor = $request->all();

        return response()->json([
            'json'=>'Factor is Add',
            'Factor'=>$Factor
        ]);
    }



    public function EditFactor(Request $request, $id)
    {
        $factor = Factor::find($id);

        if (!$factor) {
            return response()->json(['error' => 'Factor not found'], 404);
        }

        $factor->update($request->all());

        return response()->json([
            'message' => 'Factor is Edit',
            'factor' => $factor
        ]);
    }

    public function DeleteFactor($id)
    {
        Factor::destroy($id);

        return response()->json([
            'json'=>'Factor is Deleted']);
    }


    public function ListFactor()
    {
        $users = User::all();
        $Factor = Factor::all();
       return response()->json([
           'users' => $users,
        'Factor' => $Factor
       ]);
    }
}

