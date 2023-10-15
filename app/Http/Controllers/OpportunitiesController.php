<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddOopRequest;
use App\Models\Opportunities;
use Illuminate\Http\Request;

class OpportunitiesController extends Controller
{

    public function AddOpportunities(AddOopRequest $request){



        Opportunities::create(request()->all());

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


    public function EditOpportunities(AddOopRequest $request,$id){


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
