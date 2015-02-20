@extends('main.master')

@section('gallery_content')
  <div class="container-fluid" style="padding: 0; margin: 50px">
      <div class="container-fluid" style="padding: 0">
        <?php if (isset($gallery)): ?>
          <?php foreach ($gallery as $value): ?>
            <h3>{{$value->title; break}}</h3>
          <?php endforeach ?>
        <?php endif ?>
      </div>
      <div class="clear"></div>
       <div class="gallery container-fluid" style="padding: 0">
         <?php if (isset($gallery)): ?>
           <?php foreach ($gallery as $value): ?>
             <?php if (!empty($value->img)): ?>
               
               <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="padding-top: 10px; padding-bottom: 10px;"><!-- <img src="{{URL::asset('uploadgallery/'.$value->img)}}" alt=""> -->
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
