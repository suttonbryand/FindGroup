<?php

class UserController extends BaseController {

	public function register(){

		$user = new User;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->email = Input::get('email');
		$user->save();

		return Response::make('User created! Hurray!');

	}

}

?>