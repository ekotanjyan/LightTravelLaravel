@extends('admin.master')
@section('slider_content')
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 content">
				{{ Form::open(array('url'=>'upload_img','method'=>'POST', 'files'=>true)) }}
			<input class="form-control" type="file" name="image">
			<label for="name">name</label>
			<input id="name" class="form-control" type="text" name="name">
			<label for="description">description</label>
			<input id="description" class="form-control" type="text" name="description">
			<button type="submit" class="btn btn-default">Save</button>
			{{ Form::close() }}
			<?php if (Session::has('save_img')): ?>
				{{Session::get('save_img')}}
			<?php endif ?>
			<?php if (isset($error)): ?>
				<?php foreach ($error as $value): ?>
					<div class="alert alert-danger messages" role="alert">
					  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					 {{$value[0];break}}
					</div>
				<?php endforeach ?>
			<?php endif ?>
	</div>
	
@stop
