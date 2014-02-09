@extends('userlayout')

@section('usercontent')

	@if($searching)
		<h1>Create Group</h1>
		<input type="search" class="form-control" placeholder="Search Games" style="width:40%">
		<br>

		@foreach ($games as $game)
			<span class="game-selection">
				<a href="{{ url('/creategroup/' . $game->id) }}"><img class="game-image" src=" {{ asset('images/games/' . str_replace(' ', '_', $game->gamename) . '.jpg') }}" /></a>
			</span>
		@endforeach

	@else
		<div>
			<img class="game-image" src="{{ asset('images/games/' . str_replace(' ', '_', $games->gamename) . '.jpg') }}" style="float:left"/>
			<div style="position:relative;left:50px;">
				<h1> Create Group</h1>
				<h1 style="position:relative;top:270px;"> {{ $games->gamename}} </h1>
			</div>
		</div>
		<div style="clear:left;"></div>
		<div class="create-group-input">
			<form>
				<input type="text" class="form-control" placeholder="Group Name" />
				<select class="form-control">
				  <option>Platform</option>
				  <option>PC</option>
				  <option>XBoxOne</option>
				  <option>PS4</option>
				  <option>XBox360</option>
				  <option>PS3</option>
				  <option>WiiU</option>
				  <option>Wii</option>
				</select>
				<select class="form-control">
					<option>2</option>
					<option>4</option>
					<option>8</option>
					<option>16</option>
					<option>32</option>
					<option>64</option>
				</select>
				<textarea class="form-control" rows="3">Group Description</textarea>
				<input type="submit" class="btn btn-primary" value="Create" />
			</form>
		</div>
	@endif

@stop