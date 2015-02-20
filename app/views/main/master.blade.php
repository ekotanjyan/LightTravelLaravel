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

<!--<style>

    .captionOrange
    {
        color: #fff;
        font-size: 20px;
        line-height: 30px;
        text-align: center;
        border-radius: 4px;
    }
    .captionOrange
    {
        background: #EB5100;
        background-color: rgba(235, 81, 0, 0.6);
    }
    a.captionOrange, A.captionOrange:active, A.captionOrange:visited
    {
        color: #ffffff;
        text-decoration: none;
    }
    a.captionOrange:hover
    {
        color: #eb5100;
        text-decoration: underline;
        background-color: #eeeeee;
        background-color: rgba(238, 238, 238, 0.7);
    }
    .jssorb01 div, .jssorb01 div:hover
    {
        filter: alpha(opacity=70);
        opacity: .7;
        overflow:hidden;
        cursor: pointer;
        border: #000 1px solid;
    }
    .jssorb01 div { background-color: gray; }
    .jssorb01 div:hover, .jssorb01 .av:hover { background-color: #d3d3d3; }

    .jssora05l, .jssora05r
    {
        position: absolute;
        cursor: pointer;
        display: block;
        /*background: url(../img/a17.png) no-repeat;*/
        overflow:hidden;
    }
    .jssora05l { background-position: -10px -40px; }
    .jssora05r { background-position: -70px -40px; }
    .jssora05l:hover { background-position: -130px -40px; }
    .jssora05r:hover { background-position: -190px -40px; }

}
</style>-->
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
		 <body	class="page1" style="padding: 0; display: block">
		  <header>

              <div class="container-fluid" style="padding: 0">
                  <div class="container menubar" style="padding: 0">
                      <ul class="mainmenu container-fluid" style="list-style-type: none">
                          <li class="col-xs-12 col-sm-1 col-md-1 col-lg-1"><a href="{{URL::to('/')}}" class="menutitle text-center">Home</a></li>
                          <li class="col-xs-12 col-sm-2 col-md-2 col-lg-2"><a href="{{URL::to('/About')}}" class="menutitle text-center">About</a>                          </li>
                          <li class="col-xs-12 col-sm-2 col-md-2 col-lg-2"><a href="{{URL::to('/Contacts')}}" class="menutitle text-center">Contacts</a></li>
                          <li class="logo col-xs-12 col-sm-2 col-md-2 col-lg-2"><a href="{{URL::to('/')}}" class="menutitle text-center"><img src="{{URL::asset('assets/images/logo_img.png')}}"></a></li>
                          <li class="col-xs-12 col-sm-2 col-md-2 col-lg-2"><a href="{{URL::to('/Gallery')}}" class="menutitle text-center">Gallery</a></li>
                          <li class="col-xs-12 col-sm-2 col-md-2 col-lg-2"><a href="{{URL::to('/Tours')}}" class="menutitle text-center">Tours</a></li>
                          <li class="col-xs-12 col-sm-1 col-md-1 col-lg-1"><a href="{{URL::to('/Blog')}}" class="menutitle text-center">Blog</a></li>
                      </ul>
                  </div>
              </div>

		 </header>



          <div class="main container-fluid" style="padding: 0">

              <div class="container-fluid" style="padding: 0; margin: 0 50px 50px 50px; background-color: #fff">

                  <div class="slider-relative container-fluid" style="padding: 0">


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



<footer style="padding: 0">

    <div class="page_footer container-fluid" style="margin-left: 50px; margin-right: 50px;padding: 0; margin-bottom: 30px; background-color: #30455B; color: #FFF; font-size: 12px">

        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2"></div>

        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
            <a href="">FAQS PAGE</a>
            <br>
            <a href="">PEOPLE SAY</a>
        </div>

        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
            <a href="">USEFUL LINKS</a>
            <br>
            <a href="">PARTNERS</a>
        </div>

        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
            <a href="">INSURANCE</a>
            <br>
            <a href="">FAMILY TRAVEL</a>
        </div>

        <div class="col-xs-6 col-sm-2 col-md-2 col-lg-2">
            <a href="" class="contact">CONTACT US: <br> TEL: 1-800-234-5678</a>
            <br>
            <a href="">info@demolink.org</a>
        </div>
        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2"></div>

    </div>

    <div class="soc_icons container-fluid">
        <div>
            <a href="" class="tw"></a>
            <a href="" class="fb"></a>
            <a href="" class="g+"></a>
            <a href="" class="in"></a>
        </div>
    </div>

	<!--<div class="container_12">
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
	</div>-->

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
<!--<script src="{{URL::asset('assets/js/bootstrap.js')}}"></script>
<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>>-->

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
<script>
$(document).ready(function(){
  $('.pic').css({'height': '800px !important'});
});
</script>

<!--<script>
  jQuery(document).ready(function ($) {
      //Reference http://www.jssor.com/development/slider-with-slideshow-jquery.html
      //Reference http://www.jssor.com/development/tool-slideshow-transition-viewer.html

      var _SlideshowTransitions = [
          //Rotate Overlap
          { $Duration: 1200, $Zoom: 11, $Rotate: -1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5 }, $Brother: { $Duration: 1200, $Zoom: 1, $Rotate: 1, $Easing: $JssorEasing$.$EaseSwing, $Opacity: 2, $Round: { $Rotate: 0.5 }, $Shift: 90 } },
          //Switch
          { $Duration: 1400, x: 0.25, $Zoom: 1.5, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInSine }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1400, x: -0.25, $Zoom: 1.5, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Zoom: $JssorEasing$.$EaseInSine }, $Opacity: 2, $ZIndex: -10 } },
          //Rotate Relay
          { $Duration: 1200, $Zoom: 11, $Rotate: 1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 1 }, $ZIndex: -10, $Brother: { $Duration: 1200, $Zoom: 11, $Rotate: -1, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 1 }, $ZIndex: -10, $Shift: 600 } },
          //Doors
          { $Duration: 1500, x: 0.5, $Cols: 2, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2, $Brother: { $Duration: 1500, $Opacity: 2 } },
          //Rotate in+ out-
          { $Duration: 1500, x: -0.3, y: 0.5, $Zoom: 1, $Rotate: 0.1, $During: { $Left: [0.6, 0.4], $Top: [0.6, 0.4], $Rotate: [0.6, 0.4], $Zoom: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, $Zoom: 11, $Rotate: -0.5, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Shift: 200 } },
          //Fly Twins
          { $Duration: 1500, x: 0.3, $During: { $Left: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true, $Brother: { $Duration: 1000, x: -0.3, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
          //Rotate in- out+
          { $Duration: 1500, $Zoom: 11, $Rotate: 0.5, $During: { $Left: [0.4, 0.6], $Top: [0.4, 0.6], $Rotate: [0.4, 0.6], $Zoom: [0.4, 0.6] }, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, $Zoom: 1, $Rotate: -0.5, $Easing: { $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Shift: 200 } },
          //Rotate Axis up overlap
          { $Duration: 1200, x: 0.25, y: 0.5, $Rotate: -0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1200, x: -0.1, y: -0.7, $Rotate: 0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 } },
          //Chess Replace TB
          { $Duration: 1600, x: 1, $Rows: 2, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1600, x: -1, $Rows: 2, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
          //Chess Replace LR
          { $Duration: 1600, y: -1, $Cols: 2, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1600, y: 1, $Cols: 2, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
          //Shift TB
          { $Duration: 1200, y: 1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
          //Shift LR
          { $Duration: 1200, x: 1, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Brother: { $Duration: 1200, x: -1, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 } },
          //Return TB
          { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1200, y: -1, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Shift: -100 } },
          //Return LR
          { $Duration: 1200, x: 1, $Delay: 40, $Cols: 6, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: { $Left: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Brother: { $Duration: 1200, x: 1, $Delay: 40, $Cols: 6, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Easing: { $Top: $JssorEasing$.$EaseInOutQuart, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $ZIndex: -10, $Shift: -100 } },
          //Rotate Axis down
          { $Duration: 1500, x: -0.1, y: -0.7, $Rotate: 0.1, $During: { $Left: [0.6, 0.4], $Top: [0.6, 0.4], $Rotate: [0.6, 0.4] }, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Brother: { $Duration: 1000, x: 0.2, y: 0.5, $Rotate: -0.1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Top: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2 } },
          //Extrude Replace
          { $Duration: 1600, x: -0.2, $Delay: 40, $Cols: 12, $During: { $Left: [0.4, 0.6] }, $SlideOut: true, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 260, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Outside: true, $Round: { $Top: 0.5 }, $Brother: { $Duration: 1000, x: 0.2, $Delay: 40, $Cols: 12, $Formation: $JssorSlideshowFormations$.$FormationStraight, $Assembly: 1028, $Easing: { $Left: $JssorEasing$.$EaseInOutExpo, $Opacity: $JssorEasing$.$EaseInOutQuad }, $Opacity: 2, $Round: { $Top: 0.5 } } }
      ];

      var _CaptionTransitions = [
          //CLIP|LR
          {$Duration: 900, $Clip: 3, $Easing: $JssorEasing$.$EaseInOutCubic },
          //CLIP|TB
          {$Duration: 900, $Clip: 12, $Easing: $JssorEasing$.$EaseInOutCubic },

          //DDGDANCE|LB
          {$Duration: 1800, x: 0.3, y: -0.3, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Zoom: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $During: { $Left: [0, 0.8], $Top: [0, 0.8] }, $Round: { $Left: 0.8, $Top: 2.5} },
          //DDGDANCE|RB
          {$Duration: 1800, x: -0.3, y: -0.3, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseInJump, $Top: $JssorEasing$.$EaseInJump, $Zoom: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $During: { $Left: [0, 0.8], $Top: [0, 0.8] }, $Round: { $Left: 0.8, $Top: 2.5} },

          //TORTUOUS|HL
          {$Duration: 1500, x: 0.2, $Zoom: 1, $Easing: { $Left: $JssorEasing$.$EaseOutWave, $Zoom: $JssorEasing$.$EaseOutCubic }, $Opacity: 2, $During: { $Left: [0, 0.7] }, $Round: { $Left: 1.3} },
          //TORTUOUS|VB
          {$Duration: 1500, y: -0.2, $Zoom: 1, $Easing: { $Top: $JssorEasing$.$EaseOutWave, $Zoom: $JssorEasing$.$EaseOutCubic }, $Opacity: 2, $During: { $Top: [0, 0.7] }, $Round: { $Top: 1.3} },

          //ZMF|10
          {$Duration: 600, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 },

          //ZML|R
          {$Duration: 600, x: -0.6, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2 },
          //ZML|B
          {$Duration: 600, y: -0.6, $Zoom: 11, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2 },

          //ZMS|B
          {$Duration: 700, y: -0.6, $Zoom: 1, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2 },

          //ZM*JDN|LB
          {$Duration: 1200, x: 0.8, y: -0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseOutCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },
          //ZM*JUP|LB
          {$Duration: 1200, x: 0.8, y: -0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },
          //ZM*JUP|RB
          {$Duration: 1200, x: -0.8, y: -0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },

          //ZM*WVR|LT
          {$Duration: 1200, x: 0.5, y: 0.3, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave }, $Opacity: 2, $Round: { $Rotate: 0.8} },
          //ZM*WVR|RT
          {$Duration: 1200, x: -0.5, y: 0.3, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInWave }, $Opacity: 2, $Round: { $Rotate: 0.8} },
          //ZM*WVR|TL
          {$Duration: 1200, x: 0.3, y: 0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Round: { $Rotate: 0.8} },
          //ZM*WVR|BL
          {$Duration: 1200, x: 0.3, y: -0.5, $Zoom: 11, $Easing: { $Left: $JssorEasing$.$EaseInWave, $Top: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Round: { $Rotate: 0.8} },

          //RTT|10
          {$Duration: 700, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInExpo, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} },

          //RTTL|R
          {$Duration: 700, x: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} },
          //RTTL|B
          {$Duration: 700, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} },

          //RTTS|R
          {$Duration: 700, x: -0.6, $Zoom: 1, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInQuad, $Zoom: $JssorEasing$.$EaseInQuad, $Rotate: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $Round: { $Rotate: 1.2} },
          //RTTS|B
          {$Duration: 700, y: -0.6, $Zoom: 1, $Rotate: 1, $Easing: { $Top: $JssorEasing$.$EaseInQuad, $Zoom: $JssorEasing$.$EaseInQuad, $Rotate: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseOutQuad }, $Opacity: 2, $Round: { $Rotate: 1.2} },

          //RTT*JDN|RT
          {$Duration: 1000, x: -0.8, y: 0.5, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseOutCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },
          //RTT*JDN|LB
          {$Duration: 1000, x: 0.8, y: -0.5, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseOutCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },
          //RTT*JUP|RB
          {$Duration: 1000, x: -0.8, y: -0.5, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseLinear, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Top: [0, 0.5]} },
          {$Duration: 1000, x: -0.5, y: 0.8, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseLinear, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Left: [0, 0.5] }, $Round: { $Rotate: 0.5 } },
          //RTT*JUP|BR
          {$Duration: 1000, x: -0.5, y: -0.8, $Zoom: 11, $Rotate: 0.2, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseLinear, $Zoom: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $During: { $Left: [0, 0.5]} },

          //R|IB
          {$Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 },
          //B|IB
          {$Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutBack }, $Opacity: 2 }

      ];

      var options = {
          $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
          $AutoPlaySteps: 1,                                  //[Optional] Steps to go for each navigation request (this options applys only when slideshow disabled), the default value is 1
          $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
          $PauseOnHover: 1,                               //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

          $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
          $SlideDuration: 500,                                //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
          $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
          //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
          //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
          $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
          $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
          $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
          $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
          $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
          $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

          $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
              $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
              $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
              $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
              $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
          },

          $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
              $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
              $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
              $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
              $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
          },

          $BulletNavigatorOptions: {                                //[Optional] Options to specify and enable navigator or not
              $Class: $JssorBulletNavigator$,                       //[Required] Class to create navigator instance
              $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
              $AutoCenter: 0,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
              $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
              $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
              $SpacingX: 10,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
              $SpacingY: 10,                                   //[Optional] Vertical space between each item in pixel, default value is 0
              $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
          },

          $ArrowNavigatorOptions: {
              $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
              $ChanceToShow: 2                                //[Required] 0 Never, 1 Mouse Over, 2 Always
          }
      };

      var jssor_slider1 = new $JssorSlider$("slider1_container", options);
      //responsive code begin
      //you can remove responsive code if you don't want the slider scales while window resizes
      function ScaleSlider() {
          var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
          if (parentWidth)
              jssor_slider1.$ScaleWidth(Math.min(parentWidth, 600));
          else
              window.setTimeout(ScaleSlider, 30);
      }
      ScaleSlider();

      $(window).bind("load", ScaleSlider);
      $(window).bind("resize", ScaleSlider);
      $(window).bind("orientationchange", ScaleSlider);
      //responsive code end
  });
</script>-->

</body>
</html>
@show
