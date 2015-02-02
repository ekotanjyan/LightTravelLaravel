@extends('admin.master')
@section('tours_content')
	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 content">

		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content">Tours</div>
		<?php if (isset($tours_all)): ?>
			<?php foreach ($tours_all as $value): ?>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 content top">{{$value->title}}</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 content">
					<button class="btn btn-default"><a href="{{URL::to('/edit_tours/'.$value->id)}}">Edit tours</a></button>
					<button class="btn btn-default"><a href="{{URL::to('/delete_tours/'.$value->id)}}">Delete tours</a></button>
				</div>
			<?php endforeach ?>
			<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 content"><button class="btn btn-default"><a href="{{URL::to('/add_tours')}}">Add tours</a></button></div>
		<?php endif ?>
		<?php if (isset($country)): ?>
			<form method="post" action="{{URL::to('/AddNewTours')}}" enctype="multipart/form-data">
				<label for="title">Add title</label>
				<input id="title" class="form-control input" type="text" name="title">
				<label for="description">Add description</label>
				<input id="description" class="form-control input" type="text" name="description">
				<label for="start_date">Add start date</label>
				<input class="form-control input" id="start_date" type="text" name="start_date" />
				<label for="end_date">Add end date</label>
				<input class="form-control input" id="end_date" type="text" name="end_date">
				<label for="country">Add country</label>
				<select id="country" class="form-control input" name="country">
					<?php foreach ($country as $value): ?>
						<option>{{$value->name}}</option>	
					<?php endforeach ?>
				</select>
				<label for="city">Add city</label>
				<select id="city" class = "form-control input" name="city">
					<?php foreach ($city as $value): ?>
						<option>{{$value->name}}</option>	
					<?php endforeach ?>
				</select>
				<label for="price">Add price</label>
				<input id="price" class="form-control input" type="text" name="price">
				<label for="img_url">Add img</label>
				<input id="img_url" class="form-control input" type="file" name="image">
				<button class="btn btn-default">Save</button>
			</form>
		<?php endif ?>

		<?php if (isset($save_add_tours)): ?>
			<div class="alert alert-success messages col-xs-10 col-sm-10 col-md-10 col-lg-10" role="alert">
			  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			  	Save
			</div>
		<?php endif ?>



		<?php if (isset($tours_edit)): ?>
			<form method="post" action="{{URL::to('/editTours/'.$tours_edit->id)}}" enctype="multipart/form-data">
				<label for="title">Add title</label>
				<input id="title" class="form-control input" type="text" name="title" value="{{$tours_edit->title}}">
				<label for="description">Add description</label>
				<input id="description" class="form-control input" type="text" name="description" value="{{$tours_edit->description}}">
				<label for="start_date">Add start date</label>
				<input class="form-control input" id="start_date" type="text" name="start_date" value="{{$tours_edit->start_date}}">
				<label for="end_date">Add end date</label>
				<input class="form-control input" id="end_date" type="text" name="end_date" value="{{$tours_edit->end_date}}">
				<label for="country">Add country</label>
				<select id="country" class="form-control input" name="country">
					<?php foreach ($country_edit as $value): ?>
						<option selected="{{$tours_edit->country}}">{{$value->name}}</option>
					<?php endforeach ?>
				</select>
				<label for="city">Add city</label>
				<select id="city" class = "form-control input" name="city">
					<?php foreach ($city_edit as $value): ?>
						<option selected="{{$tours_edit->city}}">{{$value->name}}</option>	
					<?php endforeach ?>
				</select>
				<label for="price">Add price</label>
				<input id="price" class="form-control input" type="text" name="price" value="{{$tours_edit->price}}">
				<label for="img_url">Add img</label>
				<input id="img_url" class="form-control input" type="file" name="image">
				<button class="btn btn-default">Save</button>
			</form>			
		<?php endif ?>

		<?php if (isset($save_edit)): ?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 alert alert-success messages" role="alert">
			  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			  	save
			</div>
		<?php endif ?>

		<?php if (isset($error_edit)): ?>
			<?php foreach ($error_edit as $value): ?>
				<div class="alert alert-danger messages" role="alert">
				  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
				 {{$value[0];break}}
				</div>
			<?php endforeach ?>
		<?php endif ?>


		<?php if (Session::has('save_delete')): ?>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 alert alert-success messages" role="alert">
			  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			  	{{Session::get('save_delete')}}
			</div>
		<?php endif ?>


	</div>







		
@stop
