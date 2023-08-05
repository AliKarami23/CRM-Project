<?php

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

Route::get('/', [\App\Http\Controllers\usersController::class, 'panel'] )->name('home');

Route::get('/header', [\App\Http\Controllers\usersController::class, 'header'] )->name('header');

Route::get('/footer', [\App\Http\Controllers\usersController::class, 'footer'] )->name('footer');

Route::get('/singin', [\App\Http\Controllers\usersController::class, 'singin'] )->name('singin');



Route::prefix('/panel')->group(function () {

    Route::get('', [\App\Http\Controllers\usersController::class, 'panel'] )->name('panel');

    Route::get('/adduser', [\App\Http\Controllers\usersController::class, 'adduser'] )->name('adduser');

    Route::get('/users', [\App\Http\Controllers\usersController::class, 'users'] )->name('users');

    Route::get('/productsList', [\App\Http\Controllers\usersController::class, 'listproducts'] )->name('listproducts');

    Route::get('/Newproduct', [\App\Http\Controllers\usersController::class, 'Newproduct'] )->name('Newproduct');


});



//add user in panel for db
Route::post('/layout/users', [\App\Http\Controllers\usersController::class, 'store'])->name('store');









Route::get('/addusers.blade.php', [\App\Http\Controllers\webshop::class, 'addusers'] );

Route::get('/connusers.blade.php', [\App\Http\Controllers\webshop::class, 'connusers'] );

Route::get('/users.blade.php', [\App\Http\Controllers\webshop::class, 'usersgo'] );


Route::get('/login.blade.php', [\App\Http\Controllers\webshop::class, 'logingo'] );


Route::get('/singin.blade.php', [\App\Http\Controllers\webshop::class, 'singingo'] );


Route::get('/panel.blade.php', [\App\Http\Controllers\webshop::class, 'panelgo'] );


Route::get('/productsList.blade.php', [\App\Http\Controllers\webshop::class, 'listproducts'] );
Route::get('/Newproduct.blade.php', [\App\Http\Controllers\webshop::class, 'Newproduct'] );




Route::get('/panel/Neworder', [\App\Http\Controllers\OrderController::class, 'Neworder'] );
Route::post('/panel/Neworder', [\App\Http\Controllers\OrderController::class, 'add_order'])->name('add_order');
Route::get('/panel/Listoforders' , [\App\Http\Controllers\OrderController::class , 'listorders'])->name('list_order');


