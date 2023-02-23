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
    return view('home');
});

<<<<<<< HEAD
Route::get('/login', function () {
    return view('login');
=======
Route::get('/categories', function (){
    return view('categories');
>>>>>>> b4f815b3cebf7e22f30f35392f2c7a7a5a3aa7e7
});