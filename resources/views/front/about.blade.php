@extends('layouts.front')

@section('content')


      <!-- ======= About Us Section ======= -->
      <section id="about-us" class="about-us">




          <!-- About Us -->
          <div class="container-fluid modul-bt-one">
              <div class="container modul-space-twentythree">
                  <div class="row">
                      <div class="col-md-6">
                          <!-- Post Detail -->
                          <div class="post-detail phone-about-two">
                              <div class="blog-slider-list post-page-list aboutus-single-title">
                                  <h1>{{$about->title}}</h1>
                              </div>

                              <p>{{$about->subject}}
                              </p>
                              <p>{{$about->desc}}
                              </p>
                          </div>
                          <div class="clearfix"></div>
                      </div>
                      <div class="col-md-6">
                          <!-- Post Detail -->
                          <div class="post-detail">
                              <!-- Image -->
                              <div class="tp-banner-container">
                                  <div class="tp-banner">
                                      <ul>
                                          <!-- SLIDE ONE  -->
                                          @foreach($banner as $banner)
                                          <li data-transition="boxfade" data-slotamount="5" data-masterspeed="1000">
                                              <!-- MAIN IMAGE -->
                                              <img src="{{ asset('storage/'.$banner->cover) }}" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat" width="800px" height="500px">
                                          </li>
                                          @endforeach

                                      </ul>
                                      <div class="tp-bannertimer"></div>
                                  </div>
                              </div>
                          </div>
                          <div class="clearfix"></div>
                      </div>
                  </div>
              </div>
          </div>



          <!-- Product Modul -->
          <div class="container-fluid modul-bt-one">
              <div class="container modul-space-two">
                  <div class="row">
                  @foreach($product as $products)
                      <!-- Services One -->
                          <div class="col-xs-12 col-sm-6 col-md-3 modul-phone">
                              <div class="modul-services-one mso-icon">
                                  <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space">
                                      <i class="fa fa-rocket fa-2x hi-icon"></i>
                                  </div>
                                  <h6>{{$products->name}}</h6>
                                  <p>{{$products->link}}</p>
                                  <a class="btn btn-primary btn-sm">Discovery</a>
                              </div>
                          </div>
                      @endforeach


                  </div>
              </div>
          </div>

      </section>
      <!-- End About Us Section -->





@endsection








