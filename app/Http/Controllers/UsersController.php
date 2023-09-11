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
            'phonenumber' => ['required'],
            'password' => ['required'],
        ]);

        $user = User::create($request->merge([
            "password"=>Hash::make($request->password)
        ])->except('_token'));

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('panel');
        }
        else{
            return Redirect::back()->withErrors([
                'email' => 'اطلاعات اشتباه می باشد'
            ]);
        }

    }

    public function logout(){

        auth()->logout();
        return redirect()->route('home');

    }

}

