@extends('layouts.front1')

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
                        <h3>{{$about->title}}<span class="bg">About</span></h3>
                        <span class="job">{{$about->subject}}</span>
                    </div>
                    <div class="text">
                        <p>{{$about->desc}}</p>
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
                            <img class="svg" src="{{ asset('storage/'.$service->icon) }}" alt="" />
                            <div class="details">
                                <h3>{{$service->title}}t</h3>
                                <p>{!! $service->desc !!} </p>
                            </div>
                        </div>
                    </li>
                        @endforeach
                </ul>
            </div>
        </div>
    </div>
    <!-- /SERVICES -->

    {{--<!-- PORTFOLIO -->--}}
    {{--<div class="waxon_tm_portoflio" id="portfolio">--}}
        {{--<div class="container">--}}
            {{--<div class="waxon_tm_main_title">--}}
                {{--<h1 class="title-heading">Portfolio<h1>--}}
                        {{--<div class="title">--}}
                            {{--<h3>Featured Works<span class="bg">Portfolio</span></h3>--}}
                        {{--</div>--}}
                        {{--<div class="portfolio_filter">--}}
                            {{--<ul>--}}
                                {{--<li>--}}
                                    {{--<a href="#" class="current" data-filter="*">--}}
                                        {{--<span class="first">All</span>--}}
                                        {{--<span class="second">All</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--@foreach($pcategories as $pcategory)--}}
                                {{--<li>--}}
                                    {{--<a href="#" data-filter=".{{$pcategory->name}}">--}}
                                        {{--<span class="first">{{$pcategory->name}}</span>--}}
                                        {{--<span class="second">{{$pcategory->name}}</span>--}}
                                    {{--</a>--}}
                                {{--</li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                            {{--<div class="wrapper">--}}
                                {{--<a href="#"><span class="trigger"></span></a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
            {{--</div>--}}
            {{--<div class="portfolio_inner">--}}
                {{--<ul class="gallery_zoom" id="portfo" data-number="6">--}}
                    {{--@foreach($portfolios as $portfolio)--}}
                    {{--<li class="{{$portfolio->pcategory_id}}">--}}
                        {{--<div class="list_inner">--}}
                            {{--<div class="image">--}}
                                {{--<img src="{{ asset('storage/'.$portfolio->cover) }}" alt="" />--}}
                                {{--<div class="main" data-img-url="{{ asset('storage/'.$portfolio->cover) }}"></div>--}}
                                {{--<a class="full_link popup-vimeo" href="{{$portfolio->link}}"></a>--}}
                            {{--</div>--}}
                            {{--<div class="title">--}}
                                {{--<h3><a href="#">{{$portfolio->name}}</a></h3>--}}
                                {{--<span><a href="#">{{$portfolio->client}}</a></span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--@endforeach--}}
                {{--</ul>--}}
                {{--<div class="waxon_tm_button" data-position="center" id="show-portfolio" style="margin-bottom: 10px;">--}}
                    {{--<a>--}}
                        {{--<span>Show More</span>--}}
                    {{--</a>--}}
                {{--</div>--}}
                {{--<div class="waxon_tm_button" data-position="center" id="hide-portfolio">--}}
                    {{--<a>--}}
                        {{--<span>Show Less</span>--}}
                    {{--</a>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<!-- /PORTFOLIO -->--}}
    <!-- PORTFOLIO -->
    <div class="waxon_tm_portoflio" id="portfolio">
        <div class="container">
            <div class="waxon_tm_main_title">
                <h1 class="title-heading">Portfolio</h1>
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
                                @foreach($pcategories as $pcategory)
                                <li>
                                    <a href="#" data-filter=".{{$pcategory->id}}">
                                        <span class="first">{{$pcategory->name}}</span>
                                        <span class="second">{{$pcategory->name}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <div class="wrapper">
                                <a href="#"><span class="trigger"></span></a>
                            </div>
                        </div>
            </div>
            <div class="portfolio_inner">
                <ul class="gallery_zoom">
                    @foreach($portfolios as $portfolio)
                    <li class="{{$portfolio->pcategory_id}}">
                        <div class="list_inner">
                            <div class="image">
                                <img src="{{ asset('storage/'.$portfolio->cover) }}" alt="" />
                                <div class="main" data-img-url="{{ asset('storage/'.$portfolio->cover) }}"></div>
                                <a class="full_link popup-vimeo" href="{{$portfolio->link}}"></a>
                            </div>
                            <div class="title">
                                <h3><a href="#">{{$portfolio->name}}</a></h3>
                                <span><a href="#">{{$portfolio->client}}</a></span>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

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
                                <img class="svg" src="{{asset('front/img/svg/quote-1.svg')}}" alt="" />
                                <p class="text">Good overall template. I am getting back into coding and had a simple question for the author. They responded within 30 minutes and answered my question. Highly recommend.</p>
                                <div class="details">
                                    <div class="image">
                                        <div class="main" data-img-url="img/about/testi1.png"></div>
                                    </div>
                                    <div class="short">
                                        <h3 class="author"><span>Nelly Furtado</span></h3>
                                        <h3 class="job"><span>App Developer</span></h3>
                                    </div>
                                </div>
                            </li>
                            @foreach($testi as $item)
                                <li>
                                    <img class="svg" src="{{ asset('storage/'.$item->cover) }}" alt="" />
                                    <p class="text">{{$item->desc}}.</p>
                                    <div class="details">
                                        <div class="image">
                                            <div class="main" data-img-url="{{ asset('storage/'.$item->cover) }}"></div>
                                        </div>
                                        <div class="short">
                                            <h3 class="author"><span>{{$item->name}}</span></h3>
                                            <h3 class="job"><span>{{$item->profession}}</span></h3>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <div class="image_list">
                        <ul class="masonry">
                            <li class="active masonry_item">
                                <div class="image">
                                    <img src="{{asset('front/img/thumbs/3-4.jpg')}}" alt="" />
                                    <div class="main" data-img-url="{{asset('frontimg/about/testi1.png')}}"></div>
                                </div>
                            </li>
                            <li class="masonry_item">
                                <div class="image">
                                    <img src="{{asset('front/img/thumbs/4-3.jpg')}}" alt="" />
                                    <div class="main" data-img-url="{{asset('front/img/about/testi2.png')}}"></div>
                                </div>
                            </li>
                            <li class="masonry_item">
                                <div class="image">
                                    <img src="{{asset('front/img/thumbs/1-1.jpg')}}" alt="" />
                                    <div class="main" data-img-url="{{asset('front/img/about/testi2.png')}}"></div>
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
                    @foreach($lpost as $post)
                    <li class="wow fadeInDown" data-wow-duration="0.8s">
                        <div class="list_inner">
                            <div class="image">
                                <img src="{{ asset('storage/'.$post->cover) }}" alt="" />
                                <div class="main" data-img-url="{{ asset('storage/'.$post->cover) }}"></div>
                                <a class="full_link" href="#"></a>
                            </div>
                            <div class="details">
                                <div class="extra">
                                    <p class="date">By <a href="#">{{$post->user->name}}</a> <span>{{ Carbon\Carbon::parse($post->created_at)->format("d F, Y") }}</span></p>
                                </div>
                                <h3 class="title"><a href="#">{{$post->title}}</a></h3>
                            </div>
                            <div class="main_content">
                                <div class="descriptions">
                                    <p class="bigger"> {!! $post->desc !!}</p>
                                    <div class="quotebox">
                                        <div class="icon">
                                            <img class="svg" src="{{asset('front/img/svg/quote.svg')}}" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="news_share">
                                    <span>Share:</span>
                                    <ul>
                                        <li><a href="#"><img class="svg" src="{{asset('front/img/svg/social/facebook.svg')}}" alt="" /></a></li>
                                        <li><a href="#"><img class="svg" src="{{asset('front/img/svg/social/twitter.svg')}}" alt="" /></a></li>
                                        <li><a href="#"><img class="svg" src="{{asset('front/img/svg/social/instagram.svg')}}" alt="" /></a></li>
                                        <li><a href="#"><img class="svg" src="{{asset('front/img/svg/social/dribbble.svg')}}" alt="" /></a></li>
                                        <li><a href="#"><img class="svg" src="{{asset('front/img/svg/social/tik-tok.svg')}}"  alt="" /></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                    {{--<li class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.2s">--}}
                        {{--<div class="list_inner">--}}
                            {{--<div class="image">--}}
                                {{--<img src="img/thumbs/4-3.jpg" alt="" />--}}
                                {{--<div class="main" data-img-url="img/about/news.png"></div>--}}
                                {{--<a class="full_link" href="#"></a>--}}
                            {{--</div>--}}
                            {{--<div class="details">--}}
                                {{--<div class="extra">--}}
                                    {{--<p class="date">By <a href="#">Bona Green</a> <span>05 April 2021</span></p>--}}
                                {{--</div>--}}
                                {{--<h3 class="title"><a href="#">How to be appreciated for your hard work as a developer </a></h3>--}}
                            {{--</div>--}}
                            {{--<div class="main_content">--}}
                                {{--<div class="descriptions">--}}
                                    {{--<p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>--}}
                                    {{--<p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>--}}
                                    {{--<p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>--}}
                                    {{--<div class="quotebox">--}}
                                        {{--<div class="icon">--}}
                                            {{--<img class="svg" src="img/svg/quote.svg" alt="" />--}}
                                        {{--</div>--}}
                                        {{--<p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>--}}
                                    {{--</div>--}}
                                    {{--<p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>--}}
                                    {{--<p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>--}}
                                {{--</div>--}}
                                {{--<div class="news_share">--}}
                                    {{--<span>Share:</span>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/facebook.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/twitter.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/instagram.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/dribbble.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/tik-tok.svg"  alt="" /></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.4s">--}}
                        {{--<div class="list_inner">--}}
                            {{--<div class="image">--}}
                                {{--<img src="img/thumbs/4-3.jpg" alt="" />--}}
                                {{--<div class="main" data-img-url="img/about/news.png"></div>--}}
                                {{--<a class="full_link" href="#"></a>--}}
                            {{--</div>--}}
                            {{--<div class="details">--}}
                                {{--<div class="extra">--}}
                                    {{--<p class="date">By <a href="#">Ave Smith</a> <span>22 March 2021</span></p>--}}
                                {{--</div>--}}
                                {{--<h3 class="title"><a href="#">How designers and developers can collaborate better</a></h3>--}}
                            {{--</div>--}}
                            {{--<div class="main_content">--}}
                                {{--<div class="descriptions">--}}
                                    {{--<p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>--}}
                                    {{--<p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>--}}
                                    {{--<p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>--}}
                                    {{--<div class="quotebox">--}}
                                        {{--<div class="icon">--}}
                                            {{--<img class="svg" src="img/svg/quote.svg" alt="" />--}}
                                        {{--</div>--}}
                                        {{--<p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>--}}
                                    {{--</div>--}}
                                    {{--<p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>--}}
                                    {{--<p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>--}}
                                {{--</div>--}}
                                {{--<div class="news_share">--}}
                                    {{--<span>Share:</span>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/facebook.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/twitter.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/instagram.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/dribbble.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/tik-tok.svg"  alt="" /></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}

                    {{--<li class="wow fadeInDown" data-wow-duration="0.8s">--}}
                        {{--<div class="list_inner">--}}
                            {{--<div class="image">--}}
                                {{--<img src="img/thumbs/4-3.jpg" alt="" />--}}
                                {{--<div class="main" data-img-url="img/about/news.png"></div>--}}
                                {{--<a class="full_link" href="#"></a>--}}
                            {{--</div>--}}
                            {{--<div class="details">--}}
                                {{--<div class="extra">--}}
                                    {{--<p class="date">By <a href="#">Alex Watson</a> <span>10 May 2021</span></p>--}}
                                {{--</div>--}}
                                {{--<h3 class="title"><a href="#">Developers watch out for these burnout symptoms</a></h3>--}}
                            {{--</div>--}}
                            {{--<div class="main_content">--}}
                                {{--<div class="descriptions">--}}
                                    {{--<p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>--}}
                                    {{--<p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>--}}
                                    {{--<p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>--}}
                                    {{--<div class="quotebox">--}}
                                        {{--<div class="icon">--}}
                                            {{--<img class="svg" src="img/svg/quote.svg" alt="" />--}}
                                        {{--</div>--}}
                                        {{--<p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>--}}
                                    {{--</div>--}}
                                    {{--<p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>--}}
                                    {{--<p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>--}}
                                {{--</div>--}}
                                {{--<div class="news_share">--}}
                                    {{--<span>Share:</span>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/facebook.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/twitter.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/instagram.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/dribbble.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/tik-tok.svg"  alt="" /></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.2s">--}}
                        {{--<div class="list_inner">--}}
                            {{--<div class="image">--}}
                                {{--<img src="img/thumbs/4-3.jpg" alt="" />--}}
                                {{--<div class="main" data-img-url="img/about/news.png"></div>--}}
                                {{--<a class="full_link" href="#"></a>--}}
                            {{--</div>--}}
                            {{--<div class="details">--}}
                                {{--<div class="extra">--}}
                                    {{--<p class="date">By <a href="#">Bona Green</a> <span>05 April 2021</span></p>--}}
                                {{--</div>--}}
                                {{--<h3 class="title"><a href="#">How to be appreciated for your hard work as a developer </a></h3>--}}
                            {{--</div>--}}
                            {{--<div class="main_content">--}}
                                {{--<div class="descriptions">--}}
                                    {{--<p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>--}}
                                    {{--<p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>--}}
                                    {{--<p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>--}}
                                    {{--<div class="quotebox">--}}
                                        {{--<div class="icon">--}}
                                            {{--<img class="svg" src="img/svg/quote.svg" alt="" />--}}
                                        {{--</div>--}}
                                        {{--<p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>--}}
                                    {{--</div>--}}
                                    {{--<p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>--}}
                                    {{--<p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>--}}
                                {{--</div>--}}
                                {{--<div class="news_share">--}}
                                    {{--<span>Share:</span>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/facebook.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/twitter.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/instagram.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/dribbble.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/tik-tok.svg"  alt="" /></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.4s">--}}
                        {{--<div class="list_inner">--}}
                            {{--<div class="image">--}}
                                {{--<img src="img/thumbs/4-3.jpg" alt="" />--}}
                                {{--<div class="main" data-img-url="img/about/news.png"></div>--}}
                                {{--<a class="full_link" href="#"></a>--}}
                            {{--</div>--}}
                            {{--<div class="details">--}}
                                {{--<div class="extra">--}}
                                    {{--<p class="date">By <a href="#">Ave Smith</a> <span>22 March 2021</span></p>--}}
                                {{--</div>--}}
                                {{--<h3 class="title"><a href="#">How designers and developers can collaborate better</a></h3>--}}
                            {{--</div>--}}
                            {{--<div class="main_content">--}}
                                {{--<div class="descriptions">--}}
                                    {{--<p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>--}}
                                    {{--<p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>--}}
                                    {{--<p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>--}}
                                    {{--<div class="quotebox">--}}
                                        {{--<div class="icon">--}}
                                            {{--<img class="svg" src="img/svg/quote.svg" alt="" />--}}
                                        {{--</div>--}}
                                        {{--<p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>--}}
                                    {{--</div>--}}
                                    {{--<p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>--}}
                                    {{--<p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>--}}
                                {{--</div>--}}
                                {{--<div class="news_share">--}}
                                    {{--<span>Share:</span>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/facebook.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/twitter.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/instagram.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/dribbble.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/tik-tok.svg"  alt="" /></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}

                    {{--<li class="wow fadeInDown" data-wow-duration="0.8s">--}}
                        {{--<div class="list_inner">--}}
                            {{--<div class="image">--}}
                                {{--<img src="img/thumbs/4-3.jpg" alt="" />--}}
                                {{--<div class="main" data-img-url="img/about/news.png"></div>--}}
                                {{--<a class="full_link" href="#"></a>--}}
                            {{--</div>--}}
                            {{--<div class="details">--}}
                                {{--<div class="extra">--}}
                                    {{--<p class="date">By <a href="#">Alex Watson</a> <span>10 May 2021</span></p>--}}
                                {{--</div>--}}
                                {{--<h3 class="title"><a href="#">Developers watch out for these burnout symptoms</a></h3>--}}
                            {{--</div>--}}
                            {{--<div class="main_content">--}}
                                {{--<div class="descriptions">--}}
                                    {{--<p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>--}}
                                    {{--<p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>--}}
                                    {{--<p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>--}}
                                    {{--<div class="quotebox">--}}
                                        {{--<div class="icon">--}}
                                            {{--<img class="svg" src="img/svg/quote.svg" alt="" />--}}
                                        {{--</div>--}}
                                        {{--<p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>--}}
                                    {{--</div>--}}
                                    {{--<p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>--}}
                                    {{--<p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>--}}
                                {{--</div>--}}
                                {{--<div class="news_share">--}}
                                    {{--<span>Share:</span>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/facebook.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/twitter.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/instagram.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/dribbble.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/tik-tok.svg"  alt="" /></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.2s">--}}
                        {{--<div class="list_inner">--}}
                            {{--<div class="image">--}}
                                {{--<img src="img/thumbs/4-3.jpg" alt="" />--}}
                                {{--<div class="main" data-img-url="img/about/news.png"></div>--}}
                                {{--<a class="full_link" href="#"></a>--}}
                            {{--</div>--}}
                            {{--<div class="details">--}}
                                {{--<div class="extra">--}}
                                    {{--<p class="date">By <a href="#">Bona Green</a> <span>05 April 2021</span></p>--}}
                                {{--</div>--}}
                                {{--<h3 class="title"><a href="#">How to be appreciated for your hard work as a developer </a></h3>--}}
                            {{--</div>--}}
                            {{--<div class="main_content">--}}
                                {{--<div class="descriptions">--}}
                                    {{--<p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>--}}
                                    {{--<p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>--}}
                                    {{--<p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>--}}
                                    {{--<div class="quotebox">--}}
                                        {{--<div class="icon">--}}
                                            {{--<img class="svg" src="img/svg/quote.svg" alt="" />--}}
                                        {{--</div>--}}
                                        {{--<p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>--}}
                                    {{--</div>--}}
                                    {{--<p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>--}}
                                    {{--<p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>--}}
                                {{--</div>--}}
                                {{--<div class="news_share">--}}
                                    {{--<span>Share:</span>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/facebook.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/twitter.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/instagram.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/dribbble.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/tik-tok.svg"  alt="" /></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="wow fadeInDown" data-wow-duration="0.8s" data-wow-delay="0.4s">--}}
                        {{--<div class="list_inner">--}}
                            {{--<div class="image">--}}
                                {{--<img src="img/thumbs/4-3.jpg" alt="" />--}}
                                {{--<div class="main" data-img-url="img/about/news.png"></div>--}}
                                {{--<a class="full_link" href="#"></a>--}}
                            {{--</div>--}}
                            {{--<div class="details">--}}
                                {{--<div class="extra">--}}
                                    {{--<p class="date">By <a href="#">Ave Smith</a> <span>22 March 2021</span></p>--}}
                                {{--</div>--}}
                                {{--<h3 class="title"><a href="#">How designers and developers can collaborate better</a></h3>--}}
                            {{--</div>--}}
                            {{--<div class="main_content">--}}
                                {{--<div class="descriptions">--}}
                                    {{--<p class="bigger">Just because we can't get out and about like we normally would, doesn’t mean we have to stop taking pictures. There’s still plenty you can do, provided you're prepared to use some imagination. Here are a few ideas to keep you shooting until normal life resumes.</p>--}}
                                    {{--<p>Most photographers love to shoot the unusual, and you don’t get much more unusual than These Unprecedented Times. Right now everything counts as out of the ordinary. There are a number of remarkable things about these lockdown days that are worth photographing now so we can remember them when it is all over.</p>--}}
                                    {{--<p>Streets empty that are usually busy are remarkable and can evoke the sense of historical pictures from before the invention of the motorcar. Other things that are different at the moment will be queues to get into stores and the lines marked out on the floor to show how far apart we should be.</p>--}}
                                    {{--<div class="quotebox">--}}
                                        {{--<div class="icon">--}}
                                            {{--<img class="svg" src="img/svg/quote.svg" alt="" />--}}
                                        {{--</div>--}}
                                        {{--<p>Most photographers find it hard to see interesting pictures in places in which they are most familiar. A trip somewhere new seems always exactly what our photography needed, as shooting away from home consistently inspires us to new artistic heights.</p>--}}
                                    {{--</div>--}}
                                    {{--<p>Pretend everything is new and that you haven’t seen it before, and then you will be free to notice the leading lines, the places where one edge meets another in delightful geometric harmony, and how the ordinary things in the kitchen are transformed when the light is on or off.</p>--}}
                                    {{--<p>The trick here is to look slowly, and then look again. Take the time to look in detail and to look at the same thing from different angles, with different light, long lenses and wide lenses. Then move to the left a bit. You may never feel the need to leave the house again.</p>--}}
                                {{--</div>--}}
                                {{--<div class="news_share">--}}
                                    {{--<span>Share:</span>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/facebook.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/twitter.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/instagram.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/dribbble.svg" alt="" /></a></li>--}}
                                        {{--<li><a href="#"><img class="svg" src="img/svg/social/tik-tok.svg"  alt="" /></a></li>--}}
                                    {{--</ul>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</li>--}}
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


