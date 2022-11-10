@extends('layouts.front')

@section('meta')
    <!-- Primary Meta Tags -->
    <meta name="description" content="{{ $general->meta_desc }}">
    <meta name="keywords" content="{{ $general->keyword }}">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="127.0.0.1:8000">
    <meta property="og:title" content="{{ $general->title }}">
    <meta property="og:description" content="{{ $general->meta_desc }}">
    <meta property="og:image" content="{{ asset('storage/'.$general->favicon) }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="127.0.0.1:8000">
    <meta property="twitter:title" content="{{ $general->title }}">
    <meta property="twitter:description" content="{{ $general->meta_desc }}">
    <meta property="twitter:image" content="{{ asset('storage/'.$general->favicon) }}">

@endsection

@section('content')
{{--<body class="home page-template page-template-jungleworksHomeApr2021 page-template-jungleworksHomeApr2021-php page page-id-6 custom_class_p geo_SY US" style="">--}}

{{--<style>--}}
{{--.for-cookies-only .checkClose{position:absolute;width:25px;height:25px;border-radius:50% 0 50% 50%;background-color:#333;content:"x";color:#ffff;padding:0 9px;font-weight:600;right:0;top:0;font-size:18px;cursor:pointer}.for-cookies-only h3{color:#323B4B!important;font-size:12px!important;text-transform:none;line-height:1.85!important;margin:0;vertical-align:middle;font-weight:400!important;text-align:center}.for-cookies-only{position:fixed;bottom:0;background-color:#fafbfc;top:auto;border-bottom:1px solid #eee;padding:7px 15px;z-index:9999999}.for-cookies-only h3 .active,.for-cookies-only h3 a:focus,.for-cookies-only h3 a:hover{color:#333}.for-cookies-only h3 a.cookie-btn{border:1px solid #377DFF;float:none;margin-left:5px;font-size:12px;font-weight:600;padding: 4px 10px;}.for-cookies-only h3 a.cookie-btn:hover{background-color:#fff;color:#377DFF;border:1px solid #377DFF}.jw-moverpacker{background-position-y:788px}@media (max-width:1399px){.for-cookies-only h3 a.cookie-btn{float:none;text-align:center;margin:auto;display:inline-block;margin-left:5px}}@media(max-width:991px){.for-cookies-only{padding: 5px 0px;}.for-cookies-only h3 a.cookie-btn{margin: 5px 5px 0px;}}@media(max-width:420px){.for-cookies-only h3{line-height:1.4!important}}--}}
{{--</style>--}}
{{--<!-- Shortcodes -->--}}

{{--@include('front.partials.slider_section')--}}
{{--@include('front.partials.about_section')--}}
{{--@include('front.partials.services_section')--}}
{{--@include('front.partials.products_section')--}}
{{--@include('front.partials.contact_section')--}}
{{--<!-- Slider  -->--}}
{{--<div class="tp-banner-container">--}}
    {{--<div class="tp-banner">--}}
        {{--<ul>--}}
            {{--@foreach($banner as $banner)--}}
            {{--<!-- SLIDE ONE  -->--}}
            {{--<li data-transition="slotzoom-horizontal" data-slotamount="5" data-masterspeed="700">--}}
                {{--<!-- MAIN IMAGE -->--}}
                {{--<img src="{{ asset('storage/'.$banner->cover) }}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">--}}

                {{--<div class="tp-caption mediumlarge_light_white customin customout hidden-xs" data-x="center" data-hoffset="0" data-y="center" data-voffset="-50" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:400;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="1700" data-easing="Back.easeInOut" data-endeasing="Back.easeInOut" data-endspeed="1000" style="z-index: 11">{{$banner->title}}--}}
                {{--</div>--}}

                {{--<div class="tp-caption medium_light_white customin customout hidden-xs" data-x="center" data-hoffset="0" data-y="center" data-voffset="0" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:400;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="2000" data-easing="Back.easeInOut" data-endeasing="Back.easeInOut" data-endspeed="1000" style="z-index: 11">{{$banner->desc}}--}}
                {{--</div>--}}

                {{--<div class="tp-caption medium_light_black customin customout" data-x="center" data-hoffset="0" data-y="center" data-voffset="60" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;" data-customout="x:0;y:0;z:400;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-speed="1000" data-start="2300" data-easing="Back.easeInOut" data-endeasing="Back.easeInOut" data-endspeed="1000" style="z-index: 11">--}}
                    {{--<a href="{{$banner->link}}" class="btn btn-slider btn-lg">{{__('message.Show more')}}</a>--}}
                {{--</div>--}}

            {{--</li>--}}
                {{--@endforeach--}}

        {{--</ul>--}}
        {{--<div class="tp-bannertimer"></div>--}}
    {{--</div>--}}
{{--</div>--}}


<!-- PRODUCTS  -->
{{--<div class="container-fluid modul-bt-one">--}}
    {{--<div class="container modul-space-two">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="col-xs-12 col-md-8">--}}
                {{--<div class="advert-two-title">--}}
                    {{--<h1>{{__('message.Our Products')}}</h1>--}}
                    {{--<p>{{__('message.Our Products Desc')}}</p>--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="clearfix"></div>--}}
        {{--@foreach($product as $products)--}}
            {{--<!-- Services One -->--}}
                {{--<div class="col-xs-12 col-sm-12 col-md-3 mix mix_all ">--}}
                    {{--<div class="portlio-list" data-cat="1" style="  display: inline-block; opacity: 1;">--}}
                        {{--<div class="grid cs-style-2">--}}
                            {{--<figure>--}}
                                {{--<img src="{{ asset('storage/'.$products->cover) }}" class="portlio-list-img" alt="img04" width="50px" style="--}}
    {{--width: 500px;--}}
    {{--height: 250px;--}}
{{--">--}}
                                {{--<figcaption>--}}
                                    {{--<div class="image-buttons">--}}
{{--                                        <a data-toggle="modal" data-target="#view-portfolio-one" class="btn btn-primary">--}}
{{--                                            <i class="fa fa-camera"></i>--}}
{{--                                        </a>--}}
{{--                                        <a class="btn btn-primary">--}}
{{--                                            <i class="fa fa-plus"></i>--}}
{{--                                        </a>--}}
                                        {{--<h6>{{$products->link}}</h6>--}}
                                    {{--</div>--}}
                                {{--</figcaption>--}}
                            {{--</figure>--}}
                        {{--</div>--}}
                        {{--<a href="{{route('productshow',$products->name)}}" class="yeloIconBg">--}}
                            {{--<h6>{{$products->name}}</h6>--}}
                        {{--</a>--}}

                        {{--<p>--}}

                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
        {{--@endforeach--}}


        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Advert Module -->--}}
{{--<div class="container-fluid modul-bt-one parallax-one" data-speed="10" data-type="background">--}}
    {{--<div class="container modul-space-four">--}}
        {{--<div class="row">--}}

            {{--<div class="col-xs-12 col-md-6 hidden-md hidden-lg">--}}
                {{--<div class="advert-one-image">--}}
                    {{--<img src="{{ asset('front/images/theme/3.png') }}" alt="Advert" />--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-xs-12 col-md-6">--}}
                {{--<div class="advert-one">--}}
                    {{--<h2>{{__('message.Your best choice for e-commerce services')}}</h2>--}}
                    {{--<p class="advert-one-em">--}}
                        {{--{{__('message.Your best choice for e-commerce services. Let us help you to build and improve your Site and design especially.--}}
                        {{--Our team will develop your eCommerce From A to Z, with high security and great implemented, interactive, and mobile-friendly.')}}--}}

                    {{--</p>--}}
{{--                    <a class="btn btn-inverse advert-button-one">Trial Files</a>--}}
                    {{--<a class="btn btn-primary advert-button-one">{{__('message.Know more')}}</a>--}}

                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-xs-12 col-md-6 hidden-xs hidden-sm">--}}
                {{--<div class="advert-one-image" style="margin-top: 0px;">--}}
                    {{--<img src="{{ asset('front/images/theme/3.png') }}" alt="Advert" style="height: 250px;" />--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Portfolio  -->--}}
{{--<div class="container-fluid modul-bt-one">--}}
    {{--<div class="container modul-space-eight">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="col-xs-12 col-md-8">--}}
                {{--<div class="advert-two-title">--}}
                    {{--<h1>{{__('message.Featured Work Portfolio')}}</h1>--}}
                    {{--<p>{{__('message.Featured Work Portfolio desc')}}</p>--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="clearfix"></div>--}}
            {{--<!-- FILTER CONTROLS -->--}}
            {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
                {{--<div class="portfolio-filter-one controls">--}}
                    {{--<ul>--}}
                        {{--<li class="btn btn-primary filter active" data-filter="all">{{__('message.All')}}</li>--}}
                        {{--@foreach($pcategories as $pcategorie)--}}

                        {{--<li class="btn btn-primary filter" data-filter="{{$pcategorie->id}}">{{$pcategorie->name}}</li>--}}
                        {{--@endforeach--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<!-- PORTFOLIO LIST -->--}}
            {{--<div id="Grid">--}}
                {{--@foreach($portfolios as $portfolio)--}}
                    {{--<!-- One -->--}}
                    {{--<div class="col-xs-12 col-sm-12 col-md-4 mix {{$portfolio->pcategory_id}} mix_all ">--}}
                        {{--<div class="portlio-list" data-cat="1" style="  display: inline-block; opacity: 1;">--}}
                            {{--<div class="grid cs-style-2">--}}
                                {{--<figure>--}}
                                    {{--<img src="{{ asset('storage/'.$portfolio->cover) }}" class="portlio-list-img" alt="img04" width="50px" style="--}}
    {{--width: 500px;--}}
    {{--height: 350px;--}}
{{--">--}}
                                    {{--<figcaption>--}}
                                        {{--<div class="image-buttons">--}}
                                            {{--<a data-toggle="modal" data-target="#view-portfolio-one" class="btn btn-primary">--}}
                                                {{--<i class="fa fa-camera"></i>--}}
                                            {{--</a>--}}
                                            {{--<a class="btn btn-primary">--}}
                                                {{--<i class="fa fa-plus"></i>--}}
                                            {{--</a>--}}
                                        {{--</div>--}}
                                    {{--</figcaption>--}}
                                {{--</figure>--}}
                            {{--</div>--}}
                            {{--<h6>{{$portfolio->slug}}</h6>--}}
                            {{--<p>--}}
                                {{--@foreach($pcategories as $pcategorie)--}}
                                    {{--@if($pcategorie->id == $portfolio->pcategory_id)--}}
                                        {{--{{$pcategorie->name}}--}}
                                    {{--@endif--}}
                                {{--@endforeach--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<!-- One Modal Box -->--}}
                    {{--<div class="modal fade" id="view-portfolio-one" tabindex="-1" role="dialog" aria-hidden="true">--}}
                    {{--<div class="modal-dialog">--}}
                        {{--<div class="modal-content">--}}
                            {{--<div class="modal-header">--}}
                                {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
                                {{--<h4 class="modal-title">Portfolio Title</h4>--}}
                            {{--</div>--}}
                            {{--<div class="modal-body">--}}
                                {{--<img src="{{asset('front/images/theme/p1.jpg')}}" class="portlio-list-img" alt="img04">--}}
                            {{--</div>--}}
                            {{--<div class="modal-footer">--}}
                                {{--<a href="#fakelink" class="btn btn-default">--}}
                                    {{--<span class="fui-googleplus"></span>--}}
                                {{--</a>--}}
                                {{--<a href="#fakelink" class="btn btn-default">--}}
                                    {{--<span class="fui-facebook"></span>--}}
                                {{--</a>--}}
                                {{--<a href="#fakelink" class="btn btn-default">--}}
                                    {{--<span class="fui-twitter"></span>--}}
                                {{--</a>--}}
                                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--@endforeach--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Advert Module -->--}}
{{--<div class="container-fluid modul-bt-one parallax-two" data-speed="10" data-type="background">--}}
    {{--<div class="container modul-space-eight">--}}
        {{--<div class="row">--}}

            {{--<div class="col-xs-12 col-md-6">--}}
                {{--<div class="advert-two-image clearfix">--}}
                    {{--<img src="{{asset('front/images/theme/1.png')}}" alt="Advert"  />--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-xs-12 col-md-6">--}}
                {{--<div class="advert-one advert-phone mso-icon-seven-space">--}}
                    {{--<h1>{{__('message.Try the Remote Maintenance with us')}}</h1>--}}

                    {{--<!-- One -->--}}
                    {{--<div class="modul-services-two mso-icon-seven">--}}
                        {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-four-space pull-left">--}}
                            {{--<i class="fa fa-leaf fa-2x hi-icon"></i>--}}
                        {{--</div>--}}
                        {{--<p>--}}
                            {{--<strong>{{__('message.We offer E-marketing campaigns')}} </strong>--}}
                        {{--</p>--}}
                        {{--<p>{{__('message.at social media platforms or email-based')}} </p>--}}
{{--                        <p> , ,   </p>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                    {{--<!-- Two -->--}}
                    {{--<div class="modul-services-two mso-icon-seven">--}}
                        {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-four-space pull-left">--}}
                            {{--<i class="fa fa-plane fa-2x hi-icon"></i>--}}
                        {{--</div>--}}
                        {{--<p>--}}
                            {{--<strong>{{__('message.graphic design ,promoting videos')}}</strong>--}}
                        {{--</p>--}}
                        {{--<p>{{__('message.content marketing, and best SEO services..')}}</p>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                    {{--<!-- Three -->--}}
                    {{--<div class="modul-services-two mso-icon-seven">--}}
                        {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-four-space pull-left">--}}
                            {{--<i class="fa fa-comments fa-2x hi-icon"></i>--}}
                        {{--</div>--}}
                        {{--<p>--}}
                            {{--<strong>{{__('message.You should try remote maintenance')}}</strong>--}}
                        {{--</p>--}}
                        {{--<p>{{__('message.because this field is also trending in today’s world.')}}</p>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                    {{--<a class="btn btn-primary advert-button-seven">{{__('message.Know more')}}</a>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="clearfix"></div>--}}

{{--<!-- Advert Module -->--}}
{{--<div class="container-fluid modul-bt-one parallax-four" data-speed="10" data-type="background">--}}
    {{--<div class="container modul-space-eight">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="col-xs-12 col-md-8">--}}
                {{--<div class="advert-two-title">--}}
                    {{--<h1>{{__('message.Android App Development')}}</h1>--}}
                    {{--<p>{{__('message.Improve your business by using mobile apps because most of the internet traffic these days comes from mobile users. We can help you with our expertise app developers to succeed with your mobile strategy.')}}</p>--}}
{{--                    <a class="btn btn-inverse advert-button-nine">Pruchase</a>--}}
{{--                    <a class="btn btn-primary advert-button-nine">Download</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="clearfix"></div>--}}

            {{--<!-- Slider  -->--}}
            {{--<div class="tp-banner-container">--}}
                {{--<div class="tp-banner-two">--}}
                    {{--<ul>--}}
                        {{--<!-- SLIDE ONE  -->--}}
                        {{--<li data-transition="scaledownfrombottom" data-slotamount="5" data-masterspeed="700">--}}
                            {{--<!-- MAIN IMAGE -->--}}
                            {{--<img src="{{asset('front/images/theme/2.png')}}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">--}}

                            {{--<div class="tp-caption customin customout" data-x="right" data-y="top" data-customin="x:0;y:300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:200;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-start="400" data-speed="1000" data-easing="Expo.easeInOut" data-endspeed="1000" data-endeasing="Expo.easeInOut">--}}
                                {{--<img src="{{asset('front/images/theme/2.png')}}" alt="Slide" />--}}
                            {{--</div>--}}

                            {{--<div class="tp-caption customin customout" data-x="left" data-y="top" data-customin="x:0;y:300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:400;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-start="800" data-speed="1000" data-easing="Expo.easeInOut" data-endspeed="1000" data-endeasing="Expo.easeInOut">--}}
                                {{--<img src="{{asset('front/images/theme/3.png')}}" alt="Slide" />--}}
                            {{--</div>--}}

                            {{--<div class="tp-caption customin customout" data-x="center" data-y="top" data-customin="x:0;y:300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:600;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-start="0" data-speed="1000" data-easing="Expo.easeInOut" data-endspeed="1000" data-endeasing="Expo.easeInOut">--}}
                                {{--<img src="{{asset('front/images/theme/14.png')}}" alt="Slide" />--}}
                            {{--</div>--}}

                        {{--</li>--}}

                        {{--<!-- SLIDE TWO  -->--}}
                        {{--<li data-transition="scaledownfrombottom" data-slotamount="5" data-masterspeed="700">--}}
                            {{--<!-- MAIN IMAGE -->--}}
                            {{--<img src="{{asset('front/images/theme/3.png')}}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">--}}


                            {{--<div class="tp-caption customin customout" data-x="left" data-y="top" data-customin="x:0;y:300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:400;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-start="400" data-speed="1000" data-easing="Expo.easeInOut" data-endspeed="1000" data-endeasing="Expo.easeInOut">--}}
                                {{--<img src="{{asset('front/images/theme/2.png')}}" alt="Slide" />--}}
                            {{--</div>--}}

                            {{--<div class="tp-caption customin customout" data-x="right" data-y="top" data-customin="x:0;y:300;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-customout="x:0;y:200;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;" data-start="0" data-speed="1000" data-easing="Expo.easeInOut" data-endspeed="1000" data-endeasing="Expo.easeInOut">--}}
                                {{--<img src="{{asset('front/images/theme/5.png')}}" alt="Slide" />--}}
                            {{--</div>--}}

                        {{--</li>--}}

                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Advert Module -->--}}
{{--<div class="container-fluid modul-bt-one">--}}
    {{--<div class="container modul-space-eight">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="col-xs-12 col-md-8">--}}
                {{--<div class="advert-two-title">--}}
                    {{--<h1>{{__('message.Featured Product Options')}}</h1>--}}
                    {{--<p>{{__('message.Cras sed mauris augue. In at pellentesque sem. Vestibulum suscipit mi sodales tortor vehicula laoreet. Sed a purus vitae nisl sagittis consequat eget id velit.')}}</p>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="clearfix"></div>--}}

            {{--<div class="col-xs-12 col-md-4 clearfix hidden-lg hidden-md">--}}
                {{--<div class="advert-big-image modul-phone-four">--}}
                    {{--<img src="{{asset('front/images/theme/2.png')}}" alt="Image" />--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-xs-12 col-md-4 clearfix">--}}
                {{--<!-- One -->--}}
                {{--<div class="modul-services-three mso-icon-eight">--}}
                    {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space pull-right">--}}
                        {{--<i class="fa fa-bell hi-icon"></i>--}}
                    {{--</div>--}}
                    {{--<h6>{{__('message.Rutrum Malesuada')}}</h6>--}}
                    {{--<p>{{__('message.Cras eget mattis justo. Fusce eget viendose commodo enim.')}}</p>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
                {{--<!-- One -->--}}
                {{--<div class="modul-services-three mso-icon-eight">--}}
                    {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space pull-right">--}}
                        {{--<i class="fa fa-thumbs-up hi-icon"></i>--}}
                    {{--</div>--}}
                    {{--<h6>{{__('message.Amet Pellen')}}</h6>--}}
                    {{--<p>{{__('message.Cras eget mattis justo. Fusce eget viendose commodo enim1.')}}</p>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
                {{--<!-- One -->--}}
                {{--<div class="modul-services-three mso-icon-eight">--}}
                    {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space pull-right">--}}
                        {{--<i class="fa fa-camera hi-icon"></i>--}}
                    {{--</div>--}}
                    {{--<h6>{{__('message.Sed Placerat Justo')}}</h6>--}}
                    {{--<p>{{__('message.Cras eget mattis justo. Fusce eget viendose commodo enim2.')}}</p>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}

            {{--</div>--}}

            {{--<div class="col-xs-12 col-md-4 clearfix hidden-sm hidden-xs">--}}
                {{--<div class="advert-big-image">--}}
                    {{--<img src="{{asset('front/images/theme/2.png')}}" alt="Image" />--}}
                {{--</div>--}}
            {{--</div>--}}

            {{--<div class="col-xs-12 col-md-4 clearfix">--}}
                {{--<!-- One -->--}}
                {{--<div class="modul-services-two mso-icon-eight">--}}
                    {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space pull-left">--}}
                        {{--<i class="fa fa-flask hi-icon"></i>--}}
                    {{--</div>--}}
                    {{--<h6>{{__('message.Fusce Nunc Tellus')}}</h6>--}}
                    {{--<p>{{__('message.Cras eget mattis justo. Fusce eget viendose commodo enim3.')}}</p>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
                {{--<!-- One -->--}}
                {{--<div class="modul-services-two mso-icon-eight">--}}
                    {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space pull-left">--}}
                        {{--<i class="fa fa-heart hi-icon"></i>--}}
                    {{--</div>--}}
                    {{--<h6>{{__('message.Etiam Sodales Justo')}}</h6>--}}
                    {{--<p>{{__('message.Cras eget mattis justo. Fusce eget viendose commodo enim4.')}}</p>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}
                {{--<!-- One -->--}}
                {{--<div class="modul-services-two mso-icon-eight">--}}
                    {{--<div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space pull-left">--}}
                        {{--<i class="fa fa-gift hi-icon"></i>--}}
                    {{--</div>--}}
                    {{--<h6>{{__('message.Aliquam Tempor')}}</h6>--}}
                    {{--<p>{{__('message.Cras eget mattis justo. Fusce eget viendose commodo enim5.')}}</p>--}}
                {{--</div>--}}
                {{--<div class="clearfix"></div>--}}

            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


{{--<!-- Blog Module -->--}}
{{--<div class="container-fluid modul-bt-one">--}}
    {{--<div class="container modul-space-twelve">--}}
        {{--<div class="row">--}}

            {{--<div class="col-md-2"></div>--}}
            {{--<div class="col-xs-12 col-md-8">--}}
                {{--<div class="advert-two-title">--}}
                    {{--<h1>{{__('message.News and Blog Post')}}</h1>--}}
                    {{--<p>{{__('message.Cras sed mauris augue. In at pellentesque sem. Vestibulum suscipit mi sodales tortor vehicula laoreet. Sed a purus vitae nisl sagittis consequat eget id velit1.')}}</p>--}}
                    {{--<a id="showbiz_left_7" href="#" class="btn btn-primary blog-nav-button-two">--}}
                        {{--<i class="fa fa-chevron-left"></i>--}}
                    {{--</a>--}}
                    {{--<a id="showbiz_right_7" href="#" class="btn btn-primary blog-nav-button-two">--}}
                        {{--<i class="fa fa-chevron-right"></i>--}}
                    {{--</a>--}}

                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="clearfix"></div>--}}

            {{--<div class="col-xs-12 col-md-12">--}}
                {{--<div class="blog-slider-container clearfix">--}}
                    {{--<div id="example7" class="showbiz-container">--}}
                        {{--<div class="showbiz" data-left="#showbiz_left_7" data-right="#showbiz_right_7">--}}
                            {{--<div class="overflowholder">--}}
                                {{--<ul>--}}
                                    {{--@foreach($lpost as $lposts)--}}
                                    {{--<li>--}}
                                        {{--<div class="blog-slider">--}}

                                            {{--<div class="grid cs-style-3">--}}
                                                {{--<figure>--}}
                                                    {{--<div class="blog-date-circle">--}}
                                                        {{--<h5>22</h5>--}}
                                                        {{--<p>Jan</p>--}}
                                                    {{--</div>--}}
                                                    {{--<img src="{{ asset('storage/'.$lposts->cover) }}" class="blog-slider-list-img" alt="img04">--}}
                                                    {{--<figcaption>--}}
                                                        {{--<div class="image-buttons-three">--}}
                                                            {{--<a data-toggle="modal" data-target="#view-portfolio-one" class="btn btn-primary">--}}
                                                                {{--<i class="fa fa-camera"></i>--}}
                                                            {{--</a>--}}
                                                            {{--<a class="btn btn-primary">--}}
                                                                {{--<i class="fa fa-plus"></i>--}}
                                                            {{--</a>--}}
                                                        {{--</div>--}}
                                                    {{--</figcaption>--}}
                                                {{--</figure>--}}
                                            {{--</div>--}}
                                            {{--<div class="blog-slider-list">--}}
                                                {{--<h6>{{$lposts->title}}</h6>--}}
                                                {{--<p>{!!$lposts->body  !!}</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</li>--}}
                                    {{--@endforeach--}}
                                {{--</ul>--}}
                                {{--<div class="sbclear"></div>--}}
                            {{--</div>--}}
                            {{--<div class="sbclear"></div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}

{{--<!-- Advert Module -->--}}
{{--<div class="container-fluid modul-bt-one parallax-five" data-speed="20" data-type="background">--}}
    {{--<div class="container modul-space-seven">--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="col-xs-12 col-md-8">--}}
                {{--<div class="advert-two-title">--}}
                    {{--<h1>{{__('message.Think Smart')}}</h1>--}}
                    {{--<p>--}}
                        {{--<span class="font-weight-bold">{{__('message.Yes Soft ')}}</span>--}}
                        {{--{{__('message.is an ecommerce specialized software company located in Berlin/ Germany. It adopts open-source methodology. All its projects’ codes are available on Github.--}}
                        {{--Its team consists of developers, designers, content makers, testers and team managers. They work together remotely and results are always great.')}}--}}
                        {{--<br>{{__('message.They use up-to-date technologies to bring your imaginary requirements to reality.--}}
                        {{--Are you still hesitated about the company? Why don\'t you check out ISHTAR ART to evaluate everything by yourself?')}}</p></div>--}}
            {{--</div>--}}
            {{--<div class="col-md-2"></div>--}}
            {{--<div class="clearfix"></div>--}}
            {{--<!-- One -->--}}
            {{--<div class="col-md-12 clearfix">--}}
                {{--<div class="advert-big-image">--}}
                    {{--<img src="{{asset('front/images/theme/14.png')}}" alt="Image" />--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


{{--<div class="bottom-menu bottom-menu-inverse"></div>--}}
{{--</body>--}}
<!-- HERO -->
<div class="waxon_tm_hero" id="home">
    <div class="background">
        <div class="leftpart"></div>
        <div class="rightpart">
            <div class="inner">
                <div class="image" data-img-url="{{asset('front/img/about/acacia-tree.jpg')}}"></div>
                <div class="overlay_image"></div>
                <div class="myOverlay"></div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <div class="content_inner">
                <div class="name"> <!-- If you can't see clearly your texts with hero image, please open style.css and search this word " .waxon_tm_hero .background .overlay_image " with CTRL+F and enable comment -->
                    <h3 class="stroke">Acacia</h3>
                    <h3>General</h3>
                    <span style="color:#000;font-size: 25px;">Trading</span>
                </div>
            </div>
            <div class="waxon_tm_down" data-skin="dark" data-position="">  <!-- Skin: "", dark -->  <!-- Position: left, center, right -->
                <div class="line_wrapper">
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /HERO -->

<!-- ABOUT -->
<div class="waxon_tm_about" id="about">
    <div class="container">
        <div class="about_inner">
            <div class="left">
                <h1 class="title-heading">About<h1>
                        <img class="thumbnail" src="{{asset('front/img/about/ABOUT.png')}}" alt="" />
                        <!-- Animation Image classes: thumbnail, thumbnail-2, thumbnail-3, thumbnail-4,-->
            </div>
            <div class="right">
                <div class="name">
                    <h3>Acacia<span class="bg">About</span></h3>
                    <span class="job">General Trading</span>
                </div>
                <div class="text">
                    <p>Acacia General Trading Company was established in August 2021, in Sharjah Media City, Free Zone (Shams), and the name Acacia was chosen to be appropriate and consistent with the company’s various forms and activities, and in line with the requirements of our time and to be more sustainable, as the acacia tree that was named The name of the company was taken from it, as it is a rich and diverse source for the production of the necessary resources for use in our daily lives, so the name came to be more compatible with the multiplicity of the company's activities and more sustainable.</p>
                </div>
                <div class="waxon_tm_button" data-position="left">  <!-- Position: left, center, right -->
                    <a href="#">
                        <span>Learn More</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /ABOUT -->

<!-- SERVICES -->
<div class="waxon_tm_service">
    <div class="container">
        <div class="service_inner">
            <ul class="owl-carousel">
                @foreach($services as $service)
                <li class="item">
                    <div class="list_inner">
                        <img class="svg" src="{{asset('front/img/svg/code.svg')}}" alt="" />
                        <div class="details">
                            <h3>{{$service->title}}</h3>
                            <p>{{$service->quote}}</p>
                        </div>
                    </div>
                </li>
               @endforeach
            </ul>
        </div>
    </div>
</div>
<!-- /SERVICES -->

<!-- PORTFOLIO -->
<div class="waxon_tm_portoflio" id="portfolio">
    <div class="container">
        <div class="waxon_tm_main_title">
            <h1 class="title-heading">Portfolio<h1>
                    <div class="title">
                        <h3>Featured Works<span class="bg">Portfolio</span></h3>
                    </div>
                    <div class="portfolio_filter">
                        <ul>
                            <li>
                                <a href="#" class="current" data-filter="*">
                                    <span class="first">All</span>
                                    <span class="second">All</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-filter=".vimeo">
                                    <span class="first">Vimeo</span>
                                    <span class="second">Vimeo</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-filter=".youtube">
                                    <span class="first">Youtube</span>
                                    <span class="second">Youtube</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-filter=".soundcloud">
                                    <span class="first">Soundcloud</span>
                                    <span class="second">Soundcloud</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-filter=".image">
                                    <span class="first">Image</span>
                                    <span class="second">Image</span>
                                </a>
                            </li>
                        </ul>
                        <div class="wrapper">
                            <a href="#"><span class="trigger"></span></a>
                        </div>
                    </div>
        </div>
        <div class="portfolio_inner">
            <ul class="gallery_zoom" id="portfo" data-number="6">
                <li class="vimeo">
                    <div class="list_inner">
                        <div class="image">
                            <img src="{{asset('front/img/thumbs/1-1.jpg')}}" alt="" />
                            <div class="main" data-img-url="{{asset('front/img/about/trade.jpg')}}"></div>
                            <a class="full_link popup-vimeo" href="https://vimeo.com/312334044"></a>
                        </div>
                        <div class="title">
                            <h3><a href="#">Sweet Cherry</a></h3>
                            <span><a href="#">Vimeo</a></span>
                        </div>
                    </div>
                </li>
                <li class="youtube">
                    <div class="list_inner">
                        <div class="image">
                            <img src="{{asset('front/img/about/acacia-tree.jpg')}}img/thumbs/1-1.jpg" alt="" />
                            <div class="main" data-img-url="{{asset('front/img/about/trade.jpg')}}"></div>
                            <a class="full_link popup-youtube" href="https://www.youtube.com/watch?v=Amq-qlqbjYA"></a>
                        </div>
                        <div class="title">
                            <h3><a href="#">Delicious Fruit</a></h3>
                            <span><a href="#">Youtube</a></span>
                        </div>
                    </div>
                </li>
                <li class="soundcloud">
                    <div class="list_inner">
                        <div class="image">
                            <img src="{{asset('front/img/about/acacia-tree.jpg')}}img/thumbs/1-1.jpg" alt="" />
                            <div class="main" data-img-url="{{asset('front/img/about/trade.jpg')}}"></div>
                            <a class="full_link soundcloude_link mfp-iframe audio" href="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/252739311&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=truehttps://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/252739311&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></a>
                        </div>
                        <div class="title">
                            <h3><a href="#">Blue Lemon</a></h3>
                            <span><a href="#">Soundcloud</a></span>
                        </div>
                    </div>
                </li>
                <li class="image">
                    <div class="list_inner">
                        <div class="image">
                            <img src="{{asset('front/img/thumbs/1-1.jpg')}}" alt="" />
                            <div class="main" data-img-url="{{asset('front/img/about/trade.jpg')}}"></div>
                            <a class="full_link zoom" href="{{asset('front/img/portfolio/4.jpg')}}"></a>
                        </div>
                        <div class="title">
                            <h3><a href="#">Yellow Phone</a></h3>
                            <span><a href="#">Image</a></span>
                        </div>
                    </div>
                </li>
                <li class="image">
                    <div class="list_inner">
                        <div class="image">
                            <img src="{{asset('front/img/thumbs/1-1.jpg')}}" alt="" />
                            <div class="main" data-img-url="{{asset('front/img/about/trade.jpg')}}"></div>
                            <a class="full_link zoom" href="{{asset('front/img/portfolio/5.jpg')}}"></a>
                        </div>
                        <div class="title">
                            <h3><a href="#">Ice Cream</a></h3>
                            <span><a href="#">Image</a></span>
                        </div>
                    </div>
                </li>
                <li class="image">
                    <div class="list_inner">
                        <div class="image">
                            <img src="{{asset('front/img/thumbs/1-1.jpg')}}" alt="" />
                            <div class="main" data-img-url="{{asset('front/img/about/acacia-tree.jpg')}}img/about/trade.jpg"></div>
                            <a class="full_link zoom" href="{{asset('front/img/about/acacia-tree.jpg')}}img/portfolio/6.jpg"></a>
                        </div>
                        <div class="title">
                            <h3><a href="#">Good Present</a></h3>
                            <span><a href="#">Image</a></span>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="waxon_tm_button" data-position="center" id="show-portfolio" style="margin-bottom: 10px;">
                <a>
                    <span>Show More</span>
                </a>
            </div>
            <div class="waxon_tm_button" data-position="center" id="hide-portfolio">
                <a>
                    <span>Show Less</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /PORTFOLIO -->

<!-- TESTIMONIALS -->
<div class="waxon_tm_testimonials">
    <div class="container">
        <div class="waxon_tm_main_title">
            <div class="title">
                <h3>What Clients Say<span class="bg">Testimonial</span></h3>
            </div>
        </div>
        <div class="testi_inner">
            <div class="left">
                <div class="quote_list">
                    <ul>
                        <li class="active">
                            <img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/quote-1.svg" alt="" />
                            <p class="text">Good overall template. I am getting back into coding and had a simple question for the author. They responded within 30 minutes and answered my question. Highly recommend.</p>
                            <div class="details">
                                <div class="image">
                                    <div class="main" data-img-url="{{asset('front/img/about/acacia-tree.jpg')}}img/about/testi1.png"></div>
                                </div>
                                <div class="short">
                                    <h3 class="author"><span>Nelly Furtado</span></h3>
                                    <h3 class="job"><span>App Developer</span></h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/quote-1.svg" alt="" />
                            <p class="text">I can't believe I got support and my problem resolved in just minutes from posting my question. Simply amazing team and amazing theme! Thank you very much guys for excellent support! </p>
                            <div class="details">
                                <div class="image">
                                    <div class="main" data-img-url="img/about/testi1.png"></div>
                                </div>
                                <div class="short">
                                    <h3 class="author"><span>Brian Ederson</span></h3>
                                    <h3 class="job"><span>Web Designer</span></h3>
                                </div>
                            </div>
                        </li>
                        <li>
                            <img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/quote-1.svg" alt="" />
                            <p class="text">Awesome template, well written code and looks great on any platform. The customer support is very helpful and as huge asset to this template. Overall a good design, that I am quite happy with.</p>
                            <div class="details">
                                <div class="image">
                                    <div class="main" data-img-url="{{asset('front/img/about/acacia-tree.jpg')}}img/about/testi1.png"></div>
                                </div>
                                <div class="short">
                                    <h3 class="author"><span>Steve Collins</span></h3>
                                    <h3 class="job"><span>Artel Corp.</span></h3>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <div class="image_list">
                    <ul class="masonry">
                        <li class="active masonry_item">
                            <div class="image">
                                <img src="{{asset('front/img/about/acacia-tree.jpg')}}img/thumbs/3-4.jpg" alt="" />
                                <div class="main" data-img-url="img/about/testi1.png"></div>
                            </div>
                        </li>
                        <li class="masonry_item">
                            <div class="image">
                                <img src="{{asset('front/img/about/acacia-tree.jpg')}}img/thumbs/4-3.jpg" alt="" />
                                <div class="main" data-img-url="img/about/testi2.png"></div>
                            </div>
                        </li>
                        <li class="masonry_item">
                            <div class="image">
                                <img src="{{asset('front/img/about/acacia-tree.jpg')}}img/thumbs/1-1.jpg" alt="" />
                                <div class="main" data-img-url="{{asset('front/img/about/acacia-tree.jpg')}}img/about/testi2.png"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /TESTIMONIALS -->

<!-- NEWS -->
<div class="waxon_tm_news" id="news">
    <div class="container">
        <div class="waxon_tm_main_title">
            <div class="title">
                <h3>Latest News<span class="bg">News</span></h3>
            </div>
        </div>
        <div class="news_inner">
            <ul id="blogs" data-number="9">
                <li class="wow fadeInDown" data-wow-duration="0.8s">
                    <div class="list_inner">
                        <div class="image">
                            <img src="{{asset('front/img/about/acacia-tree.jpg')}}img/thumbs/4-3.jpg" alt="" />
                            <div class="main" data-img-url="img/about/news.png"></div>
                            <a class="full_link" href="#"></a>
                        </div>
                        <div class="details">
                            <div class="extra">
                                <p class="date">By <a href="#">Alex Watson</a> <span>10 May 2021</span></p>
                            </div>
                            <h3 class="title"><a href="#">Developers watch out for these burnout symptoms</a></h3>
                        </div>
                        <div class="main_content">
                            <div class="descriptions">
                                <p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
                                <p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
                                <p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
                                <div class="quotebox">
                                    <div class="icon">
                                        <img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/quote.svg" alt="" />
                                    </div>
                                    <p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
                                </div>
                                <p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
                                <p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
                            </div>
                            <div class="news_share">
                                <span>Share:</span>
                                <ul>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/facebook.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/twitter.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/instagram.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/dribbble.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/tik-tok.svg"  alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="list_inner">
                        <div class="image">
                            <img src="{{asset('front/img/about/acacia-tree.jpg')}}img/thumbs/4-3.jpg" alt="" />
                            <div class="main" data-img-url="img/about/news.png"></div>
                            <a class="full_link" href="#"></a>
                        </div>
                        <div class="details">
                            <div class="extra">
                                <p class="date">By <a href="#">Bona Green</a> <span>05 April 2021</span></p>
                            </div>
                            <h3 class="title"><a href="#">How to be appreciated for your hard work as a developer </a></h3>
                        </div>
                        <div class="main_content">
                            <div class="descriptions">
                                <p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
                                <p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
                                <p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
                                <div class="quotebox">
                                    <div class="icon">
                                        <img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/quote.svg" alt="" />
                                    </div>
                                    <p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
                                </div>
                                <p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
                                <p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
                            </div>
                            <div class="news_share">
                                <span>Share:</span>
                                <ul>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/facebook.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/twitter.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/instagram.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/dribbble.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/tik-tok.svg"  alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <div class="list_inner">
                        <div class="image">
                            <img src="{{asset('front/img/about/acacia-tree.jpg')}}img/thumbs/4-3.jpg" alt="" />
                            <div class="main" data-img-url="img/about/news.png"></div>
                            <a class="full_link" href="#"></a>
                        </div>
                        <div class="details">
                            <div class="extra">
                                <p class="date">By <a href="#">Ave Smith</a> <span>22 March 2021</span></p>
                            </div>
                            <h3 class="title"><a href="#">How designers and developers can collaborate better</a></h3>
                        </div>
                        <div class="main_content">
                            <div class="descriptions">
                                <p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
                                <p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
                                <p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
                                <div class="quotebox">
                                    <div class="icon">
                                        <img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/quote.svg" alt="" />
                                    </div>
                                    <p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
                                </div>
                                <p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
                                <p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
                            </div>
                            <div class="news_share">
                                <span>Share:</span>
                                <ul>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/facebook.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/twitter.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/instagram.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/dribbble.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/tik-tok.svg"  alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="wow fadeInDown" data-wow-duration="0.8s">
                    <div class="list_inner">
                        <div class="image">
                            <img src="{{asset('front/img/about/acacia-tree.jpg')}}img/thumbs/4-3.jpg" alt="" />
                            <div class="main" data-img-url="img/about/news.png"></div>
                            <a class="full_link" href="#"></a>
                        </div>
                        <div class="details">
                            <div class="extra">
                                <p class="date">By <a href="#">Alex Watson</a> <span>10 May 2021</span></p>
                            </div>
                            <h3 class="title"><a href="#">Developers watch out for these burnout symptoms</a></h3>
                        </div>
                        <div class="main_content">
                            <div class="descriptions">
                                <p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
                                <p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
                                <p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
                                <div class="quotebox">
                                    <div class="icon">
                                        <img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/quote.svg" alt="" />
                                    </div>
                                    <p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
                                </div>
                                <p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
                                <p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
                            </div>
                            <div class="news_share">
                                <span>Share:</span>
                                <ul>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/facebook.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/twitter.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/instagram.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/dribbble.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/tik-tok.svg"  alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="list_inner">
                        <div class="image">
                            <img src="{{asset('front/img/about/acacia-tree.jpg')}}img/thumbs/4-3.jpg" alt="" />
                            <div class="main" data-img-url="{{asset('front/img/about/acacia-tree.jpg')}}img/about/news.png"></div>
                            <a class="full_link" href="#"></a>
                        </div>
                        <div class="details">
                            <div class="extra">
                                <p class="date">By <a href="#">Bona Green</a> <span>05 April 2021</span></p>
                            </div>
                            <h3 class="title"><a href="#">How to be appreciated for your hard work as a developer </a></h3>
                        </div>
                        <div class="main_content">
                            <div class="descriptions">
                                <p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
                                <p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
                                <p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
                                <div class="quotebox">
                                    <div class="icon">
                                        <img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/quote.svg" alt="" />
                                    </div>
                                    <p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
                                </div>
                                <p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
                                <p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
                            </div>
                            <div class="news_share">
                                <span>Share:</span>
                                <ul>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/facebook.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/twitter.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/instagram.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/dribbble.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/tik-tok.svg"  alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <div class="list_inner">
                        <div class="image">
                            <img src="{{asset('front/img/about/acacia-tree.jpg')}}img/thumbs/4-3.jpg" alt="" />
                            <div class="main" data-img-url="img/about/news.png"></div>
                            <a class="full_link" href="#"></a>
                        </div>
                        <div class="details">
                            <div class="extra">
                                <p class="date">By <a href="#">Ave Smith</a> <span>22 March 2021</span></p>
                            </div>
                            <h3 class="title"><a href="#">How designers and developers can collaborate better</a></h3>
                        </div>
                        <div class="main_content">
                            <div class="descriptions">
                                <p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
                                <p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
                                <p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
                                <div class="quotebox">
                                    <div class="icon">
                                        <img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/quote.svg" alt="" />
                                    </div>
                                    <p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
                                </div>
                                <p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
                                <p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
                            </div>
                            <div class="news_share">
                                <span>Share:</span>
                                <ul>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/facebook.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/twitter.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/instagram.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/dribbble.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/tik-tok.svg"  alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="wow fadeInDown" data-wow-duration="0.8s">
                    <div class="list_inner">
                        <div class="image">
                            <img src="{{asset('front/img/about/acacia-tree.jpg')}}img/thumbs/4-3.jpg" alt="" />
                            <div class="main" data-img-url="img/about/news.png"></div>
                            <a class="full_link" href="#"></a>
                        </div>
                        <div class="details">
                            <div class="extra">
                                <p class="date">By <a href="#">Alex Watson</a> <span>10 May 2021</span></p>
                            </div>
                            <h3 class="title"><a href="#">Developers watch out for these burnout symptoms</a></h3>
                        </div>
                        <div class="main_content">
                            <div class="descriptions">
                                <p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
                                <p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
                                <p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
                                <div class="quotebox">
                                    <div class="icon">
                                        <img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/quote.svg" alt="" />
                                    </div>
                                    <p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
                                </div>
                                <p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
                                <p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
                            </div>
                            <div class="news_share">
                                <span>Share:</span>
                                <ul>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/facebook.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/twitter.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/instagram.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/dribbble.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/tik-tok.svg"  alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="list_inner">
                        <div class="image">
                            <img src="{{asset('front/img/about/acacia-tree.jpg')}}img/thumbs/4-3.jpg" alt="" />
                            <div class="main" data-img-url="img/about/news.png"></div>
                            <a class="full_link" href="#"></a>
                        </div>
                        <div class="details">
                            <div class="extra">
                                <p class="date">By <a href="#">Bona Green</a> <span>05 April 2021</span></p>
                            </div>
                            <h3 class="title"><a href="#">How to be appreciated for your hard work as a developer </a></h3>
                        </div>
                        <div class="main_content">
                            <div class="descriptions">
                                <p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
                                <p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
                                <p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
                                <div class="quotebox">
                                    <div class="icon">
                                        <img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/quote.svg" alt="" />
                                    </div>
                                    <p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
                                </div>
                                <p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
                                <p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
                            </div>
                            <div class="news_share">
                                <span>Share:</span>
                                <ul>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/facebook.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/twitter.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/instagram.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/dribbble.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/tik-tok.svg"  alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <div class="list_inner">
                        <div class="image">
                            <img src="{{asset('front/img/about/acacia-tree.jpg')}}img/thumbs/4-3.jpg" alt="" />
                            <div class="main" data-img-url="img/about/news.png"></div>
                            <a class="full_link" href="#"></a>
                        </div>
                        <div class="details">
                            <div class="extra">
                                <p class="date">By <a href="#">Ave Smith</a> <span>22 March 2021</span></p>
                            </div>
                            <h3 class="title"><a href="#">How designers and developers can collaborate better</a></h3>
                        </div>
                        <div class="main_content">
                            <div class="descriptions">
                                <p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>
                                <p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>
                                <p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>
                                <div class="quotebox">
                                    <div class="icon">
                                        <img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/quote.svg" alt="" />
                                    </div>
                                    <p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>
                                </div>
                                <p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>
                                <p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>
                            </div>
                            <div class="news_share">
                                <span>Share:</span>
                                <ul>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/facebook.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src={{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/twitter.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/instagram.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/dribbble.svg" alt="" /></a></li>
                                    <li><a href="#"><img class="svg" src="{{asset('front/img/about/acacia-tree.jpg')}}img/svg/social/tik-tok.svg"  alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="waxon_tm_button" data-position="center" id="show-blog" style="margin-bottom: 10px;">
                <a>
                    <span>Show More</span>
                </a>
            </div>
            <div class="waxon_tm_button" data-position="center" id="hide-blog">
                <a>
                    <span>Show Less</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- /NEWS -->

<!-- CONTACT -->
<div class="waxon_tm_contact" id="contact">
    <div class="bg_image"></div>
    <div class="container">
        <div class="contact_inner">
            <div class="waxon_tm_main_title">
                <div class="title">
                    <h3>Get in Touch<span class="bg">Contact</span></h3>
                </div>
            </div>
            <div class="desc">
                <p>Please fill out the form on this section to contact with me. Or call between 9:00 a.m. and 8:00 p.m. ET, Monday through Friday</p>
            </div>
            <div class="wrapper">
                <div class="left wow fadeInLeft" data-wow-duration="0.8s">
                    <div class="fields">
                        <form action="/" method="post" class="contact_form" id="contact_form" autocomplete="off">
                            <div class="returnmessage" data-success="Your message has been received, We will contact you soon."></div>
                            <div class="empty_notice"><span>Please Fill Required Fields</span></div>
                            <div class="first">
                                <ul>
                                    <li>
                                        <input id="name" type="text" placeholder="Name">
                                    </li>
                                    <li>
                                        <input id="email" type="text" placeholder="Email">
                                    </li>
                                </ul>
                            </div>
                            <div class="last">
                                <textarea id="message" placeholder="Message"></textarea>
                            </div>
                            <div class="waxon_tm_button" data-position="left">
                                <a id="send_message" href="#">
                                    <span>Send Message</span>
                                </a>
                            </div>

                            <!-- If you want to change mail address to yours, please open modal.php and go to line 4 -->

                        </form>
                    </div>
                </div>
                <div class="right wow fadeInRight" data-wow-duration="0.8s">
                    <div class="map_wrap">
                        <div class="map" id="ieatmaps"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /CONTACT -->
@endsection


