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
    Route::post('/AddOrder', [OrderController::class, 'AddOrder'])->name('AddOrder')->middleware('permission:Order.Add');
    Route::get('/ListOrder', [OrderController::class, 'ListOrder'])->name('ListOrder')->middleware('permission:Order.List');
    Route::put('/EditOrder/{id}', [OrderController::class, 'EditOrder'])->name('EditOrder')->middleware('permission:Order.Edit');
    Route::delete('/DeleteOrder/{id}', [OrderController::class, 'DeleteOrder'])->name('DeleteOrder')->middleware('permission:Order.Delete');


//product
    Route::post('/AddProduct', [ProductController::class, 'AddProduct'])->name('AddProduct')->middleware('permission:Product.Add');
    Route::get('/ListProduct', [ProductController::class, 'ListProduct'])->name('ListProduct')->middleware('permission:Product.List');
    Route::post('/EditProduct/{id}', [ProductController::class, 'EditProduct'])->name('EditProduct')->middleware('permission:Product.Edit');
    Route::delete('/DeleteProduct/{id}', [ProductController::class, 'DeleteProduct'])->name('DeleteProduct')->middleware('permission:Product.Delete');


//factor
    Route::post('/AddFactor', [FactorController::class, 'AddFactor'])->name('AddFactor')->middleware('permission:Factor.Add');
    Route::get('/ListFactor', [FactorController::class, 'ListFactor'])->name('ListFactor')->middleware('permission:Factor.List');
    Route::put('/EditFactor/{id}', [FactorController::class, 'EditFactor'])->name('EditFactor')->middleware('permission:Factor.Edit');
    Route::delete('/DeleteFactor/{id}', [FactorController::class, 'DeleteFactor'])->name('DeleteFactor')->middleware('permission:Factor.Delete');


//Opportunity
    Route::post('/AddOpportunities' ,[OpportunitiesController::class , 'AddOpportunities'])->name('AddOpportunities')->middleware('permission:Opportunities.Add');
    Route::get('/ListOpportunities' , [OpportunitiesController::class , 'ListOpportunities'])->name('ListOpportunities')->middleware('permission:Opportunities.List');
    Route::put('/EditOpportunities/{id}' , [OpportunitiesController::class , 'EditOpportunities'])->name('EditOpportunities')->middleware('permission:Opportunities.Edit');
    Route::delete('/DeleteOpportunities/{id}' , [OpportunitiesController::class , 'DeleteOpportunities'])->name('DeleteOpportunities')->middleware('permission:Opportunities.Delete');



//Role
    Route::post('/AddRole', [RoleController::class, 'AddRole'])->name('AddRole')->middleware('permission:Role.Add');
    Route::get('/ListRole', [RoleController::class, 'ListRole'])->name('ListRole')->middleware('permission:Role.List');
    Route::put('/EditRole/{id}', [RoleController::class, 'EditRole'])->name('EditRole')->middleware('permission:Role.Edit');
    Route::delete('/DeleteRole/{id}', [RoleController::class, 'DeleteRole'])->name('DeleteRole')->middleware('permission:Role.Delete');



    Route::post('/Logout', [UsersController::class, 'Logout'])->name('Logout');

});
Route::post('/SingUp', [UsersController::class, 'SingUp'])->name('SingUp');
Route::post('/Login', [UsersController::class, 'Login'])->name('Login');

Route::get('/test', function () {
    \App\Jobs\SingUpEmailJob::dispatch('ali@gmail.com',2);
    \App\Jobs\AddOrderJob::dispatch('ali@gmail.com',2);
    \App\Jobs\AddProductJob::dispatch('ali@gmail.com',2);
})->name('TestForJob');
