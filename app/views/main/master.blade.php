@section('header')
<!DOCTYPE html>
<html lang="en">
		 <head>
		 <title>Home</title>
		 <meta charset="utf-8">
		 <link rel="icon" href="{{URL::asset('assets/images/favicon.ico')}}">
		 <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.ico')}}" />
		 <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
		 <link rel="stylesheet" href="{{URL::asset('assets/css/slider.css')}}">
		 <link rel="stylesheet" href="{{URL::asset('assets/css/touchTouch.css')}}">
		 <link rel="stylesheet" href="{{URL::asset('assets/css/form.css')}}">
		 <link rel="stylesheet" href="{{URL::asset('assets/css/datepicker3.css')}}">
		 <link rel="stylesheet" href="{{URL::asset('assets\css\bootstrap.min.css')}}">
		 <link rel="stylesheet" href="{{URL::asset('assets\css\bootstrap-theme.min.css')}}">

		 <!--[if lt IE 8]>
			 <div style=' clear: both; text-align:center; position: relative;'>
				 <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
					 <img src="{{URL::asset('assets/http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg')}}" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
				 </a>
			</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">

		<![endif]-->
		 </head>
		 <body	class="page1 container-fluid" style="padding: 0; display: block">
		  <header>
		 	<!--<div class="container_12">
		 		<div class="grid_12">



		 					 <div class="clear"></div>
		 			</div>
		    <div class="menu_block">
		 		<nav	class="" >
		 			<ul class="sf-menu">
                                     <li class="current"><a href="{{URL::to('/')}}">Home</a></li>
                                     <li class="with_ul"><a href="{{URL::to('/About')}}">About</a>
                                         <ul>
                                                <li><a href="{{URL::to('/Agency')}}"> Agency</a></li>
                                                <li><a href="{{URL::to('/News')}}">News</a></li>
                                                <li><a href="{{URL::to('/Team')}}">Team</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="{{URL::to('/Gallery')}}">Gallery</a></li>
                                     <li class="border_radius"><a href="{{URL::to('/')}}">Light Travel</a></li>
                                     <li><a href="{{URL::to('/Tours')}}">Tours</a></li>
                                     <li><a href="{{URL::to('/Blog')}}">Blog</a></li>
                                     <li><a href="{{URL::to('/Contacts')}}">Contacts</a></li>
		 					</ul>
		 			</nav>
		 		<div class="clear"></div>
		 		</div>
		 		<div class="clear"></div>
		 	</div>-->

            <div class="container-fluid" style="padding: 0; margin-top: 20px">
                <div class="container-fluid menubar" style="padding: 0">

                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding: 0; height: 182px">

                        <ul class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mainmenu" >
                            <li class="col-xs-12 col-sm-2 col-md-2 col-lg-2"></li>
                            <li class="col-xs-12 col-sm-1 col-md-1 col-lg-1"><a href="{{URL::to('/')}}" class="menutitle text-center">Home</a></li>
                            <li class="col-xs-12 col-sm-1 col-md-1 col-lg-1"><a href="{{URL::to('/About')}}" class="menutitle text-center">About</a>
                                <!--<ul class="icesubMenu icemodules">
                                    <li><a href="{{URL::to('/Agency')}}" class="iceMenuTitle"> Agency</a></li>
                                    <li><a href="{{URL::to('/News')}}" class="iceMenuTitle">News</a></li>
                                    <li><a href="{{URL::to('/Team')}}" class="iceMenuTitle">Team</a></li>
                                </ul>-->
                            </li>
                            <li class="col-xs-12 col-sm-1 col-md-1 col-lg-1"><a href="{{URL::to('/Gallery')}}" class="menutitle text-center">Gallery</a></li>
                            <li class="col-xs-12 col-sm-2 col-md-2 col-lg-2 logo"><a href="{{URL::to('/')}}" class="menutitle text-center">Light Travel</a></li>
                            <li class="col-xs-12 col-sm-1 col-md-1 col-lg-1"><a href="{{URL::to('/Tours')}}" class="menutitle text-center">Tours</a></li>
                            <li class="col-xs-12 col-sm-1 col-md-1 col-lg-1"><a href="{{URL::to('/Blog')}}" class="menutitle text-center">Blog</a></li>
                            <li class="col-xs-12 col-sm-1 col-md-1 col-lg-1"><a href="{{URL::to('/Contacts')}}" class="menutitle text-center">Contacts</a></li>
                            <li class="col-xs-12 col-sm-2 col-md-2 col-lg-2"></li>
                        </ul>
                    </div>
                </div>
            </div>

		 </header>

		 <div class="container-fluid" style="padding: 0; max-width: 1200px; margin: 0 auto;">
             <div class="container-fluid main" >
		 	    <div class="slider-relative container-fluid" style="padding: 50px">


		 			<div class="slider-block container-fluid" style="padding: 0">
		 				<div class="slider container-fluid" style="padding: 0">
		 					<a href="#" class="prev"></a><a href="#" class="next"></a>
		 					<ul class="items container-fluid">
		 						<?php if (isset($slider)): ?>
		 							<?php foreach ($slider as $value): ?>
		 								<li style="width: 100%">

                                            <img src="{{URL::asset('upload/'.$value->img_url)}}" alt="" style="width: 100% !important; overflow: hidden;">

		 									<div class="banner">
		 									<div>{{$value->name}}</div><br>
		 									<span>{{$value->description}}</span>
		 									</div>
		 								</li>
		 							<?php endforeach ?>
		 						<?php endif ?>
		 					</ul>
                        </div>
		 			</div>


		 		</div>

    @show

    @yield('content')

    @yield('about_content')
    @yield('about_bottom')

    @yield('gallery_content')
    @yield('gallery_bottom')

    @yield('tours_content')
    @yield('tours_bottom')

    @yield('blog_content')
    @yield('blog_bottom')

    @yield('contacts_content')
    @yield('contacts_bottom')

    @yield('content_search')
    @yield('search_bottom')

    @section('footer')
</div>
         </div>


<footer>		
	<div class="container_12">
	<div class="grid_12">
		<div class="socials">
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
		</div>
			<div class="copy">
		 Journey &copy; 2013 | <a href="#">Privacy Policy</a> | Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
		 </div></div>
		 <div class="clear"></div>
	</div>

</footer>
 <script src="{{URL::asset('assets/js/jquery.js')}}"></script>
 <script src="{{URL::asset('assets/js/jquery-migrate-1.1.1.js')}}"></script>
 <script src="{{URL::asset('assets/js/superfish.js')}}"></script>
 <script src="{{URL::asset('assets/js/sForm.js')}}"></script>
 <script src="{{URL::asset('assets/js/jquery.jqtransform.js')}}"></script>
 <script src="{{URL::asset('assets/js/jquery.equalheights.js')}}"></script>
 <script src="{{URL::asset('assets/js/jquery.easing.1.3.js')}}"></script>
 <script src="{{URL::asset('assets/js/tms-0.4.1.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery-ui-1.10.3.custom.min.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.ui.totop.js')}}"></script>
<script src="{{URL::asset('assets/js/touchTouch.jquery.js')}}"></script>
<script src="{{URL::asset('assets/js/forms.js')}}"></script>
<script src="{{URL::asset('assets/js/main.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap-datepicker.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>

<script>
	$(function() {
		$('#startdatae').datepicker({});
		$('#enddate').datepicker({});
	});
</script>

<script>
     $(window).load(function(){
       $().UItoTop({ easingType: 'easeOutQuart' });
      });
      
      
      
     </script>

<script>
     $(window).load(function(){
       $().UItoTop({ easingType: 'easeOutQuart' });
      });
       $(function(){
  
  // Initialize the gallery
  $('.gallery a.gal').touchTouch();
 });  
      
      
     </script>

 <script>
	$(window).load(function(){
	$('.slider')._TMS({
					show:0,
					pauseOnHover:false,
					prevBu:'.prev',
					nextBu:'.next',
					playBu:false,
					duration:800,
					preset:'random', 
					pagination:false,//'.pagination',true,'<ul></ul>'
					pagNums:false,
					slideshow:8000,
					numStatus:false,
					banners:true,
			waitBannerAnimation:false,
		progressBar:false
	})	;
	 $( "#tabs" ).tabs();
 
$().UItoTop({ easingType: 'easeOutQuart' });
	});

 </script>


</body>
</html>
@show
