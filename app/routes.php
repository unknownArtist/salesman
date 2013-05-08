<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function(){

	echo "Hello workd";
});


Route::resource('register', 'RegisterController');

Route::resource('items', 'AdminItemsController');
/*--------------Admin routes-------------------*/
Route::resource('admin','AdminConfigController@getIndex');
// Route::resource('admin/categories','AdminConfigController@Categories');
Route::resource('users', 'AdminConfigController@getusers');
Route::resource('users', 'UsersController');