<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OpportunityController;



Route::group(['middleware'=>['auth:sanctum']],function () {

//customer
    Route::post('/AddCustomer', [CustomerController::class, 'AddCustomer'] )->name('AddCustomer');
    Route::get('/ListCustomers', [CustomerController::class, 'ListCustomers'] )->name('ListCustomers');
    Route::put('/EditCustomer/{id}', [CustomerController::class, 'EditedCustomer'] )->name('EditedCustomer');
    Route::get('/DeletedCustomer/{id}', [CustomerController::class, 'DeletedCustomer'])->name('DeletedCustomer');



//order
    Route::post('/AddOrder', [OrderController::class, 'AddOrder'])->name('AddOrder');
    Route::get('/ListOrders' , [OrderController::class , 'ListOrders'])->name('ListOrders');
    Route::put('/EditOrder/{id}' , [OrderController::class , 'EditOrder'])->name('EditOrder');
    Route::delete('/DeleteOrder/{id}' , [OrderController::class , 'DeleteOrder'])->name('DeleteOrder');



//product
    Route::post('/AddProduct' ,[ProductController::class , 'AddProduct'])->name('AddProduct');
    Route::get('/ProductsList' , [ProductController::class , 'ProductsList'])->name('ProductsList');
    Route::post('/EditProduct/{id}' , [ProductController::class , 'EditProduct'])->name('EditProduct');
    Route::get('/DeleteProduct/{id}' , [ProductController::class , 'DeleteProduct'])->name('DeleteProduct');



//opportunity
    Route::post('/AddOpportunity' ,[OpportunityController::class , 'AddOpportunity'])->name('AddOpportunity');
    Route::get('/ListOpportunity' , [OpportunityController::class , 'ListOpportunity'])->name('ListOpportunity');
    Route::put('/EditOpportunity/{id}' , [OpportunityController::class , 'EditOpportunity'])->name('EditOpportunity');
    Route::delete('/DeleteOpportunity/{id}' , [OpportunityController::class , 'DeleteOpportunity'])->name('DeleteOpportunity');



    Route::post('/Logout', [UsersController::class, 'Logout'] )->name('Logout');
});
Route::post('/SingUp', [UsersController::class, 'SingUp'] )->name('SingUp');
Route::post('/Login', [UsersController::class, 'Login'] )->name('Login');
