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

Route::get('/', 'ListController@show');

Route::get('/login', function () {
	return 'Please login first';
})->name('login');

Auth::routes(); // must after login route definition

Route::get('/foo', function () {
	return 'Hello World';
})->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');