<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/test', function () {

	//return view('test');
   
	//return view('test', ['user_name' => 'かぼちゃ']);
    
	$num =[
		"one","two","three","four",
	];

    return view('test', ['num' => $num, 'user_name' => 'かぼちゃ']);




});

# - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -



Route::get('/', function () {

    return view('welcome');
});




// Auth URLs
Route::get('/'.env('DIR_ROOT_AUTH').'/signin', 'Auth\AuthController@getLogin');
Route::post('/'.env('DIR_ROOT_AUTH').'/signin', 'Auth\AuthController@postLogin');
Route::get('/'.env('DIR_ROOT_AUTH').'/register', 'Auth\AuthController@getRegister');
Route::post('/'.env('DIR_ROOT_AUTH').'/register', 'Auth\AuthController@postRegister');

// Admin User 
Route::group(['middleware' => 'auth'], function(){
	
	// dashboard
	Route::get('/'.env('DIR_ROOT_AUTH'), 'Admin\HomeController@index');
	
	// user 
	Route::resource('/'.env('DIR_ROOT_AUTH').'/user', 'Admin\UserController');	

	// category
	Route::resource('/'.env('DIR_ROOT_AUTH').'/category', 'Admin\CategoryController');
	
	// tag 
	Route::resource('/'.env('DIR_ROOT_AUTH').'/tag', 'Admin\TagController');
	
	// article
	Route::resource('/'.env('DIR_ROOT_AUTH').'/article', 'Admin\ArticleController');
	
	// auth logout
	Route::get('/'.env('DIR_ROOT_AUTH').'/signout', 'Auth\AuthController@getLogout');
});




