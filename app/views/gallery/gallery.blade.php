@extends('main.master')

@section('gallery_content')
<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - August 05, 2013!</div>
  <div class="container_12">
      <div class="grid_12">
        <?php if (isset($gallery)): ?>
          <?php foreach ($gallery as $value): ?>
            <h3>{{$value->title; break}}</h3>
          <?php endforeach ?>
        <?php endif ?>
      </div>
      <div class="clear"></div>
       <div class="gallery">
         <?php if (isset($gallery)): ?>
           <?php foreach ($gallery as $value): ?>
             <?php if (!empty($value->img)): ?>
               
               <div class="grid_4"><!-- <img src="{{URL::asset('uploadgallery/'.$value->img)}}" alt=""> -->
                 <a href="{{URL::asset('uploadgallery/'.$value->img)}}" class="gal img_inner"><div class="img_div" style="background-image:url({{URL::asset('uploadgallery/'.$value->img)}})"></div></a>
               </div>
              
               
             <?php endif ?>
           <?php endforeach ?>
         <?php endif ?>
       </div>
      <div class="clear"></div>
  </div>
</div>
@stop

@section('gallery_bottom')
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
