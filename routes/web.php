<?php

use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
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

Route::get('/', [UsersController::class, 'home'] )->name('home');

Route::get('/header', [UsersController::class, 'header'] )->name('header');

Route::get('/footer', [UsersController::class, 'footer'] )->name('footer');

Route::get('/singin', [UsersController::class, 'singin'] )->name('singin');


//USERS
Route::prefix('/panel')->group(function () {

    Route::get('', [UsersController::class, 'panel'] )->name('panel');

    Route::get('/adduser', [UsersController::class, 'adduser'] )->name('adduser');

    Route::get('/users', [UsersController::class, 'users'] )->name('users');

    Route::get('/edituser/{id}', [UsersController::class, 'edituser'])->name('edituser');

    Route::get('/deleteduser/{id}', [UsersController::class, 'deleteduser'])->name('deleteduser');

    Route::get('/deleteduser/{id}/panel', [UsersController::class, 'deleteduser'] )->name('deleteduser');

    Route::post('/users/edituser/{id}', [UsersController::class, 'edited_user'] )->name('edited_user');





});

Route::post('/layout/users', [UsersController::class, 'store'])->name('store');

//ORDERS
Route::prefix('/panel')->group(function () {

  Route::get('/Neworder', [OrderController::class, 'Neworder'])->name('Neworder');
  Route::post('Neworder', [OrderController::class, 'add_order'])->name('add_order');
  Route::get('/Listoforders' , [OrderController::class , 'listorders'])->name('listorders');
  Route::get('/edit/{id}' , [OrderController::class , 'show_edit_order'])->name('show_edit_order');
  Route::put('/edit/{id}' , [OrderController::class , 'edit'])->name('edit');
  Route::delete('/delete/{id}' , [OrderController::class , 'delete'])->name('delete');




});

//PRODUCTS
Route::prefix('/panel')->group(function(){

    Route::get('/Newproduct' , [ProductController::class , 'Newproduct'])->name('Newproduct');
    Route::post('Newproduct' ,[ProductController::class , 'add_product'])->name('add_product');
    Route::get('/productsList' , [ProductController::class , 'productsList'])->name('productsList');

});

Route::prefix('/panel')->group(function (){

    Route::get('/newopportunity' , [OpportunityController::class , 'Newopportunity']);
    Route::post('Newopportunity' ,[OpportunityController::class , 'add_opportunity'])->name('add_opportunity');
    Route::get('/listopportunity' , [OpportunityController::class , 'listoppo']);
    Route::get('/edit/oppo/{id}' , [OpportunityController::class , 'show_edit_oppo'])->name('show_edit_oppo');
    Route::put('/edit/oppo/{id}' , [OpportunityController::class , 'edit_oppo'])->name('edit_oppo');
    Route::delete('/delete/oppo/{id}' , [OpportunityController::class , 'delete'])->name('delete_oppo');
});

