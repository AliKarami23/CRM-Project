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



Route::get('/','test@home');

Route::get('/panel','test@panel');

Route::get('/header', 'test@header');

Route::get('/footer', 'test@footer');

Route::get('/singin', 'test@singin');

Route::get('/login', 'test@login');

Route::get('/users', 'test@users');

Route::get('/panel', 'test@panel');

Route::get('/addusers', 'test@addusers');

Route::get('/connusers','test@connusers');

Route::get('/addusers.blade.php', 'test@addusers');

Route::get('/connusers.blade.php', 'test@connusers');

Route::get('/users.blade.php', 'test@usersgo');

Route::get('/login.blade.php', 'test@logingo');

Route::get('/singin.blade.php', 'test@singingo');

Route::get('/panel.blade.php', 'test@panelgo');



