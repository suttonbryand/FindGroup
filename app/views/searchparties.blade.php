@extends('userlayout')


@section('usercontent')
		<h1>Search Parties</h1>
		<input type="search" class="form-control" placeholder="Search Parties" style="width:40%">
		<br>

		@foreach ($party_and_games as $pag)
			<?php $game_name = $pag['game_name']; $party = $pag['party']; ?>
			<span class="game-selection">
				<a href="{{ url('/party/' . $party->id) }}"><img class="game-image" src=" {{ asset('images/games/' . str_replace(' ', '_', $game_name) . '.jpg') }}" /></a>
				<div>
					<h4>{{$party->party_name}}</h4>
					<p>1/{{$party->max_players}}</h4>
				</div>
			</span>
		@endforeach
@stop
