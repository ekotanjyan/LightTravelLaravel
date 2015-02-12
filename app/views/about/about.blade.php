@extends('main.master')
<!--==============================header=================================-->
 
<!--=======content================================-->

@section('about_content')
<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - August 05, 2013!</div>
  <div class="container_12">
      <div class="grid_9">
        <div class="">
          <?php if (isset($about)): ?>
            
              <h3>{{$about->title}}</h3>
              <div class="img_div"><img src="{{URL::asset('uploadabout/'.$about->img_url)}}" alt="" class="img_inner fleft"></div>
              <p>{{$about->text}}</p>
              <p>{{$about->full_text}}</p>
              <div class="clear"></div>
          <?php endif ?>
        </div>
      </div>
      <div class="grid_3">
        <h3>Our Principles</h3>
        <ul class="list1">
          <li>
            <div class="count">1</div>
            <div class="extra_wrapper">
              <div class="text1"><a href="#">Pellentesque imperdiet. </a></div>Quisque sed quam justo. Nulla kilor congue sed turpis nec lacinia. Nulla facilisi. Ut sit amet gravida telluswil. Morbi id consequat erosivamus. 
            </div>
          </li>
          <li>
            <div class="count">2</div>
            <div class="extra_wrapper">
              <div class="text1"><a href="#">Aellentesque omperdie. </a></div>Fuisque sed quam justo. Cngueteri sed turpis nec lacinia. Nulla facilisi. Ut sit amet gravida tellus. Morbi idy consequat eros. Vivamus imperdiet
            </div>
          </li>
          <li>
            <div class="count">3</div>
            <div class="extra_wrapper">
              <div class="text1"><a href="#">Grellentesque imperdik. </a></div>Yisque sed quam justo. Nullaongue sed turpis nec lacinia. Julla facilisi. Ut sit amet gravida tellus. Morbi idy consequat erosamus imperdiet. 
            </div>
          </li>
        </ul>
      </div>
      <div class="clear"></div>
      <div class="grid_12">
        <div class="hor_sep"></div>
      </div>
      <div class="clear"></div>
      <div class="grid_9">

        
        <div class="clear"></div>
      </div>
      <div class="grid_3">
        <h3 class="head1">testimonial</h3>
        <blockquote>
          <p class="text1"> “ Nnatoque penatibus tkamet magnis dis parturient montes, nascetur ridiculus mustro lito. Quisque vehicula eu nisleweri teget convallis. Vivamus sit amet fringilla nibt fringilla. ”</p>
          <div class="bq_bot">
            <div class="text1">Mark Johnson</div>Director of Product Management
          </div>
        </blockquote>
      </div>
      <div class="clear"></div>
  </div>
</div>
@stop

<!--=======bottom================================-->
@section('about_bottom')
<div class="bottom_block">
  <div class="container_12">
    <div class="grid_2 prefix_2">
      <ul>
        <li><a href="#">FAQS Page</a></li>
        <li><a href="#">People Say</a></li>
      </ul>
    </div>
    <div class="grid_2">
      <ul>
        <li><a href="#">Useful links</a></li>
        <li><a href="#">Partners</a></li>
      </ul>
    </div>
    <div class="grid_2">
      <ul>
        <li><a href="#">Insurance</a></li>
        <li><a href="#">Family Travel</a></li>
      </ul>
    </div>
    <div class="grid_2">
      <h4>Contact Us:</h4>
      TEL: 1-800-234-5678<br><a href="#">info@demolink.org</a>
     
    </div>
    <div class="clear"></div>
    </div>
  </div>
@stop
<!--==============================footer=================================-->
