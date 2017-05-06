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
Route::get('/', 	 	'HomeController@index');
Route::get('/home', 	'HomeController@index');

Route::get('/team', 	'TeamController@index');
Route::get('/team/create', 'TeamController@create');
Route::get('/team/edit', 'TeamController@edit');
Route::post('/team/store', 'TeamController@store');
Route::post('/team/update', 'TeamController@update');

Route::get('/services', 'ServicesController@index');

Route::get('/prices', 	'PricesController@index');
Route::get('/contact', 	'ContactController@index');

Auth::routes();

Route::get('/account', 'AccountController@index');
