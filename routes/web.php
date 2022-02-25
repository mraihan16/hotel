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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');

});

Route::get('/form', function () {
    return view('dashboard.form');

});

Route::get('/kamar', function () {
    return view('dashboard.kamar');

});

Route::get('/fasilitas', function () {
    return view('dashboard.fasilitas');

});


Route::get('/admin', function () {
    return view('admin.index');

});