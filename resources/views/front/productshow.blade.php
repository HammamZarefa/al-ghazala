<script src="{{asset('front/js/product/modernizr.js')}}"></script>
<!-- Google Fonts: Montserrat & Open Sans -->
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300|Roboto:400,100,300' rel='stylesheet' type='text/css'>
<!-- Bootstrap / FontAwesome / Stylesheet / Responsive -->
<link rel="stylesheet" href="{{asset('front/fonts/font-awesome.min.css')}}">
<link href="{{asset('front/css/product/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('front/css/product/animate.css')}}">
<link rel="stylesheet" href="{{asset('front/css/product/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('front/css/product/owl.transitions.css')}}">
<link rel="stylesheet" href="{{asset('front/css/product/prettyPhoto.css')}}">
<link rel="stylesheet" href="{{asset('front/css/product/stylesheet.css')}}">
<link rel="stylesheet" href="{{asset('front/css/product/phone-position.css')}}">
<link rel="stylesheet" href="{{asset('front/css/product/phone-position-responsive.css')}}">
<link rel="stylesheet" href="{{asset('front/css/product/responsive.css')}}">
<link rel="stylesheet" href="{{asset('front/css/product/responsive.css')}}">

<!--[if IE 8]>
<link rel="stylesheet" type="text/css" href="{{asset('front/css/product/ie8.css')}}">
<![endif]-->
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

<![endif]-->
@extends('layouts.front')
@section('content')

<main id="main">
<div class="header">
    <div id="preload">
        <div class="container logo">
            <img src="{{asset('front/img/236.gif')}}" class="prl animated fadeInDown delayp4">
            <p class="text-logo animated bounceIn delayp2"><b>{{$prod->name}}</p> <!-- Change your text logo here -->
        </div>
    </div>

    <!--
    Website Header / Start
    **********************************
    -->

        <div class="container top_interface">
            <div class="logo col-md-2 col-sm-8 col-xs-8">
                <div class="text-logo"><b>{{$prod->name}}</b>app</div> <!-- Change your text logo here -->
            </div>

        </div><!-- /top_interface -->

        <div class="container header_tag">
            <h1>Publish your app with Quality Presentation.</h1>
            <h2>get your app landing page carefully designed and ready to go.</h2>
            <a href="#" class="w_btn">download now</a>
            <a href="#" class="w_btn">view gallery</a>
        </div><!-- /header_tag -->

        <div class="container phone_preview">
            <div class="col-md-3 hidden-xs hidden-sm col-sm-4 regular_text_left">
                <h3>Smooth Animation</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed dia nonum.</p>
                <h3>Built with <i class="fa">&#xf004;</i></h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed dia nonum.</p>
            </div>
            <div class="col-md-6 col-sm-8 banner_phone">
            </div>  <!-- /banner_phone | Background of Phone -->
            <div class="col-md-3 hidden-xs regular_text_right">
                <h3>Top End Features</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed dia nonum.</p>
                <h3>Beautiful Interface</h3>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed dia nonum.</p>
            </div>
        </div>
</div>
    <!--
    Section App Overview
    **********************************
    -->
    <section class="app_overview">
        <div class="title">
            <h1>app overview</h1>
            <h2>Rocket App does all the work for you. <b>Instinctively</b></h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
        </div><!-- Title -->

        <div class="container list-items">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <i class="fa">&#xf00c;</i>
                <h2>On the Ball<small>lorem ipsum dolor sit amet</small> </h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
            </div><!-- Point -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <i class="fa">&#xf005;</i>
                <h2>Premium Quality<small>lorem ipsum dolor sit amet</small> </h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
            </div><!-- Point -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <i class="fa">&#xf0e4;</i>
                <h2>No Speed Limits<small>lorem ipsum dolor sit amet</small> </h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
            </div><!-- Point -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <i class="fa">&#xf0c3;</i>
                <h2>Brewed for Success<small>lorem ipsum dolor sit amet</small> </h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
            </div><!-- Point -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <i class="fa">&#xf025;</i>
                <h2>We hear you<small>lorem ipsum dolor sit amet</small> </h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
            </div><!-- Point -->
            <div class="col-md-4 col-sm-6 col-xs-12">
                <i class="fa">&#xf023;</i>
                <h2>Secured Accounts<small>lorem ipsum dolor sit amet</small> </h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
            </div><!-- Point -->
        </div><!-- /list-items -->
    </section><!-- /section app_overview -->

    <!--
    Section Work
    **********************************
    Styling in phone-position.css & phone-position-responsive.css
    -->
    <section class="work">
        <div class="title">
            <h1>How does it Work</h1>
            <h2><b>Simple works.</b> So maybe we should stay that way.</h2>
        </div><!-- /Title -->

        <div class="container phone_previews">
            <div class="center_phone">
                <div class="phoneOverlay">
                    <div><!-- Phone description will be cloned here for phone view. See js/core.js --></div>
                    <p class="clicktoClose">
                        <i class="fa">&#xf00d;</i>
                        click to close</p>
                </div>
                <div id="phone_prev" class="owl-carousel">
                    <div class="end_slider">Empty <!-- Leave this div empty --></div>

                    <!-- Banner 1 -->
                    <div><img src="{{asset('front/img/mobile_preview_2.jpg')}}" alt="">
                        <h2>First View</h2>
                        <div class="bullet left top close">
                            <div><span>
                <h4>left top close</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->
                        <div class="bullet left centre mid">
                            <div><span>
                <h4>left mid</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- / Left Bullet -->
                        <div class="bullet left btm far">
                            <div><span>
                <h4>left bot far</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->

                        <div class="bullet right top close">
                            <div><span>
                <h4>right top close</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->
                        <div class="bullet right centre mid">
                            <div><span>
                <h4>right mid</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- / Left Bullet -->
                        <div class="bullet right btm far">
                            <div><span>
                <h4>right bot far</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->

                    </div>

                    <!-- Banner 2 -->
                    <div><img src="{{asset('front/img/mobile_preview.jpg')}}" alt="">
                        <h2>Second View</h2>
                        <div class="bullet left top far">
                            <div><span>
                <h4>left top far</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->
                        <div class="bullet left centre mid">
                            <div><span>
                <h4>left mid</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- / Left Bullet -->
                        <div class="bullet left btm far">
                            <div><span>
                <h4>left bot far</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->

                        <div class="bullet right top far">
                            <div><span>
                <h4>right top far</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->
                        <div class="bullet right centre close">
                            <div><span>
                <h4>right close</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- / Left Bullet -->
                        <div class="bullet right btm close">
                            <div><span>
                <h4>right bot close</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->

                    </div>

                    <!-- Banner 3 -->
                    <div><img src="{{asset('front/img/mobile_preview_2.jpg')}}" alt="">
                        <h2>Third View</h2>
                        <div class="bullet left top close">
                            <div><span>
                <h4>left top close</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->
                        <div class="bullet left centre far">
                            <div><span>
                <h4>left far</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- / Left Bullet -->
                        <div class="bullet left btm mid">
                            <div><span>
                <h4>left bot mid</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->

                        <div class="bullet right top close">
                            <div><span>
                <h4>right top close</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->
                        <div class="bullet right centre mid">
                            <div><span>
                <h4>right mid</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- / Left Bullet -->
                        <div class="bullet right btm close">
                            <div><span>
                <h4>right bot close</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->
                    </div>

                    <!-- Banner 4 -->
                    <div><img src="{{asset('front/img/mobile_preview.jpg')}}" alt="">
                        <h2>Forth View</h2>
                        <div class="bullet left top far">
                            <div><span>
                <h4>left top far</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->
                        <div class="bullet left centre mid">
                            <div><span>
                <h4>left mid</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- / Left Bullet -->
                        <div class="bullet left btm far">
                            <div><span>
                <h4>left bot far</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->

                        <div class="bullet right top far">
                            <div><span>
                <h4>right top far</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->
                        <div class="bullet right centre close">
                            <div><span>
                <h4>right close</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- / Left Bullet -->
                        <div class="bullet right btm close">
                            <div><span>
                <h4>right bot close</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->
                    </div>

                    <!-- Banner 5 -->
                    <div><img src="{{asset('front/img/mobile_preview_2.jpg')}}" alt="">
                        <h2>Fifth View</h2>
                        <div class="bullet left top close">
                            <div><span>
                <h4>left top close</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->
                        <div class="bullet left centre mid">
                            <div><span>
                <h4>left mid</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- / Left Bullet -->
                        <div class="bullet left btm far">
                            <div><span>
                <h4>left bot far</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->

                        <div class="bullet right top close">
                            <div><span>
                <h4>right top close</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->
                        <div class="bullet right centre mid">
                            <div><span>
                <h4>right mid</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- / Left Bullet -->
                        <div class="bullet right btm far">
                            <div><span>
                <h4>right bot far</h4>
                <p>Lorem ipsum dolor sit amet, consec tetuer. </p>
              </span></div></div><!-- /Left Bullet -->
                    </div>
                    <div class="end_slider">Empty <!-- Leave this div empty --></div>
                </div><!-- owl-carousel -->
            </div><!-- /center_phone -->
        </div><!-- /phone_previews -->

        <div class="promotion_bar">
            <div class="container">
                <h4>get the app now with a 35% discount!</h4><a href="#" class="b_btn">buy this theme</a>
            </div>
        </div><!-- /promotion_bar -->

    </section>

    <!--
    Features
    **********************************
    -->
    <section class="features">
        <div class="container">
            <div class="col-sm-6 col-sm-push-6 features-text">
                <div class="title">
                    <h1>Features</h1>
                    <h2>Know what it does. <b>Just in case.</b></h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
                </div><!-- Title -->

                <ul class="feature-list">
                    <li><i class="fa">&#xf18e;</i>in app purchases</li>
                    <li><i class="fa">&#xf18e;</i>favourite shots</li>
                    <li><i class="fa">&#xf18e;</i>desktop browser +</li>
                    <li><i class="fa">&#xf18e;</i>upload your shots</li>
                    <li><i class="fa">&#xf18e;</i>favourite lists</li>
                    <li><i class="fa">&#xf18e;</i>featured lists</li>
                    <li><i class="fa">&#xf18e;</i>chat with friends</li>
                    <li><i class="fa">&#xf18e;</i>lightweight</li>
                    <li><i class="fa">&#xf18e;</i>sleep on inactivity</li>
                    <div class="clearfix"></div>
                </ul>

                <a href="#" class="b_btn">get the app now</a><p class="underline-p">don’t forget to get your discount code!</p>

            </div><!-- col-sm-push6-->

            <div class="col-sm-6 col-sm-pull-6 feature-phone">
            </div><!-- /feature-phone --><!-- col-sm-pull-6 -->

        </div>
    </section>

    <!--
    Section Close-Up
    **********************************
    -->
    <section class="close-up">
        <div class="title">
            <h1>Close-Up</h1>
            <h2>Get a little closer to the graphics. <b class="hidden767">Hover to Magnify</b></h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
        </div><!-- Title -->

        <div class="landscape-phone">
            <div class="magni_con hidden767">
                <img id="magni_img" src="{{asset('front/img/ls-phone.jpg')}}" data-big="{{asset('front/img/ls-phone_2x.jpg')}}" data-overlay="{{asset('front/img/magnifying_glass.png')}}" />
            </div><!-- /magni_con | Phone with Zoom -->

            <div class="ls-phone">
                <img src="{{asset('front/img/ls-phone.jpg')}}" />
            </div><!-- /ls-phone | Replaces phone on smaller browsers to Non-Zoom -->
        </div><!-- /landscape-phone -->
    </section><!-- /Close-Up Section -->



    <!--
    Section Newsletter
    **********************************
    -->
    <section class="newsletter">
        <div class="container">
            <div class="col-md-5">
                <div class="title">
                    <h1>Sign up to our Newsletter</h1>
                    <h2>Stay on par with our <b>News and Updates</b></h2>
                </div><!-- /Title -->
            </div><!-- col5 -->
            <div class="col-md-7 form-container">
                <form>
                    <input type="text" name="Name" value="" placeholder="Your Name"><!-- Name Field -->
                    <input type="email" name="" value="" placeholder="Email Address"><!-- Email Field -->
                    <button type="submit" class="b_btn">subscribe</button>
                </form>
            </div>
        </div>
    </section><!-- /newsletter -->

    <!--
    Footer
    **********************************
    -->
    <div class="top-footer">
        <div class="container logo">
            <div class="text-logo"><b>rocket</b>app</div> <!-- Change your text logo here -->
            <a href="#" class="w_btn">purchase this design</a>

            <div class="social_media">
                <i class="fa">&#xf099;</i>
                <i class="fa">&#xf09a;</i>
                <i class="fa">&#xf0d5;</i>
                <i class="fa">&#xf0d2;</i>
                <i class="fa">&#xf17d;</i>
            </div>
            <div class="copy">
                <p>&copy; RocketApp. All rights reserved.</p>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{asset('front/js/product/jquery1.11.0.min.js')}}"></script>
    <script src="{{asset('front/js/product/jquery-migrate-1.2.1.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{asset('front/js/product/bootstrap.min.js')}}"></script>
    <script src="{{asset('front/js/product/owl.carousel.min.js')}}"></script>
    <script src="{{asset('front/js/product/jquery.prettyPhoto.js')}}"></script>
    <script src="{{asset('front/js/product/jquery.mlens-1.3.min.js')}}"></script>
    <script src="{{asset('front/js/product/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('front/js/product/fastclick.js')}}"></script>
    <script src="{{asset('front/js/product/jquery.inview.js')}}"></script>
    <!--[if !IE]><!-->
    <script src="{{asset('front/js/product/inview_custom.js')}}"></script>
    <!--<![endif]--> <!-- If not viewing in Internet Explorer -->
    <script src="{{asset('front/js/product/preloader.js')}}"></script>
    <script src="{{asset('front/js/product/core.js')}}"></script>

  </main>
@endsection
