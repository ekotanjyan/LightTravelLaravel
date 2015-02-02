@extends('admin.master')
@section('gallery_content')
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 content">Gallery</div>
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 content">
		<?php if (isset($gallery_img)): ?>
			<?php foreach ($gallery_img as $value): ?>
				<?php if (!empty($value->img)): ?>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 content div_info">
						<div>{{$value->img}}</div>
					</div>
					<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 content div_button">
						<div>
							<button class="btn btn-default"><a href="{{URL::to('/deletegallery/'.$value->id)}}">Delete</a></button>
							<button class="btn btn-default"><a href="{{URL::to('/editgallery/'.$value->id)}}">Edit</a></button>
						</div>
					</div>					
				<?php endif ?>
			<?php endforeach ?>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 content">
				<button class="btn btn-default"><a href="{{URL::to('/AddGallery/')}}">Add Gallery</a></button>
				<button class="btn btn-default"><a href="{{URL::to('/Renametitle/')}}">Rename title</a></button>
			</div>
		<?php endif ?>

		<?php if (isset($addgallery)): ?>
			<form method="post" action="{{URL::to('/AddGallerySave')}}" enctype="multipart/form-data">
				<label for="img">Add img</label>
				<input id="img" class="form-control input" type="file" name="image">
				<button type="submit" class="btn btn-default">Save</button>
			</form>
		<?php endif ?>
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
		<?php if (isset($gallery_ok)): ?>
			<div class="alert alert-success messages" role="alert">
			  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			  	Save
			</div>
		<?php endif ?>

		<?php if (isset($error_gallery)): ?>
			<?php foreach ($error_gallery as $value): ?>
				<div class="alert alert-danger messages" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				 {{$value[0];break}}
				</div>
			<?php endforeach ?>
		<?php endif ?>

		<?php if (isset($edit_gallery)): ?>
			<form method="post" action="{{URL::to('/EditGallerySave/'.$edit_gallery->id)}}" enctype="multipart/form-data">
				<label for="img"></label>
				<input id="img" class="form-control input" type="file" name="image">
				<button class="btn btn-default" type="submit">Save</button>
			</form>
		<?php endif ?>

		<?php if (isset($edit_gallery_save)): ?>
			<div class="alert alert-success messages" role="alert">
			  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			  	Save
			</div>
		<?php endif ?>

		<?php if (isset($title_rename)): ?>
			<form method="post" action="{{URL::to('/TitleSave/1')}}">
				<label for="title">Edit title</label>
				<input id="title" class="form-control input" type="text" name="text" value="{{$title_rename->title}}">
				<button type="submit" class="btn btn-default">Save</button>
			</form>
		<?php endif ?>

	</div>
	</div>
@stop


