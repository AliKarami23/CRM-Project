<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//Route::post('/register' , function () {
//    return "ok";
//})->name('register');

//Route::get('/abcd' , function (){
//    return view('welcome');
//});



//Route::post('/register' , function () {
//    return response()->json(request()->toArray());
//})->name('register');


Route::get('/', function () {
    $obj = ['', '', '', '', '', ''];
    return view('welcome', ['array' => $obj]);
});

Route::post('/register', function () {
    $info = request()->toArray();
    unset($info["_token"]);
    return view('welcome', ['array' => $info]);
})->name('register');



Route::prefix('admin')->group(function () {
    Route::get('/' , function (){
        return "admin page";
    });

    Route::get('/users' , function (){
        return "users  page";
    });
});
