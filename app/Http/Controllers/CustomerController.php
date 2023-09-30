<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\Models\Factor;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{


    public function AddCustomer(Request $request)
    {
        $request->validate([
            'Role'=> 'required',
            'Name' => 'required|min:2|max:50',
            'LastName' => 'required|min:2|max:50',
            'FatherName' => 'required|min:2|max:50',
            'Email' => 'required|email',
            'PhoneNumber' => 'required|numeric',
            'Country' => 'required',
            'City' => 'required',
            'Address' => 'required',
            'Gender' => 'required',
            'NationalCode' => 'required',
            'Job' => 'required',
            'Image' => 'required',
            'Education' => 'required',
            'CityEducation' => 'required',
            'Password' => 'required|min:8',
        ]);


        $user_id = auth()->user()->id;
        $customer = $request->all();
        $request->request->user_id = $user_id;
        User::create($request->merge([
            "password" => Hash::make($request->password),
            'Role'=> $request->Role,
            "user_id" => $user_id
        ])->except('_token'));


        return response()->json([
            'json'=>'Customer is Add',
            'customer'=>$customer
        ]);
    }


    public function ListCustomers(Request $request)
    {
        $query = User::query();

        if ($request->has('Name')) {
            $query->where('Name', 'like', '%' . $request->input('Name') . '%');
        }

        if ($request->has('Orders')) {
            $ordersFilter = $request->input('Orders');

            if ($ordersFilter == 'has') {
                $query->has('Orders');
            } elseif ($ordersFilter == 'does_not_have') {
                $query->doesntHave('Orders');
            }
        }

        $customers = $query->with('Orders')->select('id', 'Email', 'PhoneNumber')->paginate(10);


        return response()->json($customers);
    }




    public function EditCustomer(Request $request, $id)
    {

        $request->validate([
            'Role'=> 'required',
            'Name' => 'required|min:2|max:50',
            'LastName' => 'required|min:2|max:50',
            'FatherName' => 'required|min:2|max:50',
            'Email' => 'required|email',
            'PhoneNumber' => 'required|numeric',
            'Country' => 'required',
            'City' => 'required',
            'Address' => 'required',
            'Gender' => 'required',
            'NationalCode' => 'required',
            'Job' => 'required',
            'Image' => 'required',
            'Education' => 'required',
            'CityEducation' => 'required',
            'Password' => 'required|min:8',
        ]);

        $customer = $request->all();
        User::where('id', $id)->where('Role'=='Customer')->update($request->merge([
            "password" => Hash::make($request->password)
        ])->except('_token'));

        return response()->json([
            'json'=>'Customer is Edit',
            'customer'=>$customer
        ]);
    }

    public function DeletedCustomer($id)
    {
        User::where('Role'=='Customer')->destroy($id);

        return response()->json([
            'json'=>'Customer is Deleted']);
    }



}
