<?php

namespace App\Http\Controllers;


use App\Http\Requests\InsertCustomerRequest;
use App\Http\Requests\InsertUserRequest;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;


class UsersController extends Controller
{
    public function SingIn(InsertUserRequest $request)
    {


        $credentials = $request->validate([
            'PhoneNumber' => ['required'],
            'Password' => ['required'],
        ]);

        $user = User::create($request->merge([
            "Password"=>Hash::make($request->password)
        ])->except('_token'));

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return response()->json(['You are registered']);
        }
        else{
            return Redirect::back()->withErrors([
                'Email' => 'The information is not correct'
            ]);
        }

    }





    public function Logout(Request $request){
        $request->user()->tokens()->delete();
        return response()->json(['Logout' => 'good bye']);
    }




    public function Login(Request $request)
    {
        $request->validate([
            'FullName' => ['required'],
            'Email' => ['required', 'email'],
            'Password' => ['required'],
        ]);

        $user = User::where('Email', $request->email)->first();
        if (!$user){
            throw ValidationException::withMessages(
                ['Email' => 'user is not found']
            );
        }
        if (!Hash::check($request->password,$user->password)){
            throw ValidationException::withMessages(
                ['Email' => 'password is not true']
            );
        }
        $_token = $user->createToken('UserToken')->plainTextToken;
        return response()->json(['token' => $_token]);

    }


}

