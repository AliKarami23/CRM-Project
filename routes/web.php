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



Route::get('/', [\App\Http\Controllers\webshop::class, 'home'] );

Route::get('/panel', [\App\Http\Controllers\webshop::class, 'panel'] );


Route::get('/header', [\App\Http\Controllers\webshop::class, 'header'] );


Route::get('/footer', [\App\Http\Controllers\webshop::class, 'footer'] );


Route::get('/singin', [\App\Http\Controllers\webshop::class, 'singin'] );


Route::get('/login', [\App\Http\Controllers\webshop::class, 'login'] );


Route::get('/users', [\App\Http\Controllers\webshop::class, 'users'] );


Route::get('/panel', [\App\Http\Controllers\webshop::class, 'panel'] );

Route::get('/addusers', [\App\Http\Controllers\webshop::class, 'addusers'] );

Route::get('/connusers', [\App\Http\Controllers\webshop::class, 'connusers'] );

Route::get('/productsList', [\App\Http\Controllers\webshop::class, 'listproducts'] );

Route::get('/Listoforders', [\App\Http\Controllers\webshop::class, 'listorders'] );

Route::get('/Neworder', [\App\Http\Controllers\webshop::class, 'Neworder'] );

Route::get('/Newproduct', [\App\Http\Controllers\webshop::class, 'Newproduct'] );








Route::get('/addusers.blade.php', [\App\Http\Controllers\webshop::class, 'addusers'] );

Route::get('/connusers.blade.php', [\App\Http\Controllers\webshop::class, 'connusers'] );

Route::get('/users.blade.php', [\App\Http\Controllers\webshop::class, 'usersgo'] );


Route::get('/login.blade.php', [\App\Http\Controllers\webshop::class, 'logingo'] );


Route::get('/singin.blade.php', [\App\Http\Controllers\webshop::class, 'singingo'] );


Route::get('/panel.blade.php', [\App\Http\Controllers\webshop::class, 'panelgo'] );


Route::get('/productsList.blade.php', [\App\Http\Controllers\webshop::class, 'listproducts'] );

Route::get('/Listoforders.blade.php', [\App\Http\Controllers\webshop::class, 'listorders'] );

Route::get('/Neworder.blade.php', [\App\Http\Controllers\webshop::class, 'Neworder'] );

Route::get('/Newproduct.blade.php', [\App\Http\Controllers\webshop::class, 'Newproduct'] );

