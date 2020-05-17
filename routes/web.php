<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Method GET
Route::get('/', function () {
    return view('welcome');
    // return "Hello Laravel";
});


Route::get('about', function () {
    return "About page";
});

// Route แบบมีการส่ง param
Route::get('user/{name}', function ($name) {
    return "Hello ".$name;
});


// Method POST
Route::post('product', function () {
    return "This is my product";
});