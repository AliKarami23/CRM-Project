<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertCustomerRequest;
use App\Models\Customer;
use App\Models\Factor;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{


    public function panel()
    {
        $orders = Order::count();
        $customers = Customer::count();
        $products = Product::count();
        $factors = Factor::count();


        return view('layout.panel', [
            'customers' => $customers,
            'products' => $products,
            'orders' => $orders,
            'factors' => $factors,
        ]);

    }


    public function addcustomer()
    {
        return view('layout.addcustomer');
    }

    public function customers(Request $request)
    {
        $query = Customer::query();

        if ($request->has('name')) {
            $query->where('name', 'like', '%' . $request->input('name') . '%');
        }

        if ($request->has('fname')) {
            $query->where('fname', 'like', '%' . $request->input('fname') . '%');
        }

        if ($request->has('orders')) {
            $ordersFilter = $request->input('orders');

            if ($ordersFilter == 'has') {
                $query->has('orders');
            } elseif ($ordersFilter == 'does_not_have') {
                $query->doesntHave('orders');
            }
        }

        $customers = $query->with('orders')->select('id', 'name', 'fname', 'email', 'phonenumber')->paginate(10);

        return view('layout.customers', compact('customers'));
    }


    public function editcustomer($id)
    {
        $customer = Customer::find($id);

        return view('layout.editcustomer', ['customers' => $customer]);
    }


    public function edited_customer(InsertCustomerRequest $request, $id)
    {
        Customer::where('id', $id)->update($request->merge([
            "password" => Hash::make($request->password)
        ])->except('_token'));

        return redirect()->route('customers');
    }

    public function deletedcustomer($id)
    {
        Customer::destroy($id);

        return redirect()->route('customers');
    }


    public function store(Request $request)
    {
        $user_id = auth()->user()->id;
        $request->request->user_id = $user_id;
        Customer::create($request->merge([
            "password" => Hash::make($request->password),
            "user_id" => $user_id
        ])->except('_token'));


        return redirect()->route('customers');
    }
}
