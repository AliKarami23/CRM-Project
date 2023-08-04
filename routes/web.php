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

Route::get('/', [\App\Http\Controllers\usersController::class, 'panel'] )->name('home');

Route::get('/header', [\App\Http\Controllers\usersController::class, 'header'] )->name('header');

Route::get('/footer', [\App\Http\Controllers\usersController::class, 'footer'] )->name('footer');

Route::get('/singin', [\App\Http\Controllers\usersController::class, 'singin'] )->name('singin');



Route::prefix('/panel')->group(function () {

    Route::get('', [\App\Http\Controllers\usersController::class, 'panel'] )->name('panel');

    Route::get('/adduser', [\App\Http\Controllers\usersController::class, 'adduser'] )->name('adduser');

    Route::get('/users', [\App\Http\Controllers\usersController::class, 'users'] )->name('users');

    Route::get('/productsList', [\App\Http\Controllers\usersController::class, 'listproducts'] )->name('listproducts');

    Route::get('/Listoforders', [\App\Http\Controllers\usersController::class, 'listorders'] )->name('listorders');

    Route::get('/Neworder', [\App\Http\Controllers\usersController::class, 'Neworder'] )->name('Neworder');

    Route::get('/Newproduct', [\App\Http\Controllers\usersController::class, 'Newproduct'] )->name('Newproduct');



});



//add user in panel for db
Route::post('/layout/users', [\App\Http\Controllers\usersController::class, 'store'])->name('store');











