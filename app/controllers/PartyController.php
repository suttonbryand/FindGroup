<?php

class PartyController extends BaseController {

	public function createParty($id = -1){
		$user = Auth::getUser();
		if($id == -1){
			$games = Game::all();
			$searching = true;
		}
		else{
			$games = Game::find($id);
			$searching = false;
		}
		return View::make('createparty', compact('games','user','searching'));
	}

	public function insertParty(){
		$creator = $user = Auth::GetUser();
		$game = Game::find(Input::get('gameid'));
		
		$party = new Party();
		$party->party_name = Input::get('party_name');
		$party->max_players = Input::get('max_players');
		$party->description = Input::get('description');
		$party->user_created_id = $user->id;
		$party->game_id = Input::get('gameid');
		$party->save();

		$gamename = $game->gamename;

		return View::make('party', compact('party', 'user', 'gamename', 'creator'));

	}

	public function searchParties($limit = 10){
		$user = Auth::GetUser();
		$parties = Party::all();

		$party_and_games = array();
		foreach($parties as $party){
			$party_and_games[] = array(
				'party' => $party,
				'game_name' => Game::find($party->game_id)->gamename
			);
		}

		return View::make('searchparties', compact('party_and_games','user'));

	}

	public function partyPage($id){
		$user = Auth::GetUser();
		$party = Party::find($id);
		$gamename = Game::find($party->game_id)->gamename;
		$creator = User::find($party->user_created_id);

		return View::make('party', compact('party','user','gamename','creator'));
	}
}
?>