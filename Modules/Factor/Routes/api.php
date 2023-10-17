<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \Modules\Factor\Http\Controllers\FactorController;

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

    Route::post('/AddFactor', [FactorController::class, 'create'])->name('AddFactor')->middleware('permission:Factor.Add');
    Route::get('/ListFactor', [FactorController::class, 'index'])->name('ListFactor')->middleware('permission:Factor.List');
    Route::put('/EditFactor/{id}', [FactorController::class, 'edit'])->name('EditFactor')->middleware('permission:Factor.Edit');
    Route::delete('/DeleteFactor/{id}', [FactorController::class, 'destroy'])->name('DeleteFactor')->middleware('permission:Factor.Delete');

});
