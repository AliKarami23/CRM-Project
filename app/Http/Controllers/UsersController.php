<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class usersController extends Controller
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
        $users = Users::select('id', 'name', 'fname', 'email', 'phonenumber')->get();

        return view('layout.users', ['users' => $users]);
    }

    public function edituser($id)
    {
        $user = Users::find($id);

        return view('layout.edituser', ['users' => $user]);
    }

    public function editusergo(){

        return view('layout.panel');

    }

    public function edited_user(Request $request, $id)
    {
        $user = Users::where('id', $id)->firstOrFail();

        $user->update([
            'name' => $request->name,
            'fname' => $request->fname,
            'dadname' => $request->dadname,
            'email' => $request->email,
            'phonenumber' => $request->phonenumber,
            'country' => $request->country,
            'City' => $request->City,
            'Address' => $request->Address,
            'gender' => $request->gender,
            'nationalcode' => $request->nationalcode,
            'job' => $request->job,
            'image' => $request->image,
            'education' => $request->education,
            'cityofeducation' => $request->cityofeducation,
            'password' => $request->password,
            'updated_at' => now(),
        ]);

        return redirect()->route('panel');
    }

    public function deleteduser($id)
    {
        $user = Users::find($id);

        if ($user) {
            $user->delete();
        }

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


    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'name' => 'required|min:2|max:50',
            'fname' => 'required|min:2|max:50',
            'dadname' => 'required|min:5|max:50',
            'email' => 'required|email',
            'phonenumber' => 'required|numeric',
            'country' => 'required',
            'City' => 'required',
            'Address' => 'required',
            'gender' => 'required',
            'nationalcode' => 'required',
            'job' => 'required',
            'image' => 'required',
            'education' => 'required',
            'cityofeducation' => 'required',
            'password' => 'required|min:8',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = new Users();

        $user->name = request('name');
        $user->fname = request('fname');
        $user->dadname = request('dadname');
        $user->email = request('email');
        $user->phonenumber =  request('phonenumber');
        $user->country = request('country');
        $user->City = request('City');
        $user->Address = request('Address');
        $user->gender = request('gender');
        $user->nationalcode = request('nationalcode');
        $user->job = request('job');
        $user->image = request('image');
        $user->education = request('education');
        $user->cityofeducation = request('cityofeducation');
        $user->password = request('password');
        $user->save();


        return redirect()->route('panel');
    }


}

