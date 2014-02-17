@extends('layoutall')

@section('content')

	<div class="container" style="margin-top:30px;">
			<div class="row">
		@if (Auth::check())
				<div class="col-md-2">
					<div>
						<h1> {{ $user->username }} </h1>
						<div><img src="{{ asset('images/profiles/'. $user->profile_image) }}" onclick="$('#uploadPhotoModal').modal()" class="menu-profile-image"/></div>
						<div><a href="{{ url('/profile/') . '/' . $user->id }}"><button class="btn btn-primary menu-button">Profile</button></a></div>
						<div><a href="{{ url('/dashboard') }}"><button class="btn btn-primary menu-button">Dashboard</button></a></div>
						<div><a href="{{ url('/createparty') }}"><button class="btn btn-primary menu-button">Create Party</button></a></div>
						<div><a href="{{ url('/searchparties') }}"><button class="btn btn-primary menu-button">Look For Parties</button></a></div>
						<div><a href="{{ url('/logout') }}"><button class="btn btn-primary menu-button">Logout</button></a></div>
					</div>

				</div>
				<div class="col-md-10">
		@else
				<div class="col-md-12">
		@endif
				@yield('usercontent')
				</div>
			</div>
		</div>

@stop