<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertUserRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function showsingin()
    {
        return view('layout.LoginAndSingin.singin');
    }

    public function showlogin()
    {
        return view('layout.LoginAndSingin.login');
    }

    public function home()
    {
        return view('layout.welcome');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'fullname' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


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
}
