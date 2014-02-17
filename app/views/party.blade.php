@extends('userlayout')

@section('usercontent')
	<div class="row" style="margin-top:50px;">
		<div class="col-md-5" style="padding-left:50px;">
			<h1>{{ $party->party_name }}</h1>
			<div>
				<h3>Creator:</h3>
				<a href="{{ url('/profile/' . $creator->id)}}"><h4>{{$creator->username}}</h4></a>
			</div>
			<a href="{{ url('/join/party/' . $party->party_id) }}"><btn class="btn btn-primary">Join</button></a>
		</div>
		<div class="col-md-4">
			<img class="game-image" src="{{ asset('images/games/' . str_replace(' ', '_', $gamename) . '.jpg') }}"/>
		</div>
	</div>
	<div style="min-height:30px"></div>
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title">Description</h1>
			</div>
			<div class="panel-body" style="min-height:120px;">
				{{ $party->description }}
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title">Members</h1>
			</div>
			<div class="panel-body" style="min-height:120px;">

			</div>
		</div>
	</div>
@stop