@extends('userlayout')

@section('usercontent')

	@if($searching)
		<h1>Create Party</h1>
		<input type="search" class="form-control" placeholder="Search Games" style="width:40%">
		<br>

		@foreach ($games as $game)
			<span class="game-selection">
				<a href="{{ url('/createparty/' . $game->id) }}"><img class="game-image" src=" {{ asset('images/games/' . str_replace(' ', '_', $game->gamename) . '.jpg') }}" /></a>
				<div>
					<h4>Game Name</h4>
					<p>1/4</h4>
				</div>
			</span>
		@endforeach

	@else
		<div>
			<img class="game-image" src="{{ asset('images/games/' . str_replace(' ', '_', $games->gamename) . '.jpg') }}" style="float:left"/>
			<div style="position:relative;left:50px;">
				<h1> Create Party</h1>
				<h1 style="position:relative;top:270px;"> {{ $games->gamename}} </h1>
			</div>
		</div>
		<div style="clear:left;"></div>
		<div class="create-party-input">
			<form id="createPartyForm" action=" {{ url('/createparty') }}" method="post">
				<input type="text" class="form-control" placeholder="Party Name" name="party_name"/>
				<select class="form-control" name="partyplatform">
				  <option>Platform</option>
				  <option>PC</option>
				  <option>XBoxOne</option>
				  <option>PS4</option>
				  <option>XBox360</option>
				  <option>PS3</option>
				  <option>WiiU</option>
				  <option>Wii</option>
				</select>
				<select class="form-control" name="max_players">
					<option>2</option>
					<option>4</option>
					<option>8</option>
					<option>16</option>
					<option>32</option>
					<option>64</option>
				</select>
				<textarea type="text" class="form-control" rows="3" name="description" placeholder="Party Description"></textarea>
				<input type="submit" class="btn btn-primary" value="Create" />
				<input type="hidden" name="gameid" value="{{ $games->id }}" />
			</form>
		</div>
	@endif

@stop