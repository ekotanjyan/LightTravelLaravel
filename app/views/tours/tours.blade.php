@extends('main.master')

@section('tours_content')
  <div class="container-fluid" style="padding: 0; margin: 50px">
    <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9" style="padding: 0">
      <h3>Special Tours</h3>
      <div class="tours container-fluid" style="padding: 0">
        <?php if (isset($tours)): ?>
          <?php foreach ($tours as $value): ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="padding: 0">
        <div class="tour container-fluid" style="padding: 0">
            <div class="img_tours"><img src="{{URL::asset('uploadtours/'.$value->img_url)}}" alt="" class="img_inner fleft"></div>
            <div class="extra_wrapper">
            <p class="text1">{{$value->title}}</p>
            <p class="price">{{$value->description}}<span>$ {{$value->price}}</span></p>
            <p class="price">Start Date {{substr($value->start_date,0,10)}} <br /> End Date {{substr($value->end_date,0,10)}}</p>
            <a href="{{URL::to('/Toursid/'.$value->id)}}" class="btn">Details</a>
          <!-- <img src="{{URL::asset('assets/images/page4_img1.jpg')}}" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <p class="text1">Gellentesque imperdiet </p>
            <p class="price">Lorem ipsum dolor sit amet <span>From $ 399</span></p>
            <p class="price">Suspendisse jew wligulawe <span>From $ 299</span></p>
            <a href="#" class="btn">Details</a> -->
          </div>
        </div>
      </div>
          <?php endforeach ?>
        <?php endif ?>

     <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
        <div class="tour">
          <img src="{{URL::asset('assets/images/page4_img2.jpg')}}" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <p class="text1">Mellentesquj mperdiete </p>
            <p class="price">Dorem ium dolor sit amet <span>From $ 399</span></p>
            <p class="price">Huspendisse jew eligulawe <span>From $ 299</span></p>
            <a href="#" class="btn">Details</a>
          </div>
        </div>
      </div>
      <!-- <div class="grid_4 alpha">
        <div class="tour">
          <img src="{{URL::asset('assets/images/page4_img3.jpg')}}" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <p class="text1">Holellentesq imperdiet</p>
            <p class="price">Sorem ipsum olor sit amety <span>From $ 499</span></p>
            <p class="price">Apendisse jow wligulawet <span>From $ 599</span></p>
            <a href="#" class="btn">Details</a>
          </div>
        </div>
      </div> -->
      <!-- <div class="grid_4 alpha">
        <div class="tour">
          <img src="{{URL::asset('assets/images/page4_img4.jpg')}}" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <p class="text1">Gellentesque imperdiet </p>
            <p class="price">Lorem ipsum dolor sit amet <span>From $ 399</span></p>
            <p class="price">Suspendisse jew wligulawe <span>From $ 299</span></p>
            <a href="#" class="btn">Details</a>
          </div>
        </div>
      </div> -->
      <!-- <div class="grid_4 alpha">
        <div class="tour">
          <img src="{{URL::asset('assets/images/page4_img5.jpg')}}" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <p class="text1">Fdaellensque perdiet </p>
            <p class="price">Gorem sum dolor sit met <span>From $ 399</span></p>
            <p class="price">Xuspendisse wew ligulawe <span>From $ 299</span></p>
            <a href="#" class="btn">Details</a>
          </div>
        </div>
      </div> -->
      <!-- <div class="grid_4 alpha">
        <div class="tour">
          <img src="{{URL::asset('assets/images/page4_img6.jpg')}}" alt="" class="img_inner fleft">
          <div class="extra_wrapper">
            <p class="text1">Mellentesquj mperdiete</p>
            <p class="price">Sorem ipsum olor sit amety<span> From $ 399</span></p>
            <p class="price">Suspendisse jew wligulawe <span>From $ 299</span></p>
            <a href="#" class="btn">Details</a>
          </div>
        </div>
      </div> -->
      </div>
    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding: 0">
      
      
        <h3>Search Tours</h3>
         
          <form method="post" action="{{URL::to('/pricesearch')}}">
           <label >
            <div><label for="startdatae">Start Date</label> <input id="startdatae" class="form-control" type="text" name="startdatae_search"></div>
            <div><label for="enddate">End Date</label> <input id="enddate" class="form-control" type="text" name="enddate_search"></div>
          </label>
              <label >
                <div>Country</div>
                <select name="country_search">
                <?php if (isset($country)): ?>
                  <?php foreach ($country as $value): ?>
                    <option>{{$value->name}}</option>
                  <?php endforeach ?>
                <?php endif ?>
                </select>
              </label>
              <label>
                <div>Price</div>
                  <input class="form-control" type="text" name="price_search_start">
                  <input class="form-control" type="text" name="price_search_end">
              </label>
              <div class="clear"></div>
             <input type="submit" name="submit_search" class="btn">
            </form> 
        </div>
        <div class="clear"></div>
      </div>
    </div>
</form>
@stop


