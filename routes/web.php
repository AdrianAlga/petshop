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

Route::get('/', function () {
    return view('welcome');
});

// welcome
Route::get('/welcome1', fn()=> view('login.welcome.welcome1'))->name('welcome1.index');
Route::get('/welcome2', fn()=> view('login.welcome.welcome2'))->name('welcome2.index');
Route::get('/welcome3', fn()=> view('login.welcome.welcome3'))->name('welcome3.index');

// login
Route::get('/user/login', fn()=> view('login.login'))->name('user.login.index');
Route::get('/user/register', fn()=> view('login.register'))->name('user.register.index');

// Home
Route::get('/user/home', fn()=> view('users.home.index'))->name('users.home.index');


