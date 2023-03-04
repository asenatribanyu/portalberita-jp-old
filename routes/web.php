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

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about', [
        "About" => "About.jpg",
        "Vision" => "Vision.jpg",
        "Documentation" => "Documentation.jpg",
        "Photos" => "Photos.jpg",
        
    ]);
});

Route::get('/preview', function () {
    return view('preview');
});