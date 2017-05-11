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
Route::post('/team/store', 'TeamController@store');
Route::post('/team/update/{id}', 'TeamController@update');
Route::get('/team/edit/{id}', 'TeamController@edit');
Route::get('/team/delete/{id}', 'TeamController@destroy');

Route::get('/services', 'ServicesController@index');

Route::get('/prices', 	'PricesController@index');
Route::get('/prices/create', 	'PricesController@create');
Route::post('/prices/store', 	'PricesController@store');
Route::post('/prices/update/{id}', 	'PricesController@update');
Route::get('/prices/edit/{id}', 	'PricesController@edit');
Route::get('/prices/delete/{id}', 	'PricesController@delete');

Route::get('/contact', 	'ContactController@index');
Route::post('/contact/success', 'ContactController@index');


Route::get('/logout', function(){

	Auth::logout();
	return redirect('/');

});

Auth::routes();

Route::get('/account', 'AccountController@index');