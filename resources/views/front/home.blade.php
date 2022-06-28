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

@include('front.partials.slider_section')
@include('front.partials.about_section')
@include('front.partials.services_section')
@include('front.partials.products_section')
@include('front.partials.contact_section')
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
@endsection


