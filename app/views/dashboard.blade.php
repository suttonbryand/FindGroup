@extends('userlayout')

@section('usercontent')

	<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title">My Groups</h1>
		</div>
		<div class="panel-body">
		</div>
		<div class="panel-footer">
			<a href=" {{ url('/creategroup') }} "><button class="btn btn-primary">Create Group</button></a>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title">Groups I've Joined</h1>
		</div>
		<div class="panel-body">
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<h1 class="panel-title">My Account</h1>
		</div>
		<div class="panel-body">
			<table class="table">
				<tr>
					<td>Username: {{ $user->username }}</td>
				</tr>
				<tr>
					<td>Email: {{$user->email }}</td>
				</tr>
			</table>

			<div>
				<div>
					<h3 style="display:inline">About Me</h3>
					<a style="float:right" href="#" onclick="editAccount()">Edit</a>
				</div>
				<textarea class="text-about" disabled="disabled" id="aboutMe"> {{ $user->about }} </textarea>
				<button class="btn btn-primary" disabled="disabled" id="saveAccountInfo" onclick="saveAccountInfo()">Save</button>
			</div>
		</div>
	</div>
@stop