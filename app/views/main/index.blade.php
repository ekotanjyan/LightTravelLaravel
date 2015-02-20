@extends('main.master')
@section('content')

<div class="destinations container-fluid" style="padding: 0; margin: 50px">

    <div class="destination_title container-fluid" style="padding: 0">
        <h3>Top Destinations</h3>
    </div>

    <div class="boxes container-fluid" style="padding: 0">

            <?php if (isset($top_img)): ?>
                <?php foreach ($top_img as $value): ?>

                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4" style="margin-top: 15px; margin-bottom: 15px;">
                        <figure style="max-width: 360px">
                            <div class="container-fluid" style="padding: 0; height: 330px !important; margin-left: 0px">
                                <img src="{{URL::asset('uploadtop/'.$value->img_url)}}" alt="" style="width: 100% !important; height: 100% !important"></div>
                            <figcaption>
                                <h3>{{$value->title}}</h3>
                                {{$value->text}}
                                <a href="" class="btn">Details</a>
                            </figcaption>
                        </figure>
                    </div>

                <?php endforeach ?>
            <?php endif ?>
    </div>


<div class="container-fluid" style="padding: 0">

    <div id="tabs" class="container-fluid" style="padding: 0">
        <ul class="container-fluid" style="padding: 0; margin-bottom: 0">
            <li><a href="#tabs-1">last Minute</a></li>
            <li><a href="#tabs-2">hot Deals</a></li>
            <li><a href="#tabs-3">All-Inclusive</a></li>
        </ul>


        <div class="tab_cont container-fluid" id="tabs-1" style="padding: 0">
            <div class="container-fluid" style="padding: 15px">
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="padding: 0">
                    <img src="{{URL::asset('assets/images/big1.jpg')}}" alt="" style="max-width: 180px">
                </div>
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="padding: 0">
                    <div class="extra_wrapper" style="padding: 15px">
                    <div class="text1">Rem psum dr sit amet. </div>
                    <p class="style1"><a class="" href="http://blog.templatemonster.com/free-website-templates/" rel="nofollow">Click here</a> for more info about this free website template created by TemplateMonster.com </p>
                    Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro.
                    <a href="#" class="btn">Details</a>
                    </div>
                </div>
            </div>

            <div class="container-fluid" style="padding: 15px">
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="padding: 0">
                    <img src="{{URL::asset('assets/images/big2.jpg')}}" alt="" style="max-width: 180px">
                </div>
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="padding: 0">
                    <div class="extra_wrapper" style="padding: 15px">
                        <div class="text1 tx1">Hem psuf abr sit dmety. </div>
                        Julla facilisi. Ut ut tincidunt lacus, ut auctor libero. Fuis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisi. Vestibulum eu eleifend metus, ut ornare nibh. Vestibulumul tincidunt interdum libero vitae faucibus. Gonec dapibus feugiate auctor. In ac dapibus lacus. Maecenas in pharetra mim asellus a sagittis dui, eu adipiscinget nisi.
                        <div class="clear"></div>
                        <a href="#" class="btn bt1">Details</a>
                    </div>
                </div>
                </div>
            </div>

        <div class="tab_cont container-fluid" id="tabs-2" style="padding: 0">
            <div class="container-fluid" style="padding: 15px">
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="padding: 0">
                    <img src="{{URL::asset('assets/images/big3.jpg')}}" alt="" style="max-width: 180px">
                </div>
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="padding: 0">
                    <div class="extra_wrapper" style="padding: 15px">
                        <div class="text1">Rem psum dr sit amet. </div>
                        <p class="style1"><a class="" href="" rel="nofollow">Click here</a> for more info about this free website template created by TemplateMonster.com </p>
                        Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro.
                        <a href="#" class="btn">Details</a>
                    </div>
                </div>
            </div>

            <div class="container-fluid" style="padding: 15px">
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="padding: 0">
                    <img src="{{URL::asset('assets/images/big4.jpg')}}" alt="" style="max-width: 180px">
                </div>
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="padding: 0">
                    <div class="extra_wrapper" style="padding: 15px">
                        <div class="text1 tx1">Hem psuf abr sit dmety. </div>
                        Julla facilisi. Ut ut tincidunt lacus, ut auctor libero. Fuis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisi. Vestibulum eu eleifend metus, ut ornare nibh. Vestibulumul tincidunt interdum libero vitae faucibus. Gonec dapibus feugiate auctor. In ac dapibus lacus. Maecenas in pharetra mim asellus a sagittis dui, eu adipiscinget nisi.
                        <div class="clear"></div>
                        <a href="#" class="btn bt1">Details</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab_cont container-fluid" id="tabs-3" style="padding: 0">
            <div class="container-fluid" style="padding: 15px">
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="padding: 0">
                    <img src="{{URL::asset('assets/images/big5.jpg')}}" alt="" style="max-width: 180px">
                </div>
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="padding: 0">
                    <div class="extra_wrapper" style="padding: 15px">
                        <div class="text1">Rem psum dr sit amet. </div>
                        <p class="style1"><a class="" href="http://blog.templatemonster.com/free-website-templates/" rel="nofollow">Click here</a> for more info about this free website template created by TemplateMonster.com </p>
                        Nulla facilisi. Ut ut tincidunt lacus, ut auctor libero. Duis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisiestibulum eutro.
                        <a href="#" class="btn">Details</a>
                    </div>
                </div>
            </div>

            <div class="container-fluid" style="padding: 15px">
                <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" style="padding: 0">
                    <img src="{{URL::asset('assets/images/big6.jpg')}}" alt="" style="max-width: 180px">
                </div>
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10" style="padding: 0">
                    <div class="extra_wrapper" style="padding: 15px">
                        <div class="text1 tx1">Hem psuf abr sit dmety. </div>
                        Julla facilisi. Ut ut tincidunt lacus, ut auctor libero. Fuis ommodo vel ipsum sed volutpat. Phasellus a sagittis dui, eu adipiscinget nisi. Vestibulum eu eleifend metus, ut ornare nibh. Vestibulumul tincidunt interdum libero vitae faucibus. Gonec dapibus feugiate auctor. In ac dapibus lacus. Maecenas in pharetra mim asellus a sagittis dui, eu adipiscinget nisi.
                        <div class="clear"></div>
                        <a href="#" class="btn bt1">Details</a>
                    </div>
                </div>
            </div>
        </div>

        </div>

    </div>

</div>



@stop



