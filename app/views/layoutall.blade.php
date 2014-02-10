<html>

	<head>
		<title>Find Group</title>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
		<!-- Optional theme -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="{{ asset('css/findgroup.css') }}?v=020920140837" />
		<link href='http://fonts.googleapis.com/css?family=Alef:400,700' rel='stylesheet' type='text/css'>
		<!-- Latest compiled and minified JavaScript -->
		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="{{ asset('js/findgroup.js') }}?v=020920140837"></script>


	</head>

	<body>

	@yield('content')

	<div id="accountSaveNotify" style="display:none;">
		<button class="btn btn-primary notification">Account Info Saved</button>
	</div>

	<div class="modal fade" id="uploadPhotoModal" tabindex="-1" role="dialog" aria-labelledby="uploadPhotoModal" aria-hidden="true">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title" id="myModalLabel">Upload Profile Photo</h4>
	      </div>
	      <div class="modal-body">
	        <form id="uploadProfilePicForm" action="/uploadprofilepic" method="post" enctype="multipart/form-data">
	        	<input class="form-control" type="file" name="img" id="img">
	        </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary" onclick="$('#uploadProfilePicForm').submit()">Upload</button>
	      </div>
	    </div>
	  </div>
	</div>

	</body>


</html>