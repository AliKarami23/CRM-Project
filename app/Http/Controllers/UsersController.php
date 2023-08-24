<?php

namespace App\Http\Controllers;


use App\Http\Requests\InsertCustomerRequest;
use App\Http\Requests\InsertUserRequest;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;


class UsersController extends Controller
{
    public function singin(InsertUserRequest $request)
    {


        $credentials = $request->validate([
            'fullname' => ['required'],
            'email' => ['required', 'email'],
            'phonenumber' => ['required'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            User::create($request->merge([
                "password"=>Hash::make($request->password)
            ])->except('_token'));
            return redirect()->intended('panel');
        }
        else{
            return Redirect::back()->withErrors([
                'email' => 'اطلاعات اشتباه می باشد'
            ]);
        }

    }

}

