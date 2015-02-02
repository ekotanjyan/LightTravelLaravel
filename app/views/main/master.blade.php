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
		 <body	class="page1">
		  <header> 
		 	<div class="container_12">
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
		 					</div>
		 </header>
		 <div class="main">
		 	<div class="container_12">
		 		<div class="grid_12">
		 	 <div class="slider-relative">
		 			<div class="slider-block">
		 				<div class="slider">
		 					<a href="#" class="prev"></a><a href="#" class="next"></a>
		 					<ul class="items">
		 						<?php if (isset($slider)): ?>
		 							<?php foreach ($slider as $value): ?>
		 								<li><img src="{{URL::asset('upload/'.$value->img_url)}}" alt="">
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
		 	</div></div>
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
<script src="{{URL::asset('assets/js/forms.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap-datepicker.js')}}"></script>

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
