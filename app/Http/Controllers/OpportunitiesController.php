<?php

namespace App\Http\Controllers;

use App\Models\Opportunities;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OpportunitiesController extends Controller
{

    public function AddOpportunities(){

        $valid = request()->validate([
            'user_id'=>'required' ,
            'Category'=>'required' ,
            'product_id'=>'required' ,
            'Number'=>'required' ,
            'Price'=>'required' ,
            'TotalPrice'=>'required' ,
            'Description'=>'required' ,
        ]);

        $insert = new Opportunities();
        $insert->User_id = request('user_id');
        $insert->Category= request('Category');
        $insert->Product_id = request('product_id');
        $insert->Number = request('Number');
        $insert->Color = request('Color');
        $insert->Price = request('Price');
        $insert->TotalPrice = request('TotalPrice');
        $insert->Description = request('Description');
        $insert->Status = request('Status');
        $insert->save();

        $Opportunities = request()->all();

        return response()->json([
            'json'=>'Opportunities is Add',
            'Opportunities'=>$Opportunities
        ]);
    }

    public function ListOpportunities(){

        $Opportunities = Opportunities::all();
          return response()->json(['Opportunities'=> $Opportunities]);
    }


    public function EditOpportunities(Request $request, $id){

        $valid = request()->validate([
            'user_id'=>'required' ,
            'Category'=>'required' ,
            'product_id'=>'required' ,
            'Number'=>'required' ,
            'Price'=>'required' ,
            'TotalPrice'=>'required' ,
            'Description'=>'required' ,
        ]);

        $Opportunities = Opportunities::findOrFail($id);

        if (!$Opportunities) {
            return response()->json(['error' => 'Opportunities not found'], 404);
        }

        $Opportunities->update($request->all());


        $Opportunities = request()->all();

        return response()->json([
            'json'=>'opportunities is Update',
            'opportunities'=>$Opportunities
        ]);
    }

    public function DeleteOpportunities($id){

        $order = Opportunities::findOrFail($id);
        $order->delete();

        return response()->json(['opportunities is Deleted']);
    }


}
