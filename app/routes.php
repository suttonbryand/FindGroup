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
		return Redirect::to('/dashboard');
	});

	Route::get('/dashboard','UserController@dashboard');

	Route::get('/searchgroups', function()
	{
		$user = Auth::getUser();
		return View::make('searchgroups',compact('user'));
	});

	Route::get('/creategroup', 'GroupController@createGroup');
	Route::get('/creategroup/{id}', 'GroupController@createGroup');

	Route::get('/logout', 'UserController@logout');

	Route::post('/edituser', 'UserController@edit');

	Route::post('/uploadprofilepic', 'UserController@uploadProfilePic');

	Route::get('/alterTables', array(
		"before" => "admin",
		function()
		{
			Schema::table('users',function($table)
			{
				$table->string('profile_image',50)->default('noimage.png');
			});
			return Response::make('Done',200);
		}
	));
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