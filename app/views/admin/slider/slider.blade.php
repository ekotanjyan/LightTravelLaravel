@extends('admin.master')
@section('slider_content')
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 content">
	<p>Slider</p>
	<div class="container">
		<?php if (isset($slider)): ?>
			<?php foreach ($slider as $value): ?>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 img_info">
					<a class="href_left" href="#">{{$value->img_url}}</a>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<button type="button" class="btn btn-default"><a href="{{'/delete_img/'.$value->id}}">Delete</a></button>
				</div>
			<?php endforeach ?>
		<?php endif ?>
	</div>
			<!-- {{ Form::open(array('url'=>'upload_img','method'=>'POST', 'files'=>true)) }}
			<input class="form-control" type="file" name="image">
			<label for="name">name</label>
			
			<input id="name" class="form-control" type="text" name="name">
			<label for="description">description</label>
			<input id="description" class="form-control" type="text" name="description">
			<button type="submit" class="btn btn-default">Save</button>
			{{ Form::close() }} -->
			<?php if (Session::has('save_img')): ?>
				<div class="alert alert-success messages" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				  	{{Session::get('save_img')}}
				</div>
			<?php endif ?>
	<div class="container">
		<div class="content col-xs-9 col-sm-9 col-md-9 col-lg-9 add_img">
			<button type="button" class="btn btn-default add_img" aria-label="Left Align"><a href="{{URL::to('/sliderAdd')}}">Add img</a></button>
		</div>
	</div>	
	</div>
@stop
