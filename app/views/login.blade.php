@extends('layoutall')

@section('content')

		<div class="container" style="margin-top:15%">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<form class="form-horizontal" role="form" action={{ url('login')}} method="post">
						<fieldset class="login-fieldset">
							<legend class="login-legend">Login</legend>
							<div class="form-group">
								<label for="inputEmail3" class="col-sm-3 control-label">Email</label>
								<div class="col-sm-9">
									<input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email">
								</div>
							</div>
							<div class="form-group">
								<label for="inputPassword3" class="col-sm-3 control-label">Password</label>
								<div class="col-sm-9">
									<input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								<div class="checkbox">
									<label>
							  			<input type="checkbox"> Remember me
									</label>
								</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-default">Sign in</button>
									<a href={{ url('/register') }}><button type="button" class="btn btn-default">Register</button></a>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>

@stop