<?php

namespace App\Http\Controllers;

use App\Models\Opportunity;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OpportunityController extends Controller
{

    public function AddOpportunity(){

        $valid = request()->validate([
            'user_id'=>'required' ,
            'Category'=>'required' ,
            'product_id'=>'required' ,
            'Number'=>'required' ,
            'Price'=>'required' ,
            'TotalPrice'=>'required' ,
            'Description'=>'required' ,
        ]);

        $insert = new Opportunity();
        $insert->User_id = request('user_id');
        $insert->Category= request('Category');
        $insert->Product_id = request('Product_id');
        $insert->Number = request('Number');
        $insert->Color = request('Color');
        $insert->Price = request('Price');
        $insert->TotalPrice = request('TotalPrice');
        $insert->Description = request('Description');
        $insert->Status = request('Status');
        $insert->save();

        $Opportunity = request()->all();

        return response()->json([
            'json'=>'Opportunity is Add',
            'Opportunity'=>$Opportunity
        ]);
    }

    public function ListOpportunity(){

        $Opportunitys = Opportunity::all();
          return response()->json($Opportunitys);
    }


    public function EditOpportunity($id){
        $valid = request()->validate([
            'customer_id'=>'required' ,
            'Category'=>'required' ,
            'product_id'=>'required' ,
            'Number'=>'required' ,
            'Price'=>'required' ,
            'TotalPrice'=>'required' ,
            'Description'=>'required' ,
        ]);

        $insert = Opportunity::findOrFail($id);
        $insert->update([
        $insert->customer_id = request('customer_id'),
        $insert->category= request('Category'),
        $insert->product_id = request('product_id'),
        $insert->number = request('Number'),
        $insert->color = request('Color'),
        $insert->price = request('Price'),
        $insert->total_price = request('TotalPrice'),
        $insert->description = request('Description'),
        $insert->status = request('Status'),
        $insert->save()
     ]);

        $Opportunity = request()->all();

        return response()->json([
            'json'=>'Opportunity is Update',
            'Opportunity'=>$Opportunity
        ]);
    }

    public function DeleteOpportunity($id){

        $order = Opportunity::findOrFail($id);
        $order->delete();

        return response()->json(['Opportunity is Deleted']);
    }


}
