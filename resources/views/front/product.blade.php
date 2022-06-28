@extends('layouts.front')

@section('content')
<main id="main">



    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
          <!-- Big Icon -->
          <div class="container-fluid parallax-four modul-bt-one" data-speed="10" data-type="background" style="background: transparent;">
              <div class="container modul-big-space phone-space-one">
                  <div class="row">

                      <!-- Services One -->
                      @foreach ($products as $products)
                      <div class="col-xs-12 col-sm-4 col-md-4" style="margin-bottom: 126px;">
                          <div class="modul-services-one mso-icon-three modul-phone-two modul-bo-five modul-bb-bold-five">
                              <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space mso-position">
                                  <i class="fa fa-rocket  fa-2x hi-icon"></i>
                              </div>
                              <h6>{{ $products->name }}</h6>
                              <p class="ms-seven-p">{{ $products->link }}</p>
                              <a href="{{route('productshow',$products->name)}}" class="btn btn-primary btn-sm bsm-seven">Show More</a>
                          </div>
                      </div>
                      @endforeach


                  </div>
              </div>
          </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->
@endsection
