@section('header')
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body>
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 leftbar header">header</div>
		<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 leftbar">
			<ul class="nav nav-pills nav-stacked">
			  	<li><a href="{{URL::to('/slider')}}">Slider</a></li>
			  	<li><a href="{{URL::to('/top')}}">Top slider</a></li>
			  	<li><a href="{{URL::to('/tab')}}">Tab categories</a></li>
			  	<li><a href="{{URL::to('/AboutEdit')}}">About</a></li>
			  	<li><a href="{{URL::to('/GalleryEdit')}}">Gallery</a></li>
			  	<li><a href="{{URL::to('/Adduser')}}">Add user</a></li>
			  	<li><a href="{{URL::to('/AddTours')}}">AddTours</a></li>
			  	<li><a href="#">all materials</a></li>
			</ul>
		</div>
		@yield('content_home')
		@yield('slider_content')
		@yield('slider_top')
		@yield('content_tab')
		@yield('about_content')
		@yield('gallery_content')
		@yield('user_content')
		@yield('tours_content')
	</div>
<link rel="stylesheet" type="text/css" href="{{URL::asset('bootstrap/css/bootstrap.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('bootstrap/css/datepicker3.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/admin/css/admin.css')}}">
<script type="text/javascript" src="{{URL::asset('assets/js/jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('bootstrap/js/bootstrap.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('bootstrap/js/bootstrap-datepicker.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('assets/admin/js/admin.js')}}"></script>
<script>
    $(document).ready(function (){
        $('.datepickers').datepicker();

        
    });
</script>
</body>
</html>
@show
