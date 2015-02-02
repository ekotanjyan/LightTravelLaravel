@extends('admin.master')
@section('user_content')
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 content">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content">Add user</div>
	<form method="post" action="{{URL::to('/Addnewuser')}}">
		<label for="adduser">Add user</label>
		<input id="adduser" class="form-control input" type="text" name="name">
		<label for="email">Add email</label>
		<input id="email" class="form-control input" type="text" name="email">
		<label for="password">Add password</label>
		<input class="form-control input" id="password" type="password" name="password">
		<button class="btn btn-default">Save</button>
	</form>
</div>
@stop
