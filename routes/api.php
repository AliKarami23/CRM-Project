<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;



//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
Route::group(['prefix'=>'panel','middleware'=>['auth']],function () {
    Route::get('/addcustomer', [CustomerController::class, 'addcustomer'] )->name('addcustomer');
    Route::get('/editcustomer/{id}', [CustomerController::class, 'editcustomer'])->name('editcustomer');
    Route::post('/customers/editcustomer/{id}', [CustomerController::class, 'edited_customer'] )->name('edited_customer');

});

Route::post('/singin', [UsersController::class, 'singin'] )->name('singin');
Route::post('/login', [LoginController::class, 'login'] )->name('login');

