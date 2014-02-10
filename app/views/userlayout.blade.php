@extends('layoutall')

@section('content')

	<div class="container" style="margin-top:30px;">
		<div class="row">
			<div class="col-md-2">
				<div>
					<h1> {{ $user->username }} </h1>
					<div><img src="{{ asset('images/profiles/noimage.jpg') }}" class="menu-profile-image"/></div>
					<div><a href="{{ url('/dashboard') }}"><button class="btn btn-primary menu-button">Dashboard</button></a></div>
					<div><a href="{{ url('/creategroup') }}"><button class="btn btn-primary menu-button">Create Group</button></a></div>
					<div><a href="{{ url('/searchgroups') }}"><button class="btn btn-primary menu-button">Look For Groups</button></a></div>
					<div><a href="{{ url('/logout') }}"><button class="btn btn-primary menu-button">Logout</button></a></div>
				</div>

			</div>
			<div class="col-md-10">
				@yield('usercontent')
			</div>
		</div>
	</div>

@stop