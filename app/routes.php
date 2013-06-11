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


// Route::get('/', function()
// {
// 	return View::make('hello');
// });



// Route::group(array('before' => 'auth'), function()
// {
	// Route::resource('/', 'ItemsController');

// });
	 Route::get('login', array('as' => 'login', 'uses' => 'AuthController@login'));
	Route::post('log/in', array('as'=>'log.in' ,'uses' => 'AuthController@get_Login'));
	Route::resource('register','AuthController');



Route::get('logout',function(){
	
	 Sentry::logout();
	 return Redirect::to('login');
});

Route::resource('categories', 'CategoriesController');

 Route::get('/', function(){

 	echo "Hello workd";
 });


// Route::resource('register', 'RegisterController');

Route::resource('items', 'ItemsController');
/*--------------Admin routes-------------------*/
Route::resource('admin','AdminConfigController@getIndex');
// Route::resource('admin/categories','AdminConfigController@Categories');
Route::resource('users', 'AdminConfigController@getusers');
Route::resource('users', 'UsersController');

