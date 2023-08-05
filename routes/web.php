<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\usersController;
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

Route::get('/', [usersController::class, 'panel'] )->name('home');

Route::get('/header', [usersController::class, 'header'] )->name('header');

Route::get('/footer', [usersController::class, 'footer'] )->name('footer');

Route::get('/singin', [usersController::class, 'singin'] )->name('singin');



Route::prefix('/panel')->group(function () {

    Route::get('', [usersController::class, 'home'] )->name('panel');

    Route::get('/adduser', [usersController::class, 'adduser'] )->name('adduser');

    Route::get('/users', [usersController::class, 'users'] )->name('users');

    Route::get('/edituser/{id}', [usersController::class, 'edituser'])->name('edituser');

    Route::get('/deleteduser/{id}', [usersController::class, 'deleteduser'])->name('deleteduser');

    Route::get('/deleteduser/{id}/panel', [usersController::class, 'deleteduser'] )->name('deleteduser');

    Route::get('/edituser/{id}/panel', [usersController::class, 'editusergo'] )->name('editusergo');

    Route::get('/deleteduser/{id}/panel', [usersController::class, 'deletedusergo'] )->name('deletedusergo');

    Route::get('/deleteduser/   {id}/panel', [usersController::class, 'deletedusergo'] )->name('deletedusergo');

    Route::post('/users/edituser/{id}', [usersController::class, 'edited_user'] )->name('edited_user');

    Route::get('/productsList', [usersController::class, 'listproducts'] )->name('listproducts');

    Route::get('/Newproduct', [usersController::class, 'Newproduct'] )->name('Newproduct');



});



//add user in panel for db
Route::post('/layout/users', [usersController::class, 'store'])->name('store');




Route::prefix('/panel')->group(function () {

  Route::get('/Neworder', [OrderController::class, 'Neworder'])->name('New_order');
  Route::post('Neworder', [OrderController::class, 'add_order'])->name('add_order');

  Route::get('/Listoforders' , [OrderController::class , 'listorders'])->name('list_order');

  Route::get('/edit/{id}' , [OrderController::class , 'show_edit_order'])->name('show_edit_order');
  Route::put('/edit/{id}' , [OrderController::class , 'edit'])->name('edit');

  Route::delete('/delete/{id}' , [OrderController::class , 'delete'])->name('delete');
});

