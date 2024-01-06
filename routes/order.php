<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth:sanctum']], function () {

    Route::post('/AddOrder', [OrderController::class, 'create'])->name('AddOrder')->middleware('permission:Order.Add');
    Route::get('/ListOrder', [OrderController::class, 'index'])->name('ListOrder')->middleware('permission:Order.List');
    Route::put('/EditOrder/{id}', [OrderController::class, 'edit'])->name('EditOrder')->middleware('permission:Order.Edit');
    Route::delete('/DeleteOrder/{id}', [OrderController::class, 'destroy'])->name('DeleteOrder')->middleware('permission:Order.Delete');

});
