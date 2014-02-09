<?php

class GroupController extends BaseController {

	public function createGroup(){
		$games = Game::all();
		$user = Auth::getUser();
		return View::make('creategroup', compact('games','user'));
	}
}
?>