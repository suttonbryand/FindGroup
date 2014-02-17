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

	Route::get('/searchparties', 'PartyController@searchParties');

	Route::get('/createparty', 'PartyController@createParty');
	Route::get('/createparty/{id}', 'PartyController@createParty');

	Route::get('/logout', 'UserController@logout');

	Route::get('/party/{id}', 'PartyController@partyPage');

	Route::post('/edituser', 'UserController@edit');

	Route::post('/uploadprofilepic', 'UserController@uploadProfilePic');

	Route::post('/createparty', 'PartyController@insertParty');

	Route::get('/alterTables', array(
		"before" => "admin",
		function()
		{
			Schema::table('parties',function($table)
			{
				$table->string('description',50);
			});
			return Response::make('Done',200);
		}
	));
});

Route::get('/profile/{pid}', 'UserController@profile');

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