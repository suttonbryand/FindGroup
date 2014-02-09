<?php

class GroupController extends BaseController {

	public function createGroup($id = -1){
		$user = Auth::getUser();
		if($id == -1){
			$games = Game::all();
			$searching = true;
		}
		else{
			$games = Game::find($id);
			$searching = false;
		}
		return View::make('creategroup', compact('games','user','searching'));
	}
}
?>