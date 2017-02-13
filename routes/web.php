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

Route::group(['middleware' => ['web']], function(){

	Route::get('users','UsersController@index');
	Route::get('users/{user}', 'UsersController@show');
	Route::post('users/{user}/posts', 'PostsController@store');

	Route::get('about', 'HomeController@about');

	Route::get('posts', 'PostsController@index');
	Route::get('posts/{post}', 'PostsController@show');
	Route::get('posts/{post}/edit', 'PostsController@edit');
	Route::patch('posts/{post}', 'PostsController@update');

	Route::get('admin', 'PostsController@create');


	Auth::routes();

	Route::get('/', function(){
     return view('welcome');
	});

	Route::get('/home', 'HomeController@index');

	Route::get('begin', function(){
		flash('You are now logged in','success');
		return redirect('/');
	});

});
