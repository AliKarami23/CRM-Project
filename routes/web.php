<?php

use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class, 'home'] )->name('home');
Route::get('/singin', [LoginController::class, 'showsingin'] )->name('showsingin');
Route::get('/login', [LoginController::class, 'showlogin'] )->name('showlogin');
Route::post('/singin', [UsersController::class, 'singin'] )->name('singin');
Route::post('/login', [LoginController::class, 'login'] )->name('login');




Route::group(['prefix'=>'panel','middleware'=>['auth']],function () {
    //CUSTOMERS
    Route::get('', [CustomerController::class, 'panel'] )->name('panel');
    Route::get('/addcustomer', [CustomerController::class, 'addcustomer'] )->name('addcustomer');
    Route::get('/customers', [CustomerController::class, 'customers'] )->name('customers');
    Route::get('/logout', [UsersController::class, 'logout'] )->name('logout');
    Route::get('/editcustomer/{id}', [CustomerController::class, 'editcustomer'])->name('editcustomer');
    Route::post('/customers/editcustomer/{id}', [CustomerController::class, 'edited_customer'] )->name('edited_customer');
    Route::get('/deletedcustomer/{id}', [CustomerController::class, 'deletedcustomer'])->name('deletedcustomer');
    Route::get('/deletedcustomer/{id}/panel', [CustomerController::class, 'deletedcustomer'] )->name('deletedcustomer');
    Route::post('/customers/editcustomer/{id}', [CustomerController::class, 'edited_customer'] )->name('edited_customer');
    Route::post('/layout/customers', [CustomerController::class, 'store'])->name('store');





    //ORDERS
    Route::get('/Neworder', [OrderController::class, 'Neworder'])->name('Neworder');
    Route::post('Neworder', [OrderController::class, 'add_order'])->name('add_order');
    Route::get('/Listoforders' , [OrderController::class , 'listorders'])->name('listorders');
    Route::get('/edit/{id}' , [OrderController::class , 'show_edit_order'])->name('show_edit_order');
    Route::put('/edit/{id}' , [OrderController::class , 'edit'])->name('edit');
    Route::delete('/delete/{id}' , [OrderController::class , 'delete'])->name('delete');





    //PRODUCTS
    Route::get('/Newproduct' , [ProductController::class , 'Newproduct'])->name('Newproduct');
    Route::post('Newproduct' ,[ProductController::class , 'add_product'])->name('add_product');
    Route::get('/productsList' , [ProductController::class , 'productsList'])->name('productsList');





    Route::get('/newopportunity' , [OpportunityController::class , 'Newopportunity']);
    Route::post('Newopportunity' ,[OpportunityController::class , 'add_opportunity'])->name('add_opportunity');
    Route::get('/listopportunity' , [OpportunityController::class , 'listoppo']);
    Route::get('/edit/oppo/{id}' , [OpportunityController::class , 'show_edit_oppo'])->name('show_edit_oppo');
    Route::put('/edit/oppo/{id}' , [OpportunityController::class , 'edit_oppo'])->name('edit_oppo');
    Route::delete('/delete/oppo/{id}' , [OpportunityController::class , 'delete'])->name('delete_oppo');


});




