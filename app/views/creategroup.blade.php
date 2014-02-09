@extends('userlayout')

@section('usercontent')

	<h1>Create Group</h1>

	<input type="search" class="form-control" placeholder="Search Games" style="width:40%">
	<br>

	@foreach ($games as $game)
		<span class="game-selection">
			<a href="{{ url('/creategroup/' . $game->id) }}"><img class="game-image" src=" {{ asset('images/games/' . str_replace(' ', '_', $game->gamename) . '.jpg') }}" /></a>
		</span>
	@endforeach

@stop