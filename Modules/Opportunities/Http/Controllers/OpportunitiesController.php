<?php

namespace Modules\Opportunities\Http\Controllers;

use App\Http\Requests\AddOopRequest;
use App\Models\Opportunities;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OpportunitiesController extends Controller
{

    public function create(AddOopRequest $request){



        Opportunities::create(request()->all());

        $Opportunities = request()->all();

        return response()->json([
            'json'=>'Opportunities is Add',
            'Opportunities'=>$Opportunities
        ]);
    }

    public function index(){

        $Opportunities = Opportunities::all();
        return response()->json(['Opportunities'=> $Opportunities]);
    }


    public function edit(AddOopRequest $request,$id){


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

    public function destroy($id){

        $order = Opportunities::findOrFail($id);
        $order->delete();

        return response()->json(['opportunities is Deleted']);
    }


}
