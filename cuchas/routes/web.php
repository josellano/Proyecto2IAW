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


Auth::routes();

Route::get('/', 'GuestController@ppal');

Route::get('/index', 'HomeController@ppal')->name('index');

Route::get('/guest', 'GuestController@ppal');
Route::get('/admin', 'AdminController@ppal');

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');

Route::get('/GetFromDB','CuchaController@recover');
Route::post('/PostToDB','CuchaController@store');
