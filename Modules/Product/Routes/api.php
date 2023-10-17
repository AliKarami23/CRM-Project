<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \Modules\Product\Http\Controllers\ProductController;
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
    Route::post('/AddProduct', [ProductController::class, 'create'])->name('AddProduct')->middleware('permission:Product.Add');
    Route::get('/ListProduct', [ProductController::class, 'index'])->name('ListProduct')->middleware('permission:Product.List');
    Route::post('/EditProduct/{id}', [ProductController::class, 'edit'])->name('EditProduct')->middleware('permission:Product.Edit');
    Route::delete('/DeleteProduct/{id}', [ProductController::class, 'destroy'])->name('DeleteProduct')->middleware('permission:Product.Delete');
});
