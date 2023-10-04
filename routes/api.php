<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FactorController;
use App\Http\Controllers\OpportunitiesController;
use App\Http\Controllers\RoleController;



Route::group(['middleware' => ['auth:sanctum']], function () {

//order
    Route::post('/AddOrder', [OrderController::class, 'AddOrder'])->name('AddOrder')->middleware('permission:AddOrder');
    Route::get('/ListOrder', [OrderController::class, 'ListOrder'])->name('ListOrder')->middleware('permission:ListOrder');
    Route::put('/EditOrder/{id}', [OrderController::class, 'EditOrder'])->name('EditOrder')->middleware('permission:EditOrder');
    Route::delete('/DeleteOrder/{id}', [OrderController::class, 'DeleteOrder'])->name('DeleteOrder')->middleware('permission:DeleteOrder');


//product
    Route::post('/AddProduct', [ProductController::class, 'AddProduct'])->name('AddProduct')->middleware('permission:AddProduct');
    Route::get('/ListProduct', [ProductController::class, 'ListProduct'])->name('ListProduct')->middleware('permission:ListProduct');
    Route::post('/EditProduct/{id}', [ProductController::class, 'EditProduct'])->name('EditProduct')->middleware('permission:EditProduct');
    Route::delete('/DeleteProduct/{id}', [ProductController::class, 'DeleteProduct'])->name('DeleteProduct')->middleware('permission:DeleteProduct');


//factor
    Route::post('/AddFactor', [FactorController::class, 'AddFactor'])->name('AddFactor')->middleware('permission:AddFactor');
    Route::get('/ListFactor', [FactorController::class, 'ListFactor'])->name('ListFactor')->middleware('permission:ListFactor');
    Route::put('/EditFactor/{id}', [FactorController::class, 'EditFactor'])->name('EditFactor')->middleware('permission:EditFactor');
    Route::delete('/DeleteFactor/{id}', [FactorController::class, 'DeleteFactor'])->name('DeleteFactor')->middleware('permission:DeleteFactor');


//Opportunities
    Route::post('/AddOpportunities' ,[OpportunitiesController::class , 'AddOpportunities'])->name('AddOpportunities')->middleware('permission:AddOpportunities');
    Route::get('/ListOpportunities' , [OpportunitiesController::class , 'ListOpportunities'])->name('ListOpportunities')->middleware('permission:ListOpportunities');
    Route::put('/EditOpportunities/{id}' , [OpportunitiesController::class , 'EditOpportunities'])->name('EditOpportunities')->middleware('permission:EditOpportunities');
    Route::delete('/DeleteOpportunities/{id}' , [OpportunitiesController::class , 'DeleteOpportunities'])->name('DeleteOpportunities')->middleware('permission:DeleteOpportunities');



//Role
    Route::post('/AddRole', [RoleController::class, 'AddRole'])->name('AddRole')->middleware('permission:AddRole');
    Route::get('/ListRole', [RoleController::class, 'ListRole'])->name('ListRole')->middleware('permission:ListRole');
    Route::put('/EditRole/{id}', [RoleController::class, 'EditRole'])->name('EditRole')->middleware('permission:EditRole');
    Route::delete('/DeleteRole/{id}', [RoleController::class, 'DeleteRole'])->name('DeleteRole')->middleware('permission:DeleteRole');



    Route::post('/Logout', [UsersController::class, 'Logout'])->name('Logout')->middleware('permission:Logout');

});
Route::post('/SingUp', [UsersController::class, 'SingUp'])->name('SingUp');
Route::post('/Login', [UsersController::class, 'Login'])->name('Login');
