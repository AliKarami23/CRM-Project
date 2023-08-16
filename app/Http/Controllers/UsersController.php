<?php

namespace App\Http\Controllers;
use App\Http\Requests\InsertUserRequest;
use App\Models\Factor;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{
    public function home()
    {
        $orders = Order::count();
        $users = user::count();
        $products = Product::count();
        $factors = Factor::count();


        return view('layout.panel' , [
            'users' => $users,
            'products' => $products,
            'orders' => $orders,
            'factors' => $factors,
        ]);
    }

    public function header()
    {
        return view('layout.header');    }

    public function footer()
    {
        return view('layout.footer');
    }
    public function panel()
    {
        return view('layout.panel');
    }

    public function singin()
    {
        return view('layout.singin');
    }

    public function adduser()
    {
        return view('layout.adduser');
    }

    public function users(Request $request)
    {
        $query = User::query();

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

        $users = $query->with('orders')->select('id', 'name', 'fname', 'email', 'phonenumber')->paginate(10);

        return view('layout.users', compact('users'));
    }


    public function edituser($id)
    {
        $user = User::find($id);

        return view('layout.edituser', ['users' => $user]);
    }

    public function editusergo(){

        return view('layout.panel');

    }

    //update user in panel
    public function edited_user(InsertUserRequest $request, $id)
    {
        User::where('id',$id)->update($request->merge([
            "password"=>Hash::make($request->password)
        ])->except('_token'));

        return redirect()->route('users');
    }
    //delete user in panel
    public function deleteduser($id)
    {
        User::destroy($id);

        return redirect()->route('users');
    }

    public function deletedusergo()
    {
        return view('layout.panel');

    }




    public function newproduct()
    {
        return view('layout.Newproduct');
    }

    //add user in panel
    public function store(InsertUserRequest $request)
    {
        User::create($request->merge([
            "password"=>Hash::make($request->password)
        ])->toArray());


        return redirect()->route('users');
    }

}

