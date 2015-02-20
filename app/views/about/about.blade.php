@extends('main.master')
<!--==============================header=================================-->
 
<!--=======content================================-->

@section('about_content')

<div class="agency_profile container-fluid" style="margin: 50px; padding: 0">

    <div class=" col-xs-12 col-sm-9 col-md-9 col-lg-9" style="padding: 0">

        <?php if (isset($about)): ?>

            <h3 class="agency_profile">{{$about->title}}</h3>

            <div class="img_div"><img src="file:///C:/Users/WebTech%20Systems/Desktop/LightTravel/images/page2_img1.jpg" alt="" class="img_inner left"></div>
            <p>{{$about->text}}</p>
            <p>{{$about->full_text}}</p>
            <div class="clear"></div>
        <?php endif ?>

    </div>
    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" style="padding: 0">

        <h3 style="text-align: center">Our Principles</h3>
        <ul class="list1">
            <li>
                <div class="count">1</div>
                <div class="extra_wrapper">
                    <div class="text1"><a href="#">Pellentesque imperdiet. </a></div>
                    <p> Quisque sed quam justo. Nulla kilor congue sed turpis nec lacinia. Nulla facilisi. Ut sit amet gravida telluswil. Morbi id consequat erosivamus.</p>
                </div>
            </li>
            <li>
                <div class="count">2</div>
                <div class="extra_wrapper">
                    <div class="text1"><a href="#">Aellentesque omperdie. </a></div>
                    <p> Fuisque sed quam justo. Cngueteri sed turpis nec lacinia. Nulla facilisi. Ut sit amet gravida tellus. Morbi idy consequat eros. Vivamus imperdiet </p>
                </div>
            </li>
            <li>
                <div class="count">3</div>
                <div class="extra_wrapper">
                    <div class="text1"><a href="#">Grellentesque imperdik. </a></div>
                    <p> Yisque sed quam justo. Nullaongue sed turpis nec lacinia. Julla facilisi. Ut sit amet gravida tellus. Morbi idy consequat erosamus imperdiet. </p>
                </div>
            </li>
        </ul>

    </div>

</div>




@stop
