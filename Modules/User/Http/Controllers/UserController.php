<?php

namespace Modules\User\Http\Controllers;

use App\Http\Requests\EditAdminRequest;
use App\Http\Requests\EditCustomerRequest;
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

            $hashedPassword = Hash::make($request->Password);

            $user = User::create(request()->all());

            $user->assignRole('Admin');

            SingUpEmailJob::dispatch($request->PhoneNumber,$request->FullName);


            $_token = $user->createToken('UserToken')->plainTextToken;
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

            $user = User::create(request()->all());

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

        if (!Hash::check($request->Password, $user->Password)) {
            throw ValidationException::withMessages(
                ['Email' => 'Password is not true']
            );
        }

        $_token = $user->createToken('UserToken')->plainTextToken;
        return response()->json([
            'token' => $_token,
            'user' => $user
        ]);
    }

    public function ListUser(){
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

    public function EditCustomer(EditCustomerRequest $request, $id)
    {
        $user = User::where('Role', 'Customer')->find($id);

        if (!$user) {
            return response()->json(['message' => 'Customer not found'], 404);
        }


        $user->update(array_merge($request->only(['Role', 'FullName', 'FatherName', 'Email', 'PhoneNumber', 'Country', 'City', 'Address', 'Gender', 'NationalCode', 'Job', 'Image', 'Education', 'CityEducation']), ['Password' => Hash::make($request->Password)]));


        return response()->json(['message' => 'Customer information updated successfully']);
    }


    public function ListAdmin(){

        $Admin = User::where('Role', 'Admin')->get();
        return response()->json([
            'Admin' => $Admin
        ]);
    }


    public function DeleteAdmin($id)
    {
        $admin = User::where('Role', 'Admin')->find($id);

        if (!$admin) {
            return response()->json(['message' => 'Admin not found'], 404);
        }

        $admin->delete();

        return response()->json(['message' => 'Admin deleted successfully'], 200);
    }



    public function EditAdmin(EditAdminRequest $request, $id)
    {
        $admin = User::where('Role', 'Admin')->find($id);

        if (!$admin) {
            return response()->json(['message' => 'Admin not found'], 404);
        }

        $request->validate([

        ]);


        $admin->update([
            'FullName' => $request->FullName,
            'CompanyName' => $request->CompanyName,
            'CompanyAddress' => $request->CompanyAddress,
            'NumberOfCustomers' => $request->NumberOfCustomers,
            'Email' => $request->Email,
            'PhoneNumber' => $request->PhoneNumber,
            'Password' => Hash::make($request->Password)
        ]);

        return response()->json(['message' => 'Admin updated successfully'], 200);
    }




}
