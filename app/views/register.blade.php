@extends('layoutall')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>

			<div class="col-md-8">
				<h1>Registering</h1>

				<form role="form" action="{{ url('/register') }}" method="post">
				  <div class="form-group">
				    <label for="username">Username</label>
				    <input type="text" class="form-control" id="username" name="username" placeholder="Enter UserName">
				  </div>					
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
				  </div>
				  <div class="form-group">
				    <label for="verifyPassword">Verify Password</label>
				    <input type="password" class="form-control" id="verifyPassword" placeholder="Password">
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>

			<div class="col-md-2"></div>

		</div>
	</div>


@stop