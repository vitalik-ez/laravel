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

Route::get('/', 'PageController@hello');

Route::get('/about', 'PageController@about');

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact/submit', 'PageController@submit');

Route::get('/auto/{id}', 'PageController@auto');
