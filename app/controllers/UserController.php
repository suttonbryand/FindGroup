<?php

class UserController extends BaseController {

	public function register(){

		$user = new User;
		$user->username = Input::get('username');
		$user->password = Hash::make(Input::get('password'));
		$user->email = Input::get('email');
		$user->save();
		$credentials = Input::only('email', 'password');
		if (Auth::attempt($credentials)) {
			return View::make('dashboard', compact('user'));
		}

		return View::make('login');

	}

	public function dashboard(){
		$user = Auth::getUser();
		return View::make('dashboard',compact('user'));
	}

	public function edit(){
		$edited = false;
		$user = Auth::getUser();
		if(Input::has('about')){
			$user->about = Input::get('about');
		}
		$edited = $user->save();
		if($edited) return Response::make('1',200);
		else return Response::make('0',200);
	}

	public function logout(){
		Auth::logout();
		return View::make('login');
	}

}

?>