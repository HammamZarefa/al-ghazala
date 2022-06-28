@extends('layouts.front')

@section('content')
<main id="main">
    <div class="container-fluid parallax-three modul-bt-one" data-speed="5" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="big-title">
                        <h1>Portfolio Single Page</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog -->
    <div class="container-fluid modul-bt-one">
        <div class="container modul-space-twentytwo">
            <div class="row">
                <div class="col-md-8">
                    <!-- Post Detail -->
                    <div class="post-detail">
                        <!-- Image -->
                        <div class="tp-banner-container">
                            <div class="tp-banner">
                                <ul>
                                    <!-- SLIDE ONE  -->
                                    <li data-transition="boxfade" data-slotamount="5" data-masterspeed="1000">
                                        <!-- MAIN IMAGE -->
                                        <img src="{{ asset('storage/'.$portfolio->cover) }}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                    </li>
                                    <li data-transition="boxfade" data-slotamount="5" data-masterspeed="1000">
                                        <!-- MAIN IMAGE -->
                                        <img src="{{ asset('storage/'.$portfolio->mobileImage) }}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                    </li>
                                </ul>
                                <div class="tp-bannertimer"></div>
                            </div>
                        </div>

                        <div class="blog-slider-list post-page-list portfolio-single-title">
                            <h1>{{$portfolio->name}}</h1>
                        </div>

                        <p>{{$portfolio->desc}}
                        </p>
                    </div>
                    <div class="clearfix"></div>

                    <!-- Share Post -->
                    <div class="post-share">
                        <h5>SHARE PORTFOLIO:</h5>
                        <hr>
                        <a href="#" class="btn btn-default share-post">
                            <i class="fa fa-facebook fa-lg"></i>
                        </a>
                        <a href="#" class="btn btn-default share-post">
                            <i class="fa fa-twitter fa-lg"></i>
                        </a>
                        <a href="#" class="btn btn-default share-post">
                            <i class="fa fa-linkedin fa-lg"></i>
                        </a>
                        <a href="#" class="btn btn-default share-post">
                            <i class="fa fa-tumblr fa-lg"></i>
                        </a>
                        <a href="#" class="btn btn-default share-post">
                            <i class="fa fa-flickr fa-lg"></i>
                        </a>
                        <a href="#" class="btn btn-default share-post">
                            <i class="fa fa-github-alt fa-lg"></i>
                        </a>
                        <a href="#" class="btn btn-default share-post">
                            <i class="fa fa-google-plus fa-lg"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">

                    <!-- Social Sidebar -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="hero-widget well-sm">
                                <div class="icon">
                                    <i class="fa fa-trophy"></i>
                                </div>
                                <div class="text">
                                    <var>914.180</var>
                                    <label class="text-muted">Download</label>
                                </div>
                                <div class="options">
                                    <a href="#" class="btn btn-primary btn-block">
                                        Download</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="hero-widget well-sm">
                                <div class="icon">
                                    <i class="fa fa-ticket"></i>
                                </div>
                                <div class="text">
                                    <var>22.614</var>
                                    <label class="text-muted">Sales</label>
                                </div>
                                <div class="options">
                                    <a href="#" class="btn btn-primary btn-block">
                                        Purchase</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pool Sidebar -->
                    <div class="sidebar">
                        <h6>
                            <i class="fa fa-flask sidebar-icon"></i>Job Options</h6>
                        <div class="sidebar-categories">
                            <strong>Logo</strong>
                            <span class="pull-right">80%</span>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 80%;"></div>
                            </div>
                            <strong>PHP Code</strong>
                            <span class="pull-right">60%</span>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 60%;"></div>
                            </div>
                            <strong>Web Design</strong>
                            <span class="pull-right">75%</span>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 75%;"></div>
                            </div>
                            <strong>CSS3</strong>
                            <span class="pull-right">35%</span>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 35%;"></div>
                            </div>
                            <strong>HTML5</strong>
                            <span class="pull-right">45%</span>
                            <div class="progress progress-striped active">
                                <div class="progress-bar" style="width: 45%;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Tag Cloud -->
                    <div class="sidebar">
                        <h6>
                            <i class="fa fa-tags sidebar-icon"></i>Job Tags</h6>

                        <ul class="nav nav-list tag-cloud sidebar-categories-two">
                            <li>
                                <a href="#Fakelink" class="badge tag-cloud-tags">Web</a>
                            </li>
                            <li>
                                <a href="#Fakelink" class="badge tag-cloud-tags">Rap</a>
                            </li>
                            <li>
                                <a href="#Fakelink" class="badge tag-cloud-tags">Pop</a>
                            </li>
                            <li>
                                <a href="#Fakelink" class="badge tag-cloud-tags">Design</a>
                            </li>
                            <li>
                                <a href="#Fakelink" class="badge tag-cloud-tags">Wordpress Themes</a>
                            </li>
                            <li>
                                <a href="#Fakelink" class="badge tag-cloud-tags">Rock</a>
                            </li>
                            <li>
                                <a href="#Fakelink" class="badge tag-cloud-tags">Jazz</a>
                            </li>
                            <li>
                                <a href="#Fakelink" class="badge tag-cloud-tags">PSD Design</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Page Navi -->
    <div class="container-fluid module-background-one modul-bt-one">
        <div class="container modul-space-fifteen">
            <div class="row">
                <div class="col-md-12 page-navi">
                    <div class="pagination pagination-default pull-left">
                        <a href="#fakelink" class="btn btn-default previous">
                            <span class="fui-arrow-left"></span>
                            PREV PORTFOLIO
                        </a>
                        <a href="#fakelink" class="btn btn-default next">
                            NEXT PORTFOLIO
                            <span class="fui-arrow-right"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

  </main><!-- End #main -->
@endsection
