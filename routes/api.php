<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\TelegramBotController;


Route::group(['middleware' => ['auth:sanctum']], function () {


    Route::post('/AddStore', [StoreController::class, 'create'])->name('AddStore')->middleware('permission:Store.Add');
    Route::get('/ListStore', [StoreController::class, 'index'])->name('ListStore')->middleware('permission:Store.List');
    Route::put('/EditStore/{id}', [StoreController::class, 'edit'])->name('EditStore')->middleware('permission:Store.Edit');
    Route::delete('/DeleteStore/{id}', [StoreController::class, 'destroy'])->name('DeleteStore')->middleware('permission:Store.Delete');


});


Route::post('telegram/webhook', [TelegramBotController::class, 'start']);
Route::post('FactorEnd', [\Modules\Factor\Http\Controllers\FactorController::class, 'FactorEnd'])->name('FactorEnd');


