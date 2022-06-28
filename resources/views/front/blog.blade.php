@extends('layouts.front')

@section('title')
Blog -
@php
    $no=0;
@endphp
@foreach($posts as $post)
    {{$no += $post->views}}

@endforeach
@endsection

@section('content')
<main id="main">
{{--<div class="sidebar">--}}
{{--  <h3 class="sidebar-title">Categories</h3>--}}
{{--  <div class="sidebar-item categories">--}}
{{--    <ul>--}}
{{--      @foreach ($categories as $category)--}}
{{--      <li><a href="{{ route('category',$category->slug) }}">{{ $category->name }} <span>({{ $category->count() }})</span></a></li>--}}
{{--      @endforeach--}}
{{--    </ul>--}}

{{--  </div><!-- End sidebar categories-->--}}

{{--  <h3 class="sidebar-title">Recent Posts</h3>--}}
{{--  <div class="sidebar-item recent-posts">--}}

{{--    @foreach ($recent as $recent)--}}
{{--    <div class="post-item clearfix">--}}

{{--      <h4><a href="{{route('blogshow',$recent->slug)}}">{{ $recent->title }}</a></h4>--}}
{{--      <time datetime="2020-01-01">{{ Carbon\Carbon::parse($recent->created_at)->format("d F, Y") }}</time>--}}
{{--    </div>--}}
{{--    @endforeach--}}

{{--  </div><!-- End sidebar recent posts-->--}}

{{--  <h3 class="sidebar-title">Tags</h3>--}}
{{--  <div class="sidebar-item tags">--}}
{{--    <ul>--}}
{{--      @foreach ($tags as $tag)--}}
{{--       <li><a href="{{ route('tag',$tag->slug) }}">{{ $tag->name }}</a></li>--}}
{{--      @endforeach--}}
{{--    </ul>--}}

{{--  </div><!-- End sidebar tags-->--}}

{{--</div><!-- End sidebar -->--}}


    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <!-- Blog Header -->
        <div class="container-fluid parallax-three modul-bt-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="big-title">
                            <h1>Blog Page</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog -->
        <div class="container-fluid modul-bt-one">
            <div class="container modul-space-fourteen">
                <div class="row">
                    <!-- Blog Post -->
                    <div class="col-md-8">
                        @foreach($posts as $post)
                        <div class="blog-slider-two">
                            <div class="grid cs-style-3">
                                <figure>
                                    <div class="blog-date-circle">
                                        <h5>{{$post->views}}</h5>
                                        <p>views</p>
                                    </div>
                                    <img src="{{ asset('storage/'.$post->cover) }}" class="blog-slider-list-img" alt="img04">
                                    <figcaption>
                                        <div class="image-buttons-three">
                                            <a data-toggle="modal" data-target="#view-post-image" class="btn btn-primary">
                                                <i data-toggle="tooltip" data-placement="top" title="Look Photo" class="fa fa-camera"></i>
                                            </a>
                                            <a data-toggle="modal" data-target="#view-post-video" class="btn btn-primary">
                                                <i data-toggle="tooltip" data-placement="top" title="View Video" class="fa fa-video-camera"></i>
                                            </a>
                                            <a data-toggle="modal" data-target="#view-post-music" class="btn btn-primary">
                                                <i data-toggle="tooltip" data-placement="top" title="Listen Music" class="fa fa-music"></i>
                                            </a>
                                            <a class="btn btn-primary">
                                                <i data-toggle="tooltip" data-placement="top" title="Read More" class="fa fa-plus"></i>
                                            </a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="blog-slider-list">
                                <h3>
                                    <a href="{{route('blogshow',$post->slug)}}">{{$post->title}}</a>
                                </h3>
                                <div class="blog-info hidden-xs">
                                    <small>
                                        <i class="fa fa-pencil blog-mini-icon"></i>by
                                        <a href="#">{{$post->user->name}}</a>
                                        <i class="fa fa-calendar"></i><time datetime="2020-01-01">{{ Carbon\Carbon::parse($post->created_at)->format("d F, Y") }}</time>
                                        <i class="fa fa-tag blog-mini-icon-two"></i>
                                        @foreach($post->tags as $tag)
                                        <a href="#">{{$tag->slug}}</a>,
                                        @endforeach
                                    </small>
                                </div>
                            {!! $post->body  !!}
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Sidebar -->
                    <div class="col-md-4">

                        <!-- Social Sidebar -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="hero-widget">
                                    <div class="icon">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                    <div class="text">

                                        <var>{{$no}}</var>
                                        <label class="text-muted">Views</label>
                                    </div>
{{--                                    <div class="options">--}}
{{--                                        <a href="#" class="btn btn-primary btn-block">--}}
{{--                                            Like</a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="hero-widget">
                                    <div class="icon">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="text">
                                        <var>2</var>
                                        <label class="text-muted">Authors</label>
                                    </div>
{{--                                    <div class="options">--}}
{{--                                        <a href="#" class="btn btn-primary btn-block">--}}
{{--                                            Follow</a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar">
                            <h6>
                                <i class="fa fa-align-justify sidebar-icon"></i>News Categories</h6>
                            <ul class="nav nav-list sidebar-categories">

                                @foreach($categories as $category)
                                <li>
                                    <a href="#">
                                       {{$category->name}}
                                        <span class="badge pull-right">{{count($category->posts)}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>

                        <!-- Archives Sidebar -->
                        <div class="sidebar">
                            <h6>
                                <i class="fa fa-calendar-o sidebar-icon"></i>Recent Posts</h6>
                            <ul class="nav nav-list sidebar-categories">
                                @foreach($recent as $recent)
                                <li>
                                    <a href="#">
                                        {{$recent->title}}
                                        <span class="badge pull-right">{{$recent->views}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>



                        <!-- Tag Cloud -->
                        <div class="sidebar">
                            <h6>
                                <i class="fa fa-tags sidebar-icon"></i>Tags Cloud</h6>

                            <ul class="nav nav-list tag-cloud sidebar-categories-two">
                                @foreach($tags as $tag)
                                <li>
                                    <a href="#Fakelink" class="badge tag-cloud-tags">{{$tag->name}}</a>
                                </li>
                                @endforeach
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
                        <div class="pagination pagination-default">
                            <a href="#fakelink" class="btn btn-default previous">
                                <span class="fui-arrow-left"></span>
                                OLDER
                            </a>
                            <ul>
                                <li>
                                    <a href="#fakelink">1</a>
                                </li>
                                <li>
                                    <a href="#fakelink">2</a>
                                </li>
                                <li>
                                    <a href="#fakelink">3</a>
                                </li>
                                <li>
                                    <a href="#fakelink">4</a>
                                </li>
                                <li>
                                    <a href="#fakelink">5</a>
                                </li>
                            </ul>
                            <a href="#fakelink" class="btn btn-default next">
                                NEWER
                                <span class="fui-arrow-right"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Picture Modal Box -->
        <div class="modal fade" id="view-post-image" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Image Title</h4>
                    </div>
                    <div class="modal-body">
                        <img src="images/theme/p9.jpg" class="portlio-list-img" alt="img04">
                    </div>
                    <div class="modal-footer">
                        <a href="#fakelink" class="btn btn-default">
                            <span class="fui-googleplus"></span>
                        </a>
                        <a href="#fakelink" class="btn btn-default">
                            <span class="fui-facebook"></span>
                        </a>
                        <a href="#fakelink" class="btn btn-default">
                            <span class="fui-twitter"></span>
                        </a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Video Modal Box -->
        <div class="modal fade" id="view-post-video" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Video Title</h4>
                    </div>
                    <div class="modal-body">
                        <iframe src="http://player.vimeo.com/video/23534361?title=0&amp;byline=0&amp;portrait=0"  class="iframe-options"></iframe>
                    </div>
                    <div class="modal-footer">
                        <a href="#fakelink" class="btn btn-default">
                            <span class="fui-googleplus"></span>
                        </a>
                        <a href="#fakelink" class="btn btn-default">
                            <span class="fui-facebook"></span>
                        </a>
                        <a href="#fakelink" class="btn btn-default">
                            <span class="fui-twitter"></span>
                        </a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Music Modal Box -->
        <div class="modal fade" id="view-post-music" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Music Title</h4>
                    </div>
                    <div class="modal-body">
                        <iframe class="iframe-options-two" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/2384806&amp;color=179ce3&amp;auto_play=false&amp;show_artwork=false"></iframe>
                    </div>
                    <div class="modal-footer">
                        <a href="#fakelink" class="btn btn-default">
                            <span class="fui-googleplus"></span>
                        </a>
                        <a href="#fakelink" class="btn btn-default">
                            <span class="fui-facebook"></span>
                        </a>
                        <a href="#fakelink" class="btn btn-default">
                            <span class="fui-twitter"></span>
                        </a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->
@endsection
