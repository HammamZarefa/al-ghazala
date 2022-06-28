<!DOCTYPE html>
<html lang="ar" dir="{{Lang::locale() == 'en' ? 'ltr' : 'rtl'}}">


<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $general->title }}</title>
    <meta content="{{ $general->meta_desc }}" name="description">
    <meta content="{{ $general->keyword }}" name="keywords">
    {{--<link href="{{ asset('front/css/style.css') }}" rel="stylesheet">--}}
    <!-- Favicons -->
    <link href="{{ asset('storage/'.$general->favicon) }}" rel="icon">
    <link href="{{ asset('storage/'.$general->favicon) }}" rel="apple-touch-icon">
    {{--<link href="{{asset('front/bootstrap/css/bootstrap.css')}}" rel="stylesheet">--}}
    {{--<link href="{{asset('front/css/ui.css')}}" rel="stylesheet">--}}
    {{--<link href="{{asset('front/css/base.css')}}" rel="stylesheet">--}}
    {{--<link href="{{asset('front/css/style-blue.css')}}" rel="stylesheet">--}}
    <!-- Font Awesome -->
    <link href="{{asset('front/css/font-awesome.min.css')}}" rel="stylesheet">

    <!-- Slider -->
    <link href="{{asset('front/rs-plugin/css/settings.css')}}" rel="stylesheet"/>
    <link href="{{asset('front/showbizpro/css/settings.css')}}" rel="stylesheet" media="screen"/>

    <!-- Favicon -->
    <link href="{{asset('front/images/favicon.ico')}}" rel="shortcut icon">
    <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/jquery.bxslider.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/feather.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('front/rs-plugin/css/settings.css')}}" media="screen">
    <link rel="stylesheet" href="{{asset('front/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
    <script src="{{asset('front/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>
    <link href="http://fonts.googleapis.com/css?family=Raleway:400,300,600,500" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600&subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <script src="{{asset('front/js/jquery-1.8.2.min.js')}}"></script>


    <!-- JQUERY -->
    {{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.js"></script>--}}

    {{--<!--[if lt IE 9]>--}}
    {{--<link rel="stylesheet" href="{{asset('front/css/nill-box-menu-ie8.css')}}">--}}
    {{--<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>--}}
    {{--<![endif]-->--}}

    {{--<!--[if lt IE 10]>--}}
    {{--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>--}}
    {{--<script src="{{asset('front/js/jquery.placeholder.min.js')}}"></script>--}}
    {{--<![endif]-->--}}

    <!-- Favicon -->
    <link href="images/favicon.ico" rel="shortcut icon">

@yield('meta')

<!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

{{-- Sharethis --}}
{!! $general->sharethis !!}

<!-- =======================================================
  * Template Name: Company - v2.1.0
  * Template URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body class="onepage">
<div id="preloader"></div>
<div id="home"></div>
<div id="nav-main" class="sticky-menu">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="logo-container">
                    <div class="tb">
                        <div class="tb-cell">
                            <a href="/" id="logo">
                                <img alt="" title="logo" src="{{asset('front/images/logo.png')}}" class="img-responsive" style="max-width: 30%"/>
                            </a>
                            <a href="index.html" id="logo-white">
                                <img alt="" title="logo" src="{{asset('front/images/logo.png')}}" class="img-responsive" style="max-width: 30%"/>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="menu_container">
                    <ul id="desktop-menu" class="visible-md visible-lg">
                        <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2130 active"><a href="#home">{{__('message.home')}}</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-onepage menu-item-2131"><a href="#about">{{__('message.About')}}</a></li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-onepage menu-item-2132"><a href="#services">{{__('message.services')}}</a></li>
                        <!--<li class="menu-item menu-item-type-post_type menu-item-object-onepage menu-item-2133"><a href="#team">TEAM</a></li>-->
                        <li class="menu-item menu-item-type-post_type menu-item-object-onepage menu-item-2134"><a href="#portfolio">{{__('message.Products')}}</a></li>
                        <!--<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2135">-->
                        <!--<a href="blog.html">BLOG</a>-->
                        <!--<ul class="sub-menu">-->
                        <!--<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2130"><a href="blog_full.html">FULL WIDTH</a></li>-->
                        <!--<li class="menu-item menu-item-type-post_type menu-item-object-onepage menu-item-2131"><a href="blog_left.html">LEFT SIDEBAR</a></li>-->
                        <!--</ul>-->
                        <!--</li>-->
                        <li class="menu-item menu-item-type-post_type menu-item-object-onepage menu-item-2136"><a href="#contact">{{__('message.Contact')}}</a></li>
                        <!--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2139"><a href="shortcodes.html">SHORTCODES</a></li>-->
                    </ul>
                </nav>
                <div id="mobile-menu-button" class="hidden-md hidden-lg">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <!-- MOBILE MENU -->
    <nav class="container hidden-lg hidden-md">
        <div id="mobile-menu">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2130 active"><a href="#header-main">{{__('message.home')}}</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-onepage menu-item-2131"><a href="#about">{{__('message.About')}}</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-onepage menu-item-2132"><a href="#services">{{__('message.services')}}</a></li>
                            <!--<li class="menu-item menu-item-type-post_type menu-item-object-onepage menu-item-2133"><a href="#team">TEAM</a></li>-->
                            <li class="menu-item menu-item-type-post_type menu-item-object-onepage menu-item-2134"><a href="#products">{{__('message.Products')}}</a></li>
                            <!--<li class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2135"><a href="#">BLOG</a>-->
                            <!--<ul class="sub-menu">-->
                            <!--<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2130"><a href="blog_full.html">FULL WIDTH</a></li>-->
                            <!--<li class="menu-item menu-item-type-post_type menu-item-object-onepage menu-item-2131"><a href="blog_left.html">LEFT SIDEBAR</a></li>-->
                            <!--</ul>-->
                            <!--</li>-->
                            <li class="menu-item menu-item-type-post_type menu-item-object-onepage menu-item-2136"><a href="#contact">{{__('message.Contact')}}</a></li>
                            <!--<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2139"><a href="shortcodes.html">SHORTCODES</a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

@yield('content')

<!-- ======= Footer ======= -->
{{--<footer class="footer">--}}
    {{--<div class="footer__center container">--}}

        {{--<div class="footer__container adjustbxflex row">--}}
            {{--<div class="footer__wrap"><a class="footer__logo" href="/"><img class="some-icon lazy_a"--}}
                                                                            {{--data-original="{{ asset('storage/'.$general->logo) }}"--}}
                                                                            {{--alt="Yes Soft"--}}
                                                                            {{--src="{{ asset('storage/'.$general->logo) }}"--}}
                                                                            {{--style=""></a>--}}
                {{--<div class="footer__text">{{$about->subject}}</div>--}}
                {{--<div class="footer__social">--}}
                    {{--<a class="footer__link" href="{{$general->facebook}}" target="_blank">--}}
                        {{--<img class="lazy_a" data-original="{{ asset('front/img/icons/facebook.svg') }}"--}}
                             {{--alt="Yes Soft Social Media" src="{{ asset('front/img/icons/facebook.svg') }}">--}}
                        {{--<i class="fab fa-facebook-f fa-fw fa-2x"></i>--}}
                    {{--</a>--}}
                    {{--<a class="footer__link" href="{{$general->twitter}}" target="_blank">--}}
                        {{--<img class="lazy_a" data-original="{{ asset('front/img/icons/Twitter.svg') }}"--}}
                             {{--alt="Yes Soft Social Media" src="{{ asset('front/img/icons/Twitter.svg') }}">--}}
                    {{--</a>--}}
                    {{--<a class="footer__link" href="{{$general->youtube}}" target="_blank">--}}
                        {{--<img class="lazy_a" data-original="{{ asset('front/img/icons/Youtube.svg') }}"--}}
                             {{--alt="Yes Soft Social Media" src="{{ asset('front/img/icons/Youtube.svg') }}">--}}
                    {{--</a>--}}
                    {{--<a class="footer__link" href="{{$general->linkedin}}" target="_blank">--}}
                        {{--<img class="lazy_a" data-original="{{ asset('front/img/icons/linkedin.svg') }}"--}}
                             {{--alt="Yes Soft Social Media" src="{{ asset('front/img/icons/linkedin.svg') }}">--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="footer__row">--}}
                {{--<div class="footer__col">--}}
                    {{--<div class="footer__category">{{__('message.Products')}}</div>--}}
                    {{--<div class="footer__menu">--}}
                        {{--@foreach($product as $products)--}}
                            {{--<a class="footer__item" href="{{ $products->link }}">{{ $products->name }}</a>--}}
                        {{--@endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="footer__col">--}}
                {{--<div class="footer__category">The Beta Lab</div>--}}
                {{--<div class="footer__menu"><a class="footer__item" href="/bulbul/">Bulbul</a><a class="footer__item" href="/flightmaphome/">Flightmap</a><a class="footer__item" href="/fugu/">Fugu</a><a class="footer__item" href="/husky/">Husky</a></div>--}}
                {{--</div>--}}
                {{--<div class="footer__col">--}}
                    {{--<div class="footer__category">{{__('message.Quick Links')}}</div>--}}
                    {{--<div class="footer__menu">--}}
                        {{--<a class="footer__item" href="{{route('contact')}}">{{__('message.contact Us')}}</a>--}}
                        {{--<a class="footer__item" href="{{route('product')}}">{{__('message.Products')}}</a>--}}
                        {{--<a class="footer__item" href="/services/">{{__('message.service')}}</a>--}}
                        {{--<a class="footer__item" href="{{route('about')}}">{{__('message.About Us')}}</a>--}}
                        {{--<a class="footer__item" href="{{route('blog')}}">{{__('message.blogs')}}</a>--}}
{{--                        @foreach($link as $link)--}}
{{--                            <a class="footer__item" href="{{$link->link}}" target="_blank">{{$link->name}}</a>--}}
{{--                        @endforeach--}}
                    {{--</div>--}}
                {{--</div>--}}

                {{--<div class="footer__col">--}}
                    {{--<div class="footer__category">{{__('message.Quick Links')}} </div>--}}
                    {{--<div class="footer__menu">--}}
                        {{--<div class="addjwset">--}}
                            {{--<p class="addressSetjw opShow">--}}
                                {{--<span>Ger</span>--}}
                                {{--<i>{{$general->address1}}</i>--}}
                            {{--</p>--}}
                            {{--<p class="addressSetjw opShow">--}}
                                {{--<span>Brazil</span>--}}
                                {{--<i>{{$general->address1}}</i>--}}
                            {{--</p>--}}
                            {{--<p class="addressSetjw opShow">--}}
                                {{--<span>UAE</span>--}}
                                {{--<i>{{$general->address1}}</i>--}}
                            {{--</p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="row adjustbxflex aligncenterflex copyRightjws">--}}
            {{--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 orderm2">--}}
                {{--<div class="footer__copyright">{{__('message.rights reserved')}}</div>--}}
            {{--</div>--}}
            {{--<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 orderm1">--}}
                {{--<p><a href="/terms-and-conditions/" class="footer__item">{{__('message.Terms & Conditions')}}</a> | <a--}}
                        {{--href="/privacy-policy/" class="footer__item">{{__('message.Privacy Policy')}}</a></p>--}}
            {{--</div>--}}
        {{--</div>--}}

    {{--</div>--}}
{{--</footer><!-- End Footer -->--}}
<footer id="foot-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-6 column">
                <span>@2022 <a href="https://yes-soft.de" target="_blank">Yes Soft.</a> All Right Reserved.</span>
            </div>
            <!--<div class="col-sm-6 col-lg-6 column">-->
            <!--<div class="social-icon">-->
            <!--<a href="#" class="social-1"><i class="fa fa-facebook"></i></a>-->
            <!--<a href="#" class="social-1"><i class="fa fa-twitter"></i></a>-->
            <!--<a href="#" class="social-1"><i class="fa fa-linkedin"></i></a>-->
            <!--</div>                                                         -->
            <!--</div>-->
        </div>
    </div>
</footer>
<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
<!--<script src="js/jquery.fitvids.js"></script>-->
<!--<script src="js/jquery.timer.js"></script>-->
<script src="{{ asset('front/js/jquery.sticky.js')}}"></script>
{{--<!--<script src="{{ asset('front/js/timeago.js')}}"></script>-->--}}
{{--<!--<script src="{{ asset('front/js/jquery.currentMenuItem.js') }}"></script>-->--}}
<script src="{{ asset('front/js/plugins.js' )}}"></script>
<script src="{{ asset('front/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('front/rs-plugin/js/jquery.themepunch.revolution.min.js' )}}"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>-->
<script src="{{ asset('front/js/main.js' )}}"></script>
<!--<script src={{ asset('front/"js/retina.min.js') }}"></script>-->
{{--//////////////////////--}}

</body>
</html>
