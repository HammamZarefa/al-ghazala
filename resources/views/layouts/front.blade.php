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

    {{--<!-- Font Awesome -->--}}
    {{--<link href="{{asset('front/css/font-awesome.min.css')}}" rel="stylesheet">--}}
    <!-- STYLES -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">


    {{--<!-- Slider -->--}}
    {{--<link href="{{asset('front/rs-plugin/css/settings.css')}}" rel="stylesheet"/>--}}
    {{--<link href="{{asset('front/showbizpro/css/settings.css')}}" rel="stylesheet" media="screen"/>--}}

    <!-- Favicon -->
    <link href="{{asset('front/images/favicon.ico')}}" rel="shortcut icon">
    <link rel="stylesheet" href="{{asset('front/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/colors.css')}}">
    <link rel="stylesheet" href="{{asset('front/css/style.css')}}">

    {{--<script src="{{asset('front/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js')}}"></script>--}}
    {{--<link href="http://fonts.googleapis.com/css?family=Raleway:400,300,600,500" rel="stylesheet" type="text/css">--}}
    {{--<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600&subset=latin,latin-ext" rel="stylesheet" type="text/css">--}}
    {{--<script src="{{asset('front/js/jquery-1.8.2.min.js')}}"></script>--}}
    <!-- Favicon -->
    <link href="{{ asset('storage/'.$general->favicon) }}" rel="shortcut icon">

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
<div class="acacia-anim ">
    <div><img src="{{asset('front/img/acacia-icon1.png')}}" alt=""></div>
    <div><img src="{{asset('front/img/acacia-icon1.png')}}" alt=""></div>
    <div><img src="{{asset('front/img/acacia-icon1.png')}}" alt=""></div>
    <div><img src="{{asset('front/img/acacia-icon1.png')}}" alt=""></div>
    <div><img src="{{asset('front/img/acacia-icon1.png')}}" alt=""></div>
    <div><img src="{{asset('front/img/acacia-icon1.png')}}" alt=""></div>
    <div><img src="{{asset('front/img/acacia-icon1.png')}}" alt=""></div>
    <div><img src="{{asset('front/img/acacia-icon1.png')}}" alt=""></div>
</div>
<div class="whatsapp">
    <img src="{{asset('front/img/acacia-icon2.png')}}" alt="">
    <a href="https://wa.me/00971505889285" target="_blank"><img class="svg" src="{{asset('front/img//svg/social/whatsapp.svg')}}" alt="" /></a>
</div>
<!-- PRELOADER -->
<div class="waxon_tm_preloader">
    <div class="spinner_wrap">
        <div class="spinner"></div>
    </div>
</div>
<!-- /PRELOADER -->

<!-- WRAPPER ALL -->

<!-- MAGIC CURSOR VALUES: show, hide -->
<!-- COLOR VALUES: blue, green, brown, pink, orange, black, white, purple, sky, cadetBlue, crimson, olive, red -->

<div class="waxon_tm_all_wrap" data-magic-cursor="show" data-color="black">

    <!-- MODALBOX NEWS -->
    <div class="waxon_tm_modalbox_news">
        <div class="box_inner">
            <div class="close">
                <a href="#"><img class="svg" src="{{asset('front/img/svg/cancel.svg')}}" alt="" /></a>
            </div>
            <div class="description_wrap"></div>
        </div>
    </div>
    <!-- /MODALBOX NEWS -->

    <!-- MODALBOX ABOUT -->
    <div class="waxon_tm_modalbox_about">
        <div class="box_inner">
            <div class="close">
                <a href="#"><img class="svg" src="{{asset('front/img/svg/cancel.svg')}}" alt="" /></a>
            </div>
            <div class="description_wrap">
                <div class="my_box">
                    <div class="left">
                        <div class="about_title">
                            <h3>Programming Skills</h3>
                        </div>
                        <div class="waxon_progress">
                            <div class="progress_inner" data-value="95">
                                <span><span class="label">Wordpress &amp; PHP</span><span class="number">95%</span></span>
                                <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                            </div>
                            <div class="progress_inner" data-value="80" >
                                <span><span class="label">Javascript &amp; React</span><span class="number">80%</span></span>
                                <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                            </div>
                            <div class="progress_inner" data-value="90">
                                <span><span class="label">HTML &amp; CSS</span><span class="number">90%</span></span>
                                <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="about_title">
                            <h3>Language Skills</h3>
                        </div>
                        <div class="waxon_progress">
                            <div class="progress_inner" data-value="95">
                                <span><span class="label">English</span><span class="number">95%</span></span>
                                <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                            </div>
                            <div class="progress_inner" data-value="90" >
                                <span><span class="label">Japanese</span><span class="number">90%</span></span>
                                <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                            </div>
                            <div class="progress_inner" data-value="85">
                                <span><span class="label">Arabian</span><span class="number">85%</span></span>
                                <div class="background"><div class="bar"><div class="bar_in"></div></div></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="counter">
                    <div class="about_title">
                        <h3>Fun Facts</h3>
                    </div>
                    <ul>
                        <li>
                            <div class="list_inner">
                                <h3>777+</h3>
                                <span>Projects Completed</span>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <h3>3K+</h3>
                                <span>Happy Clients</span>
                            </div>
                        </li>
                        <li>
                            <div class="list_inner">
                                <h3>9K+</h3>
                                <span>Lines of Code</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="partners">
                    <div class="about_title">
                        <h3>Our Partners</h3>
                    </div>
                    <ul class="owl-carousel">
                        <li class="item"><a href="#"><img src="{{asset('front/img/partners/1.png')}}" alt="" /></a></li>
                        <li class="item"><a href="#"><img src="{{asset('front/img/partners/2.png')}}" alt="" /></a></li>
                        <li class="item"><a href="#"><img src="{{asset('front/img/partners/3.png')}}" alt="" /></a></li>
                        <li class="item"><a href="#"><img src={{asset('front/img/partners/4.png')}}"" alt="" /></a></li>
                        <li class="item"><a href="#"><img src="{{asset('front/img/partners/5.png')}}" alt="" /></a></li>
                        <li class="item"><a href="#"><img src="{{asset('front/img/partners/6.png')}}" alt="" /></a></li>
                        <li class="item"><a href="#"><img src="{{asset('front/img/partners/7.png')}}" alt="" /></a></li>
                        <li class="item"><a href="#"><img src="{{asset('front/img/partners/8.png')}}" alt="" /></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /MODALBOX ABOUT -->

    <!-- TOPBAR -->
    <div class="waxon_tm_topbar">
        <div class="container">
            <div class="topbar_inner">
                <div class="logo">
                    <img src="{{ asset('storage/'.$general->logo) }}" alt="" />
                </div>
                <div class="menu">
                    <div class="links">
                        <ul class="anchor_nav">
                            <li class="current">
                                <a href="#home">
                                    <span class="first">Home</span>
                                    <span class="second">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#about">
                                    <span class="first">About</span>
                                    <span class="second">About</span>
                                </a>
                            </li>
                            <li>
                                <a href="#portfolio">
                                    <span class="first">Portfolio</span>
                                    <span class="second">Portfolio</span>
                                </a>
                            </li>
                            <li>
                                <a href="#news">
                                    <span class="first">News</span>
                                    <span class="second">News</span>
                                </a>
                            </li>
                            <li>
                                <a href="#contact">
                                    <span class="first">Contact</span>
                                    <span class="second">Contact</span>
                                </a>
                            </li>
                            <li>
                                <a href="index-rtl.html">
                                    <span class="first"><img src="{{asset('front/img/svg/social/globe-solid.svg')}}" alt=""></span>
                                    <span class="second"><img src="{{asset('front/img/svg/social/globe-solid.svg')}}" alt=""></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /TOPBAR -->

    <!-- MOBILE MENU -->
    <div class="waxon_tm_mobile_menu">
        <div class="topbar_inner">
            <div class="container bigger">
                <div class="topbar_in">
                    <div class="logo">
                        <a href="#"><img src="{{ asset('storage/'.$general->logo) }}" alt="" /></a>
                    </div>
                    <div class="my_trigger">
                        <div class="hamburger hamburger--collapse-r">
                            <div class="hamburger-box">
                                <div class="hamburger-inner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dropdown">
            <div class="container">
                <div class="dropdown_inner">
                    <ul class="anchor_nav">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#news">News</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="index-rtl.html">Language</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /MOBILE MENU -->

@yield('content')

<!-- COPYRIGHT -->
    <div class="waxon_tm_copyright">
        <div class="container">
            <div class="copyright_inner">
                <ul>
                    <li class="wow fadeInDown" data-wow-duration="0.8s">
                        <span>ACACIA</span>
                        <span>General Trading</span>
                    </li>
                    <li class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <span>Brook 103,</span>
                        <span>90021 New York, USA</span>
                    </li>
                    <li class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.4s">
                        <span><a href="#">hi@waxon.com</a></span>
                        <span>+77 033 442 55 57</span>
                    </li>
                    <li class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.6s">
                        <div class="social">
                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="first"><img class="svg" src="{{asset('front/img/svg/social/facebook.svg')}}" alt="" /></span>
                                        <span class="second"><img class="svg" src="{{asset('front/img/svg/social/facebook.svg')}}" alt="" /></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="first"><img class="svg" src="{{asset('front/img/svg/social/twitter.svg')}}" alt="" /></span>
                                        <span class="second"><img class="svg" src="{{asset('front/img/svg/social/twitter.svg')}}" alt="" /></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="first"><img class="svg" src="{{asset('front/img/svg/social/instagram.svg')}}" alt="" /></span>
                                        <span class="second"><img class="svg" src="{{asset('front/img/svg/social/instagram.svg')}}" alt="" /></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="first"><img class="svg" src="{{asset('front/img/svg/social/soundcloud.svg')}}" alt="" /></span>
                                        <span class="second"><img class="svg" src="{{asset('front/img/svg/social/soundcloud.svg')}}" alt="" /></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="first"><img class="svg" src="{{asset('front/img/svg/social/youtube.svg')}}" alt="" /></span>
                                        <span class="second"><img class="svg" src="{{asset('front/img/svg/social/youtube.svg')}}" alt="" /></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="first"><img class="svg" src="{{asset('front/img/svg/social/facebook.svg')}}" alt="" /></span>
                                        <span class="second"><img class="svg" src="{{asset('front/img/svg/social/facebook.svg')}}" alt="" /></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /COPYRIGHT -->

    <!-- MAGIC CURSOR -->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>
    <!-- /MAGIC CURSOR -->


</div>
<!-- / WRAPPER ALL -->

<!-- SCRIPTS -->
<script src="{{asset('front/js/jquery.js')}}"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="{{asset('front/js/ie8.js')}}"></script> <![endif]-->
<script src="{{asset('front/js/plugins.js')}}"></script>
<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5bpEs3xlB8vhxNFErwoo3MXR64uavf6Y&callback=initMap"></script> -->
<script src="{{asset('front/js/init.js')}}"></script>
<script src="{{asset('front/js/main.js')}}"></script>
<!-- /SCRIPTS -->

</body>
</html>

{{--<script src="{{ asset('front/js/jquery.sticky.js')}}"></script>--}}
{{--<!--<script src="{{ asset('front/js/timeago.js')}}"></script>-->--}}
{{--<!--<script src="{{ asset('front/js/jquery.currentMenuItem.js') }}"></script>-->--}}
{{--<script src="{{ asset('front/js/plugins.js' )}}"></script>--}}
{{--<script src="{{ asset('front/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>--}}
{{--<script src="{{ asset('front/rs-plugin/js/jquery.themepunch.revolution.min.js' )}}"></script>--}}
{{--<!--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>-->--}}
{{--<script src="{{ asset('front/js/main.js' )}}"></script>--}}
