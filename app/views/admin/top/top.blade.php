@extends('admin.master')
@section('slider_top')



<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 leftbar content">
<div>Top slider</div>
<?php if (isset($add)): ?>
	<form method="post" action="{{URL::to('/addtopimg')}}" enctype="multipart/form-data">
		<label for="title">title</label>
		<input class="form-control input" id="title" type="text" name="title">
		<label for="text">text</label>
		<textarea id="text" class="form-control text_area"  row="130" name="text"></textarea>
		<label for="img_url">Add img</label>
		<input id="img_url" class="form-control input" type="file" name="image">
		<input type="submit" name="add_img">
	</form>
<?php endif ?>

	<?php if (Session::has('update_img')): ?>
		<div class="alert alert-success messages" role="alert">
		  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		  	{{Session::get('update_img')}}
		</div>
	<?php endif ?>

	<?php if (isset($topid)): ?>
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 leftbar content">
			<form method="post" enctype="multipart/form-data" action="{{URL::to('/topImg/'.$topid->id)}}">
				<label for="title">title</label>
				<input id="title" class="form-control input" type="text" name="title" value="{{$topid->title}}">
				<label for="text">text</label>
				<textarea id="text" class="form-control text_area"  row="130" name="text">{{$topid->text}}</textarea>
				<label for="add_img">Add Img</label>
				<input id="add_img" class="form-control input" type="file" name="image">
				<input type="submit" name="top_img" value="Save">
			</form>
		</div>
	<?php endif ?>
	
	<?php if (isset($top)): ?>
		<?php foreach ($top as $value): ?>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 top">
				<a href="#">{{$value->title}}</a>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 top_img">
				<button type="button" class="btn btn-default"><a href="{{URL::to('/editslide/'.$value->id)}}">Edit</a></button>
				<button type="button" class="btn btn-default"><a href="{{URL::to('/deleteslide/'.$value->id)}}">Delete</a></button>
			</div>
		<?php endforeach ?>
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 top_img">
			<button type="button" class="btn btn-default"><a href="{{URL::to('/addslidertop')}}">Add img</a></button>
		</div>
	<?php endif ?>

	<?php if (isset($error_top)): ?>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 top_img">
		<?php foreach ($error_top as $value): ?>
			<div class="alert alert-danger messages" role="alert">
			  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			  {{$value[0];break;}}
			</div>
		<?php endforeach ?>
	</div>
	<?php endif ?>
	<?php if (isset($error_add)): ?>
		<?php foreach ($error_add as $value): ?>
			<div class="alert alert-danger messages" role="alert">
			  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			  {{$value[0];break;}}
			</div>
		<?php endforeach ?>
	<?php endif ?>
</div>
@stop
