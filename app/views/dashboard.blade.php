@extends('userlayout')

@section('usercontent')

	<h1>My Groups</h1>
	<a href=" {{ url('/creategroup') }} "><button class="btn btn-primary">Create Group</button></a>
	<h1>Groups I've Joined</h1>
	<h1>My Account<h1>
	{{ $user->username }}
@stop