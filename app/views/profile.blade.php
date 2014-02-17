@extends('userlayout')

@section('usercontent')
	<div class="row" style="margin-top:50px;">
		<div class="col-md-5" style="padding-left:50px;">
			<h1>{{ $user->username }}</h1>
			<table>
				<tr>
					<td>
						Age
					</td>
					<td>
						26
					</td>
				</tr>
				<tr>
					<td>
						Location
					</td>
					<td>
						Houston,Tx
					</td>
				</tr>
				<tr>
					<td>
						Gender
					</td>
					<td>
						Male
					</td>
				</tr>
			</table>
			<div class="btn-group">
			  <button type="button" class="btn btn-primary">Add Friend</button>
			  <button type="button" class="btn btn-primary">Message</button>
			  <button type="button" class="btn btn-primary">Something</button>
			</div>
		</div>
		<div class="col-md-4">
			<img src="{{ asset("images/profiles") . '/' . $user->profile_image }}"/>
		</div>
	</div>
	<div style="min-height:30px"></div>
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title">About {{ $user->username }}</h1>
			</div>
			<div class="panel-body" style="min-height:120px;">
				{{ $user->about }}
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title">{{ $user->username }}'s Parties</h1>
			</div>
			<div class="panel-body" style="min-height:120px;">
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title">Parties {{ $user->username }} has joined</h1>
			</div>
			<div class="panel-body" style="min-height:120px;">
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h1 class="panel-title">{{ $user->username }}'s friends'</h1>
			</div>
			<div class="panel-body" style="min-height:120px;">
			</div>
		</div>
	</div>


@stop