<?php

namespace App\Http\Controllers;
use App\Http\Requests\InsertUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{
    public function home()
    {
        return view('layout.panel');
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

    public function users()
    {
        $users = User::select('id', 'name', 'fname', 'email', 'phonenumber')->get();

        return view('layout.users', ['users' => $users]);
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

        return redirect()->route('panel');
    }

    public function deletedusergo()
    {
        return view('layout.panel');

    }

    public function listproducts()
    {
        return view('layout.productsList');
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

