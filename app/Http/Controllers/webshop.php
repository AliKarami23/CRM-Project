<?php

namespace App\Http\Controllers;


class webshop extends Controller
{
    public static function home()
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


}
