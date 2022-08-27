<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/pelanggan', 'PelangganController');
Route::resource('/user', 'UserController');
Route::get('/pelanggan','UserController@getpelanggan');


Route::view('tampilan', 'layouts.template');
