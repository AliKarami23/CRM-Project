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
    public function SingIn(Request $request)
    {


        $request->validate([
            'FullName' => ['required'],
            'PhoneNumber' => ['required'],
            'Password' => ['required'],
        ]);

        $user = User::create($request->merge([
            "Password"=>Hash::make($request->password)
        ])->except('_token'));

        $_token = $user->createToken('UserToken')->plainTextToken;
        return response()->json(['token' => $_token]);


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

        $user = User::where('Email', $request->Email)->first();
        if (!$user){
            throw ValidationException::withMessages(
                ['Email' => 'user is not found']
            );
        }
        if (!Hash::check($request->password,$user->Password)){
            throw ValidationException::withMessages(
                ['Email' => 'password is not true']
            );
        }
        $_token = $user->createToken('UserToken')->plainTextToken;
        return response()->json(['token' => $_token]);

    }


}

