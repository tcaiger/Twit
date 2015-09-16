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
/*
|--------------------------------------------------------------------------
| Page Control
|--------------------------------------------------------------------------
*/
Route::get('/'				, 'PageCtrl@index');

/*
|--------------------------------------------------------------------------
| User Control
|--------------------------------------------------------------------------
*/
Route::get('/user/{id}'		, 'UserCtrl@show');
Route::get('/register'		, 'UserCtrl@create');
Route::post('/user'			, 'UserCtrl@store');
Route::get('/login'			, 'UserCtrl@login');
Route::post('/auth'			, 'UserCtrl@authenticate');
Route::get('/logout'		, 'UserCtrl@logout');

/*
|--------------------------------------------------------------------------
| Tweet Control
|--------------------------------------------------------------------------
*/
Route::get('/tweet/{id}'		, 'TweetCtrl@show');
Route::post('/tweet'			, 'TweetCtrl@store');
Route::get('/tweet/edit/{id}'	, 'TweetCtrl@edit');
Route::put('/tweet/{id}'		, 'TweetCtrl@update');
Route::delete('/tweet/{id}'		, 'TweetCtrl@destroy');

/*
|--------------------------------------------------------------------------
| Kick Outs
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth'], function(){

	Route::post('/tweet'				, 'TweetCtrl@store');
	Route::get('tweet/edit/{id}'		, 'TweetCtrl@edit');
	Route::put('/tweet/{id}'			, 'TweetCtrl@update');
	Route::delete('/tweet/{id}'			, 'TweetCtrl@destroy');

	Route::get('/follow/{id}'			, 'UserCtrl@follow');
	Route::get('/unfollow/{id}'			, 'UserCtrl@unfollow');
	Route::get('/user/{id}/following'	, 'UserCtrl@following');
	Route::get('/user/{id}/followers'	, 'UserCtrl@followers');
});
