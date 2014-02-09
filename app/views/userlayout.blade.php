@extends('layoutall')

@section('content')

	<div class="container" style="margin-top:30px;">
		<div class="row">
			<div class="col-md-2">
				<div>
					<div><img src="{{ asset('images/profiles/noimage.png') }}" class="menu-profile-image"/></div>
					<div><button class="btn btn-primary menu-button">Dashboard</button></div>
					<div><button class="btn btn-primary menu-button">Look For Groups</button></div>
					<div><button class="btn btn-primary menu-button">Logout</button></div>
				</div>

			</div>
			<div class="col-md-10">
				@yield('usercontent')
			</div>
		</div>
	</div>

@stop