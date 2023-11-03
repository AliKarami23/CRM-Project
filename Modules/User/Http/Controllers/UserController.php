<?php

namespace Modules\User\Http\Controllers;

use App\Http\Controllers\SmsController;
use App\Jobs\SingUpEmailJob;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Modules\User\Http\Requests\SellerRequest;
use Modules\User\Http\Requests\CustomerRequest;

class UserController extends Controller
{
    public function SingUp(Request $request)
    {
        $rules = [
            'FullName' => ['required'],
            'Email' => ['required'],
            'PhoneNumber' => ['required'],
            'Password' => ['required'],
        ];

        $role = '';
        if ($request->Role == 'Seller') {
            $rules = array_merge($rules, [
                'CompanyName' => ['required'],
                'CompanyAddress' => ['required'],
                'NumberOfCustomers' => ['required'],
            ]);
            $role = 'Seller';
        } elseif ($request->Role == 'Seller') {
            $rules = array_merge($rules, [
                'NationalCode' => ['required'],
            ]);
            $role = 'Seller';
        } elseif ($request->Role == 'Customer') {
            $rules = array_merge($rules, [
                'FatherName' => ['required'],
                'Country' => ['required'],
                'City' => ['required'],
                'Address' => ['required'],
                'Gender' => ['required'],
                'NationalCode' => ['required'],
                'Job' => ['required'],
                'Image' => ['required'],
                'Education' => ['required'],
                'CityEducation' => ['required'],
            ]);
            $role = 'Customer';
        } else {
            return response()->json(['error' => 'Invalid Role'], 400);
        }

        $request->validate($rules);

        $hashedPassword = Hash::make($request->Password);
        $user_data = $request->merge(['Password' => $hashedPassword])->all();

        $user = User::create($user_data);
        $user->assignRole($role);

        $tmp = new SmsController();
        $PhoneNumber = $request->PhoneNumber;
        $FullName = $request->FullName;
        $Password = $request->Password;
        $tmp->SendSmsSingUp($PhoneNumber, $FullName, $Password);

        $_token = $user->createToken('UserToken')->plainTextToken;

        $content = $role == 'Customer' ? "Dear user, welcome to our platform. We're glad to have you on board." : 'Welcome email sent successfully';

        if ($role == 'Customer') {
            $Email = $request->Email;
            SingUpEmailJob::dispatch($Email, $content);
        }

        return response()->json([
            'data' => $user_data,
            'token' => $_token,
            'message' => $content
        ]);
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
