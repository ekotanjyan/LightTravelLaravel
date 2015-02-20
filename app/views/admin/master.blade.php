@section('header')
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
</head>
<body>
	<div class="container-fluid" style="padding: 0">

        <div class="container-fluid" style="padding: 0; height: 80px; background-color: #38afe5; border-bottom: 1px solid #357db2">
            <p style="color: #fff; font-size: 30px; font-family: 'Pathway Gothic One', sans-serif; padding: 15px">LIGHT TRAVEL</p>
        </div>

        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding: 0;background-color: #38afe5; border-right: 1px solid #357db2; height: 1000px">
            <ul class="container-fluid admin_menu">
                <li><a href="{{URL::to('/slider')}}">Slider</a></li>
                <li><a href="{{URL::to('/top')}}">Top slider</a></li>
                <li><a href="{{URL::to('/tab')}}">Tab categories</a></li>
                <li><a href="{{URL::to('/AboutEdit')}}">About</a></li>
                <li><a href="{{URL::to('/GalleryEdit')}}">Gallery</a></li>
                <li><a href="{{URL::to('/Adduser')}}">Add user</a></li>
                <li><a href="{{URL::to('/AddTours')}}">AddTours</a></li>
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
<style>
    .admin_menu {
        list-style-type: none;
        padding: 10px;
    }

    .admin_menu li {
        border-radius: 5px;
        border: 1px solid #38afe5;
        padding: 8px;
    }

    .admin_menu li a{
        text-decoration: none;
        color: #fff;
        font-size: 18px;
        padding-left: 10px;
    }

    .admin_menu li:hover {
        background-color: #357db2;
        border: 1px solid #357db2;
    }

    .admin_menu li:hover a {
        padding-left: 15px;
        -webkit-transition: padding-left 0.2s ease-out;
        -moz-transition: padding-left 0.2s ease-out;
        -o-transition: padding-left 0.2s ease-out;
        transition: padding-left 0.2s ease-out;
    }

</style>
</body>
</html>
@show
