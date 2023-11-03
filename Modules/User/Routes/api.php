<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \Modules\User\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['auth:sanctum'], 'prefix' => 'user'], function () {

    Route::get('/ListUser', [UserController::class, 'ListUser'])->name('ListUser')->middleware('permission:User.List');


    Route::get('/ListCustomer', [UserController::class, 'ListCustomer'])->name('ListCustomer')->middleware('permission:Customer.List');
    Route::put('/EditCustomer/{id}', [UserController::class, 'EditCustomer'])->name('EditCustomer')->middleware('permission:Customer.Edit');
    Route::delete('/DeleteCustomer/{id}', [UserController::class, 'DeleteCustomer'])->name('DeleteCustomer')->middleware('permission:Customer.Delete');



    Route::get('/ListSeller', [UserController::class, 'ListSeller'])->name('ListSeller')->middleware('permission:Seller.List');
    Route::put('/EditSeller/{id}', [UserController::class, 'EditSeller'])->name('EditSeller')->middleware('permission:Seller.Edit');
    Route::delete('/DeleteSeller/{id}', [UserController::class, 'DeleteSeller'])->name('DeleteSeller')->middleware('permission:Seller.Delete');

    Route::post('/Logout', [UserController::class, 'Logout'])->name('Logout');
});
Route::post('/SingUp', [UserController::class, 'SingUp'])->name('SingUp');
Route::post('/Login', [UserController::class, 'Login'])->name('Login');

Route::get('/test', function () {
    \App\Jobs\SingUpEmailJob::dispatch('ali@gmail.com',2);
    \App\Jobs\AddOrderJob::dispatch('ali@gmail.com',2);
    \App\Jobs\AddProductJob::dispatch('ali@gmail.com',2);
})->name('TestForJob');
