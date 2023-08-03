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



Route::get('/', [\App\Http\Controllers\webshop::class, 'home'] )->name('home');

Route::get('/panel', [\App\Http\Controllers\webshop::class, 'panel'] )->name('panel');

Route::get('/header', [\App\Http\Controllers\webshop::class, 'header'] )->name('header');

Route::get('/footer', [\App\Http\Controllers\webshop::class, 'footer'] )->name('footer');

Route::get('/singin', [\App\Http\Controllers\webshop::class, 'singin'] )->name('singin');

Route::get('/login', [\App\Http\Controllers\webshop::class, 'login'] )->name('login');

Route::get('/users', [\App\Http\Controllers\webshop::class, 'users'] )->name('users');

Route::get('/productsList', [\App\Http\Controllers\webshop::class, 'listproducts'] )->name('listproducts');

Route::get('/Listoforders', [\App\Http\Controllers\webshop::class, 'listorders'] )->name('listorders');

Route::get('/Neworder', [\App\Http\Controllers\webshop::class, 'Neworder'] )->name('Neworder');

Route::get('/Newproduct', [\App\Http\Controllers\webshop::class, 'Newproduct'] )->name('Newproduct');

//add user in panel for db
Route::post('/layout/users', [\App\Http\Controllers\webshop::class, 'store'])->name('store');




Route::get('/addusers.blade.php', [\App\Http\Controllers\webshop::class, 'addusers'] )->name('addusers.blade');

Route::get('/connusers.blade.php', [\App\Http\Controllers\webshop::class, 'connusers'] )->name('connusers.blade');

Route::get('/users.blade.php', [\App\Http\Controllers\webshop::class, 'usersgo'] )->name('users.blade');

Route::get('/login.blade.php', [\App\Http\Controllers\webshop::class, 'logingo'] )->name('login.blade');

Route::get('/singin.blade.php', [\App\Http\Controllers\webshop::class, 'singingo'] )->name('singin.blade');

Route::get('/panel.blade.php', [\App\Http\Controllers\webshop::class, 'panelgo'] )->name('panel.blade');

Route::get('/productsList.blade.php', [\App\Http\Controllers\webshop::class, 'listproducts'] )->name('productsList.blade');

Route::get('/Listoforders.blade.php', [\App\Http\Controllers\webshop::class, 'listorders'] )->name('Listoforders.blade');

Route::get('/Neworder.blade.php', [\App\Http\Controllers\webshop::class, 'Neworder'] )->name('Neworder.blade');

Route::get('/Newproduct.blade.php', [\App\Http\Controllers\webshop::class, 'Newproduct'] )->name('Newproduct.blade');





Route::get('/addusers.blade.php', [\App\Http\Controllers\webshop::class, 'addusers'] );

Route::get('/connusers.blade.php', [\App\Http\Controllers\webshop::class, 'connusers'] );

Route::get('/users.blade.php', [\App\Http\Controllers\webshop::class, 'usersgo'] );


Route::get('/login.blade.php', [\App\Http\Controllers\webshop::class, 'logingo'] );


Route::get('/singin.blade.php', [\App\Http\Controllers\webshop::class, 'singingo'] );


Route::get('/panel.blade.php', [\App\Http\Controllers\webshop::class, 'panelgo'] );


Route::get('/productsList.blade.php', [\App\Http\Controllers\webshop::class, 'listproducts'] );
Route::get('/Newproduct.blade.php', [\App\Http\Controllers\webshop::class, 'Newproduct'] );



Route::get('/Listoforders.blade.php', [\App\Http\Controllers\OrderController::class, 'listorders'] );
Route::get('/Neworder.blade.php', [\App\Http\Controllers\OrderController::class, 'Neworder'] );
Route::post('/layout/Neworder', [\App\Http\Controllers\OrderController::class, 'add_order'])->name('add_order');
Route::get('Listoforders' , [\App\Http\Controllers\OrderController::class , 'list_orders'])->name('list_order');


