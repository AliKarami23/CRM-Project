<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertCustomerRequest;
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





    public function ListCustomers(Request $request)
    {
        $query = Customer::query();

        if ($request->has('Name')) {
            $query->where('Name', 'like', '%' . $request->input('Name') . '%');
        }

        if ($request->has('LastName')) {
            $query->where('LastName', 'like', '%' . $request->input('LastName') . '%');
        }

        if ($request->has('Orders')) {
            $ordersFilter = $request->input('Orders');

            if ($ordersFilter == 'has') {
                $query->has('Orders');
            } elseif ($ordersFilter == 'does_not_have') {
                $query->doesntHave('Orders');
            }
        }

        $customers = $query->with('Orders')->select('id', 'name', 'LastName', 'email', 'PhoneNumber')->paginate(10);


        return response()->json($customers);
    }




    public function EditedCustomer(InsertCustomerRequest $request, $id)
    {
        Customer::where('id', $id)->update($request->merge([
            "password" => Hash::make($request->password)
        ])->except('_token'));

        return response()->json(['Customer is Edit']);
    }

    public function DeletedCustomer($id)
    {
        Customer::destroy($id);

        return response()->json(['Customer is Deleted']);
    }


    public function AddCustomer(Request $request)
    {
        $user_id = auth()->user()->id;
        $request->request->user_id = $user_id;
        Customer::create($request->merge([
            "password" => Hash::make($request->password),
            "user_id" => $user_id
        ])->except('_token'));


        return response()->json(['Customer is Add']);
    }
}
