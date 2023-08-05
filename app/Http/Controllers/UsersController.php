<?php

namespace App\Http\Controllers;
use App\Models\phpmakeen;

use Illuminate\Http\Request;
use APP\test;
use Illuminate\Support\Facades\DB;

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
        $result = DB::table('addusersinpanel')
            ->select('id', 'name', 'fname', 'email', 'phonenumber')
            ->get();
        return view('layout.users', ['users' => $result]);
    }

        public function edituser($id)
    {
        $result = DB::table('addusersinpanel')
            ->where(['id' => $id])
            ->first();
        return view('layout.edituser', ['users' => $result]);
    }

    public function editusergo(){

        return view('layout.panel');

    }

    public function edited_user(Request $request, $id)
    {
        DB::table('addusersinpanel')
            ->where([
                'id' => $id
            ])
            ->update([
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
        $deleted = DB::table('addusersinpanel')->where('id', '=', $id)->delete();

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
        if (strlen($request->name) == 0) {
            $error = "لطفا نام خود را پر بکنید";
            die(json_encode($error));
        }
        if (strlen($request->name) > 50) {
            $error = "نام شما طولانی است";
            die(json_encode($error));
        }

        if (strlen($request->fname) == 0) {
            $error = "لطفان نام خانوادگی را پر بکنید";
            die(json_encode($error));
        }
        if (strlen($request->fname) > 50) {
            $error = "نام خانوادگی شما طولانی است";
            die(json_encode($error));
        }
        if (strlen($request->nationalcode) != 10) {
            $error = "کد ملی صحیح نیست";
            die(json_encode($error));
        }
        if (!($request->password == $request->confrim)) {
            $error = "رمز عبور یکسان نیست";
            die(json_encode($error));
        }



        $result = DB::table('addusersinpanel')->insert([
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
            'password' => $request->password


        ]);

        return redirect()->route('panel');



    }


}

