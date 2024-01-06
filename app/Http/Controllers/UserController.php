<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Http\Requests\SellerRequest;
use App\Jobs\SingUpEmailJob;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    public function SingUp(Request $request)
    {


        if ($request->Role == 'Seller') {

            $request->validate([

                'FullName' => ['required'],
                'CompanyName' => ['required'],
                'CompanyAddress' => ['required'],
                'NumberOfCustomers' => ['required'],
                'Email' => ['required'],
                'PhoneNumber' => ['required'],
                'Password' => ['required'],
            ]);

            $hashedPassword = Hash::make($request->Password);

            $user = User::create($request->merge(['Password' => $hashedPassword])->all());
            $user->assignRole('Seller');

            SingUpEmailJob::dispatch($request->PhoneNumber, $request->FullName);

//            $tmp = new SmsController();
//            $PhoneNumber=$request->PhoneNumber;
//            $FullName=$request->FullName;
//            $Password=$request->Password;
//            $tmp->SendSmsSingUp($PhoneNumber,$FullName,$Password);

            $_token = $user->createToken('UserToken')->plainTextToken;
            return response()->json([
                'token' => $_token,
                'user' => $user,
                'message' => 'Welcome email sent successfully'
            ]);


        }
        if ($request->Role == 'Admin') {


            $request->validate([

                'FullName' => ['required'],
                'Email' => ['required'],
                'NationalCode' => ['required'],
                'PhoneNumber' => ['required'],
                'Password' => ['required'],
            ]);

            $hashedPassword = Hash::make($request->Password);

            $user = User::create($request->merge(['Password' => $hashedPassword])->all());
            $user->assignRole('Admin');


            $_token = $user->createToken('UserToken')->plainTextToken;

//            $tmp = new SmsController();
//            $PhoneNumber=$request->PhoneNumber;
//            $FullName=$request->FullName;
//            $Password=$request->Password;
//            $tmp->SendSmsSingUp($PhoneNumber,$FullName,$Password);

            return response()->json([
                'token' => $_token,
                'user' => $user,
                'message' => 'Welcome email sent successfully'
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

            $hashedPassword = Hash::make($request->Password);

            $user = User::create($request->merge(['Password' => $hashedPassword])->all());

            if ($request->hasFile('Image')) {
                $imagePath = $request->file('Image')->store('images');
            } else {
                $imagePath = null;
            }

            $user_data = $request->all();

            $user->assignRole('Customer');

            $content = "Dear user, welcome to our platform. We're glad to have you on board.";
            $Email = 'ali@gmail.com';
            SingUpEmailJob::dispatch($Email, $content);

//            $tmp = new SmsController();
//            $PhoneNumber=$request->PhoneNumber;
//            $FullName=$request->FullName;
//            $Password=$request->Password;
//            $tmp->SendSmsSingUp($PhoneNumber,$FullName,$Password);

            $_token = $user->createToken('UserToken')->plainTextToken;
            return response()->json([
                'data' => $user_data,
                'token' => $_token,
                'message' => 'Welcome email sent successfully'
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


    public function login(Request $request)
    {
        $request->validate([
            'Email' => ['required', 'email'],
            'Password' => ['required'],
        ]);

        $user = User::where('Email', $request->Email)->first();

        if (!$user || !Hash::check($request->Password, $user->Password)) {
            throw ValidationException::withMessages([
                'Email' => ['Invalid credentials']
            ]);
        }

        $token = $user->createToken('UserToken')->plainTextToken;

        return response()->json([
            'token' => $token,
            'user' => $user
        ]);
    }


    public function ListUser()
    {
        $users = User::all();
        return response()->json([
            'users' => $users
        ]);
    }

    public function ListCustomer()
    {
        $Customer = User::where('Role', 'Customer')->get();
        return response()->json([
            'Customer' => $Customer
        ]);
    }

    public function DeleteCustomer($id)
    {
        $user = User::where('Role', 'Customer')->find($id);

        if (!$user) {
            return response()->json(['message' => 'Customer not found'], 404);
        }

        $user->delete();

        return response()->json(['message' => 'Customer deleted successfully']);
    }

    public function EditCustomer(CustomerRequest $request, $id)
    {
        $user = User::where('Role', 'Customer')->find($id);

        if (!$user) {
            return response()->json(['message' => 'Customer not found'], 404);
        }


        $user->update(array_merge($request->only(['Role', 'FullName', 'FatherName', 'Email', 'PhoneNumber', 'Country', 'City', 'Address', 'Gender', 'NationalCode', 'Job', 'Image', 'Education', 'CityEducation']), ['Password' => Hash::make($request->Password)]));

        $customer = $request->all();

        return response()->json([
            'message' => 'Customer information updated successfully',
            'customer' => $customer
        ]);
    }


    public function ListSeller()
    {

        $Seller = User::where('Role', 'Seller')->get();
        return response()->json([
            'Seller' => $Seller
        ]);
    }


    public function DeleteSeller($id)
    {
        $Seller = User::where('Role', 'Seller')->find($id);

        if (!$Seller) {
            return response()->json(['message' => 'Seller not found'], 404);
        }

        $Seller->delete();

        return response()->json(['message' => 'Seller deleted successfully'], 200);
    }


    public function EditSeller(SellerRequest $request, $id)
    {
        $Seller = User::where('Role', 'Seller')->find($id);

        if (!$Seller) {
            return response()->json(['message' => 'Seller not found'], 404);
        }

        $request->validate([

        ]);


        $Seller->update([
            'FullName' => $request->FullName,
            'CompanyName' => $request->CompanyName,
            'CompanyAddress' => $request->CompanyAddress,
            'NumberOfCustomers' => $request->NumberOfCustomers,
            'Email' => $request->Email,
            'PhoneNumber' => $request->PhoneNumber,
            'Password' => Hash::make($request->Password)
        ]);
        $Seller_request = $request->all();
        return response()->json([
            'message' => 'Seller updated successfully',
            'Seller' => $Seller_request
        ], 200);
    }


}
