@extends('admin.master')
@section('content_tab')
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 content">TabCategoris</div>
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 content">
	<?php if (isset($tab)): ?>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 content">
			<?php foreach ($tab as $value): ?>
				<?php if (!empty($value->tab_name)): ?>
					<div class="top"><a href="{{URL::to('/tabid/'.$value->parent_id)}}">{{$value->tab_name}}</a></div>					
				<?php endif ?>
			<?php endforeach ?>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 rename">
			<div class="btn btn-default display"><a href="{{URL::to('/renameid/1')}}">Rename</a></div>
			<div class="btn btn-default display"><a href="{{URL::to('/renameid/3')}}">Rename</a></div>
			<div class="btn btn-default display"><a href="{{URL::to('/renameid/5')}}">Rename</a></div>
		</div>
	<?php endif ?>
	
	<?php if (isset($tabid)): ?>
		<?php foreach ($tabid as $value): ?>
			<div class="top"><a href="{{URL::to('/edit_title/'.$value->id)}}">{{$value->title}}</a></div>
		<?php endforeach ?>
	<?php endif ?>

	<?php if (isset($editid)): ?>
		<form method="post" enctype="multipart/form-data" action="{{URL::to('/edittab/'.$editid->id)}}">
			<label for="title">title</label>
			<input id="title" class="form-control input" type="text" name="title" value="{{$editid->title}}">
			<label for="text">Text</label>
			<textarea id="text" class="form-control text_area" name="text">{{$editid->text}}</textarea>
			<label for="edit_img">Edit img</label>
			<input id="edit_img" class="form-control input" type="file" name="image">
			<input class="btn btn-default" type="submit" name="edit_submit" value="Save">
		</form>		
	<?php endif ?>

	<?php if (Session::has('edit_tab_true')): ?>
		<div class="alert alert-success messages" role="alert">
		  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
		  	{{Session::get('edit_tab_true')}}
		</div>
	<?php endif ?>

	<?php if (isset($error_tab)): ?>
		<?php foreach ($error_tab as $value): ?>
			<div class="alert alert-danger messages" role="alert">
			  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			 {{$value[0];break}}
			</div>
		<?php endforeach ?>
	<?php endif ?>

	<?php if (isset($rename_tab)): ?>
		<form method="post" action="{{URL::to('/editRename/'.$rename_tab->id)}}">
			<label for="edit_rename">Edit rename</label>
			<input id="edit_rename" class="form-control input" type="text" name="tab_name" value="{{$rename_tab->tab_name}}">
			<input class="btn btn-default" type="submit" name="rename_submit" value="save">
		</form>
	<?php endif ?>

	<?php if (isset($empty_rename)): ?>
		<?php foreach ($empty_rename as $value): ?>
			<div class="alert alert-danger messages" role="alert">
			  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
			 {{$value[0];break}}
			</div>
		<?php endforeach ?>
	<?php endif ?>

</div>
@stop
