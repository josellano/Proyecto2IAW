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

Route::get('/admin', 'AdminController@ppal');
Route::get('/editPage', 'AdminController@edit')->name('editPage');

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');

Route::get('/loadModel','CuchaController@recover');
Route::post('/saveModel','CuchaController@store');

Route::post('editPage/update/{id}','AdminController@update')->name('editPage/update/{id}');

Route::post('editPage/createTam','AdminController@store')->name('editPage/createTam');

//Eliminacion de elementos
Route::get('editPage/tamano/destroy/{id}', 'AdminController@deleteTam')->name('editPage/tamano/destroy/{id}');
Route::get('editPage/material/destroy/{id}', 'AdminController@deleteMat')->name('editPage/material/destroy/{id}');
Route::get('editPage/ventana/destroy/{id}', 'AdminController@deleteVen')->name('editPage/ventana/destroy/{id}');
Route::get('editPage/estilo/destroy/{id}', 'AdminController@deleteEst')->name('editPage/estilo/destroy/{id}');
Route::get('editPage/forma/destroy/{id}', 'AdminController@deleteFor')->name('editPage/forma/destroy/{id}');
