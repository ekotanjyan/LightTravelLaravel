<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('login/css/login.css')}}">
	<script src="{{URL::asset('assets/js/jquery.js')}}"></script>
	<script src="{{URL::asset('bootstrap/js/bootstrap.js')}}"></script>
</head>
<body>
	<div class="container" style="margin-top: 15px;">
		<div class='row'>
			<div class="login">
				<form method="post" class="form_login" action="{{URL::to('/logincheck')}}">
				  <div class="form-group center-block">
				    <label for="name">Username:</label>
				    <input placeholder="Username" type="name" class="form-control input_width" id="name" name="name">
				  </div>
				  <div class="form-group center-block">
				    <label for="pwd">Password:</label>
				    <input placeholder="Password" type="password" class="form-control input_width" id="pwd" name="password">
				  </div>
				  <button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
			@if (isset($error_login))
				@foreach ($error_login as $value)
					<div class="alert alert-danger error_login" role="alert">
					  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					  <span class="sr-only">Error:</span>
					  {{$value[0]; exit();}}
					</div>
				@endforeach
			@endif

			@if (isset($error))
				<div class="alert alert-danger error_login" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  <span class="sr-only">Error:</span>
				  {{$error; exit();}}
				</div>
			@endif

		</div>
	</div>
</body>
</html>
