<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FactorController;
use App\Http\Controllers\OpportunityController;



Route::group(['middleware' => ['auth:sanctum']], function () {

//customer
    Route::post('/AddCustomer', [CustomerController::class, 'AddCustomer'])->name('AddCustomer')->middleware('role:Admin');
    Route::get('/ListCustomers', [CustomerController::class, 'ListCustomers'])->name('ListCustomers')->middleware('role:SuperAdmin|Admin');
    Route::put('/EditCustomer/{id}', [CustomerController::class, 'EditCustomer'])->name('EditCustomer')->middleware('role:SuperAdmin|Admin');
    Route::delete('/DeletedCustomer/{id}', [CustomerController::class, 'DeletedCustomer'])->name('DeletedCustomer')->middleware('role:SuperAdmin|Admin');


//order
    Route::post('/AddOrder', [OrderController::class, 'AddOrder'])->name('AddOrder')->middleware('role:SuperAdmin|Admin|Customer');
    Route::get('/ListOrders', [OrderController::class, 'ListOrders'])->name('ListOrders')->middleware('role:SuperAdmin|Admin');
    Route::put('/EditOrder/{id}', [OrderController::class, 'EditOrder'])->name('EditOrder')->middleware('role:SuperAdmin|Admin|Customer');
    Route::delete('/DeleteOrder/{id}', [OrderController::class, 'DeleteOrder'])->name('DeleteOrder')->middleware('role:SuperAdmin|Admin|Customer');


//product
    Route::post('/AddProduct', [ProductController::class, 'AddProduct'])->name('AddProduct')->middleware('role:SuperAdmin|Admin');
    Route::get('/ProductsList', [ProductController::class, 'ProductsList'])->name('ProductsList')->middleware('role:SuperAdmin|Admin');
    Route::post('/EditProduct/{id}', [ProductController::class, 'EditProduct'])->name('EditProduct')->middleware('role:SuperAdmin|Admin');
    Route::delete('/DeleteProduct/{id}', [ProductController::class, 'DeleteProduct'])->name('DeleteProduct')->middleware('role:SuperAdmin|Admin');


// factor
    Route::post('/AddFactor', [FactorController::class, 'AddFactor'])->name('AddFactor')->middleware('role:SuperAdmin|Admin');
    Route::get('/ListFactor', [FactorController::class, 'ListFactor'])->name('ListFactor')->middleware('role:SuperAdmin|Admin');
    Route::put('/EditFactor/{id}', [FactorController::class, 'EditFactor'])->name('EditFactor')->middleware('role:SuperAdmin|Admin');
    Route::delete('/DeleteFactor/{id}', [FactorController::class, 'DeleteFactor'])->name('DeleteFactor')->middleware('role:SuperAdmin|Admin');


//opportunity
    Route::post('/AddOpportunities' ,[OpportunityController::class , 'AddOpportunities'])->name('AddOpportunities');
    Route::get('/ListOpportunities' , [OpportunityController::class , 'ListOpportunities'])->name('ListOpportunities');
    Route::put('/EditOpportunities/{id}' , [OpportunityController::class , 'EditOpportunities'])->name('EditOpportunities');
    Route::delete('/DeleteOpportunities/{id}' , [OpportunityController::class , 'DeleteOpportunities'])->name('DeleteOpportunities');


    Route::post('/Logout', [UsersController::class, 'Logout'])->name('Logout')->middleware('role:SuperAdmin|Admin');

});
Route::post('/SingUp', [UsersController::class, 'SingUp'])->name('SingUp');
Route::post('/Login', [UsersController::class, 'Login'])->name('Login');
