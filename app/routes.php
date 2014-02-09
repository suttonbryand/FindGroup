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

Route::group(array('before' => 'auth'), function(){
	Route::get('/', function()
	{
		return Redirect::to('/searchgroups');
	});

	Route::get('/dashboard','UserController@dashboard');

	Route::get('/searchgroups', function()
	{
		$user = Auth::getUser();
		return View::make('searchgroups',compact('user'));
	});

	Route::get('/logout', 'UserController@logout');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/register', function()
{
	return View::make('register');
});

Route::post('/login', function()
{
	$credentials = Input::only('email', 'password');
	if (Auth::attempt($credentials)) {
		return Redirect::intended('/');
	}
	return Redirect::to('login');
});


Route::post('/register', 'UserController@register');