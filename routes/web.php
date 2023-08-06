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

    Route::get('', [\App\Http\Controllers\usersController::class, 'home'] )->name('panel');

    Route::get('/adduser', [\App\Http\Controllers\usersController::class, 'adduser'] )->name('adduser');

    Route::get('/users', [\App\Http\Controllers\usersController::class, 'users'] )->name('users');

    Route::get('/edituser/{id}', [\App\Http\Controllers\usersController::class, 'edituser'])->name('edituser');

    Route::get('/deleteduser/{id}', [\App\Http\Controllers\usersController::class, 'deleteduser'])->name('deleteduser');

    Route::get('/deleteduser/{id}/panel', [\App\Http\Controllers\usersController::class, 'deleteduser'] )->name('deleteduser');

    Route::get('/edituser/{id}/panel', [\App\Http\Controllers\usersController::class, 'editusergo'] )->name('editusergo');

    Route::get('/deleteduser/{id}/panel', [\App\Http\Controllers\usersController::class, 'deletedusergo'] )->name('deletedusergo');

    Route::get('/deleteduser/   {id}/panel', [\App\Http\Controllers\usersController::class, 'deletedusergo'] )->name('deletedusergo');

    Route::post('/users/edituser/{id}', [\App\Http\Controllers\usersController::class, 'edited_user'] )->name('edited_user');

    Route::get('/productsList', [\App\Http\Controllers\usersController::class, 'listproducts'] )->name('listproducts');

    Route::get('/Newproduct', [\App\Http\Controllers\usersController::class, 'Newproduct'] )->name('Newproduct');



});



//add user in panel for db
Route::post('/layout/users', [\App\Http\Controllers\usersController::class, 'store'])->name('store');



Route::get('/panel/Neworder', [\App\Http\Controllers\OrderController::class, 'Neworder'] );
Route::post('/panel/Neworder', [\App\Http\Controllers\OrderController::class, 'add_order'])->name('add_order');
Route::get('/panel/Listoforders' , [\App\Http\Controllers\OrderController::class , 'listorders'])->name('list_order');


