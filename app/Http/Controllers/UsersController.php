<?php

namespace App\Http\Controllers;


use App\Http\Requests\InsertCustomerRequest;
use App\Http\Requests\InsertUserRequest;
use App\Models\Customer;
use App\Models\Json;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;


class UsersController extends Controller
{
    public function SingUp(Request $request)
    {


        if ($request->Role == 'Admin') {

            $request->validate([

                'FullName' => ['required'],
                'CompanyName' => ['required'],
                'CompanyAddress' => ['required'],
                'NumberOfCustomers' => ['required'],
                'Email' => ['required'],
                'PhoneNumber' => ['required'],
                'Password' => ['required'],
            ]);

            $hashedPassword = Hash::make($request->password);

            $user = User::create([
                'Role' => $request->Role,
                'Email' => $request->Email,
                'PhoneNumber'=> $request->PhoneNumber,
                'Password'=> $hashedPassword
            ]);

            $insert = new Json();
            $insert->user_id = $user->id;
            $insert->Json = json_encode($request->all());
            $insert->save();


            $_token = $user->createToken('UserToken')->plainTextToken;
            return response()->json([
                'token' => $_token,
                'user' => $user
            ]);


        }


        if ($request->Role == 'Customer') {

            $request->validate([
                'FullName' => ['required'],
                'FatherName' => ['required'],
                'Email' => ['required'],
                'PhoneNumber' => ['required'],
                'Country' => ['required'],
                'City' => ['required'],
                'Address' => ['required'],
                'Gender' => ['required'],
                'NationalCode' => ['required'],
                'Job' => ['required'],
                'Image' => ['required'],
                'Education' => ['required'],
                'CityEducation' => ['required'],
                'Password' => ['required'],
            ]);

            $hashedPassword = Hash::make($request->password);

            $user = User::create([
            'Role' => $request->Role,
            'Email' => $request->Email,
            'PhoneNumber'=> $request->PhoneNumber,
            'Password'=> $hashedPassword
            ]);

            $insert = new Json();
            $insert->user_id = $user->id;
            $insert->Json = json_encode($request->all());
            $insert->save();

            $user_data = $request->all();

            $_token = $user->createToken('UserToken')->plainTextToken;
            return response()->json([
                'data' => $user_data,
                'token' => $_token
            ]);

        }


    }


    public function Logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response()->json([
            'Logout' => 'Goodbye'
        ]);
    }


    public function Login(Request $request)
    {
        $request->validate([
            'PhoneNumber' => ['required'],
            'Email' => ['required', 'email'],
            'Password' => ['required'],
        ]);

        $user = User::where('Email', $request->Email)->first();
        if (!$user) {
            throw ValidationException::withMessages(
                ['Email' => 'user is not found']
            );
        }
        if (!Hash::check($request->password, $user->Password)) {
            throw ValidationException::withMessages(
                ['Email' => 'password is not true']
            );
        }
        $_token = $user->createToken('UserToken')->plainTextToken;
        return response()->json([
            'token' => $_token,
            'user' => $user
        ]);

    }


}

