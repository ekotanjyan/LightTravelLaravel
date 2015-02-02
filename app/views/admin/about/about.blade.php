@extends('admin.master')
@section('about_content')
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 leftbar content">About</div>
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 leftbar content">
		<form method="post" action="{{URL::to('/EditAboutText/'.$about_text->id)}}" enctype="multipart/form-data">
			<label for="edit_title">Edit title</label>
			<input id="edit_title" class="form-control input" type="text" name="title" value="{{$about_text->title}}">
			<label for="edit_text">Edit text</label>
			<textarea id="edit_text" class="form-control text_area" name="text">{{$about_text->text}}</textarea>
			<label for="edit_full_text">Edit full text</label>
			<textarea id="edit_full_text" class="form-control text_area" name="full_text">{{$about_text->full_text}}</textarea>
			<label for="edit_img">Edit img</label>
			<input id="edit_img" class="form-control input" type="file" name="image">
			<button type="submit" class="btn btn-default">Save</button>
		</form>
		<?php if (isset($error_abouts)): ?>
			<?php foreach ($error_abouts as $value): ?>
				<div class="alert alert-danger messages" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				 {{$value[0];break}}
				</div>
			<?php endforeach ?>
		<?php endif ?>

		<?php if (isset($about_save)): ?>
			<div class="alert alert-success messages" role="alert">
			  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			  	save
			</div>
		<?php endif ?>

	</div>
@stop
