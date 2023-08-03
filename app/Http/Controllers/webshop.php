<?php

namespace App\Http\Controllers;
use App\Models\newmodel;

use Illuminate\Http\Request;
use APP\test;
class webshop extends Controller
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

    public function singin()
    {
        return view('layout.singin');
    }

    public function login()
    {
        return view('layout.login');
    }

    public function users()
    {
        return view('layout.users');
    }

    public function panel()
    {
        return view('layout.panel');
    }

    public function usersgo()
    {
        return view('layout.users');
    }

    public function logingo()
    {
        return view('layout.login');
    }

    public function singingo()
    {
        return view('layout.singin');
    }

    public function panelgo()
    {
        return view('layout.panel');
    }

    public function addusers()
    {
        return view('layout.addusers');
    }

    public function connusers()
    {
        return view('layout.connusers');
    }
    public function test(){

        $test = $test::all();


    }

    public function listproducts()
    {
        return view('layout.productsList');
    }

    public function listorders()
    {
        return view('layout.Listoforders');
    }

    public function Neworder()
    {
        return view('layout.Neworder');
    }

    public function newproduct()
    {
        return view('layout.Newproduct');
    }


    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'fname' => 'required',
            'dadname' => 'required',
            'email' => 'required',
            'phonenumber' => 'required|numeric',
            'country' => 'required',
            'City' => 'required',
            'Address' => 'required',
            'gender' => 'required',
            'nationalcode' => 'required|numeric',
            'job' => 'required',
            'image' => 'required',
            'education' => 'required',
            'cityofeducation' => 'required',
            'password' => 'required',

        ]);

        $newUser = new newmodel();
        $newUser->name = $request->input('name');
        $newUser->fname = $request->input('fname');
        $newUser->dadname = $request->input('dadname');
        $newUser->email = $request->input('email');
        $newUser->phonenumber = $request->input('phonenumber');
        $newUser->country = $request->input('country');
        $newUser->City = $request->input('City');
        $newUser->Address = $request->input('Address');
        $newUser->gender = $request->input('gender');
        $newUser->nationalcode = $request->input('nationalcode');
        $newUser->job = $request->input('job');
        $newUser->image = $request->input('image');
        $newUser->education  = $request->input('education');
        $newUser->cityofeducation = $request->input('cityofeducation');
        $newUser->password = $request->input('password');
        $newUser->save();

        return view('layout.users');

    }


}

