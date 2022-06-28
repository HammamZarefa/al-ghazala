@extends('layouts.front')

@section('content')


            <!-- ======= contact  Section ======= -->
            <section id="contact" class="contact">
{{--                <div class="container-fluid">--}}
{{--                    <iframe src="http://mapsengine.google.com/map/embed?mid=z-InZ1PKw-Cc.kAPRVIdwLHVA" class="contact-map"></iframe>--}}
{{--                </div>--}}

                <!-- Contact -->
                <div class="container-fluid modul-bt-one">
                    <div class="container modul-space-seventeen">
                        <div class="row">

                            <!-- Services One -->
                            <div class="col-xs-12 col-sm-6 col-md-3 modul-phone">
                                <div class="modul-services-one mso-icon">
                                    <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space">
                                        <i class="fa fa-location-arrow fa-2x hi-icon"></i>
                                    </div>
                                    <h6>Adres</h6>
                                    <p>Cras eget mattis justo. Fusce eget viendose commodo enim, quis.</p>
                                </div>
                            </div>

                            <!-- Services Two -->
                            <div class="col-xs-12 col-sm-6 col-md-3 modul-phone">
                                <div class="modul-services-one mso-icon">
                                    <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space">
                                        <i class="fa fa-phone fa-2x hi-icon"></i>
                                    </div>
                                    <h6>Phone Number</h6>
                                    <p>+90 555 444 333
                                        <br>+90 555 444 222</p>
                                </div>
                            </div>

                            <!-- Services Three -->
                            <div class="col-xs-12 col-sm-6 col-md-3 modul-phone">
                                <div class="modul-services-one mso-icon">
                                    <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space">
                                        <i class="fa fa-envelope fa-2x hi-icon"></i>
                                    </div>
                                    <h6>E-Mail</h6>
                                    <p>john.doe@nillbox.com.tr
                                        <br>marry.doe@nillbox.com.tr</p>
                                </div>
                            </div>

                            <!-- Services Four -->
                            <div class="col-xs-12 col-sm-6 col-md-3 modul-phone">
                                <div class="modul-services-one mso-icon">
                                    <div class="hi-icon-wrap hi-icon-effect-9 hi-icon-effect-9b mso-icon-space">
                                        <i class="fa fa-anchor fa-2x hi-icon"></i>
                                    </div>
                                    <h6>Other Web Page</h6>
                                    <p>www.johndoesmith.com
                                        <br>www.marrydoe.com</p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid parallax-four modul-bt-one" data-speed="5" data-type="background">
                    <div class="container modul-space-eightteen">
                        <div class="row">

                            <div class="col-md-12">
                                <h4>CONTACT FORM:</h4>
                                <hr>
                                <!-- Leave Comment -->
                                <div class="leave-comment">
                                    <div class="row comment-forms">
                                        <div class="col-xs-12 col-sm-12 col-md-6">
                                            <div class="form-group">
                                                <div class="input-group input-group">
                                        <span class="input-group-addon">
                                            <span class="fui-user"></span>
                                        </span>
                                                    <input class="form-control" id="prependedInput-01" type="text" placeholder="Name:">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group input-group">
                                        <span class="input-group-addon">
                                            <span class="fui-mail"></span>
                                        </span>
                                                    <input class="form-control" id="prependedInput-02" type="text" placeholder="E-Mail:">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group input-group">
                                        <span class="input-group-addon">
                                            <span class="fui-link"></span>
                                        </span>
                                                    <input class="form-control" id="prependedInput-03" type="text" placeholder="Web:">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-6">

                                            <div class="form-group">
                                                <textarea rows="8" placeholder="Add Message..." class="form-control"></textarea>
                                            </div>
                                            <div class="form-group pull-right">
                                                <a href="#fakelink" class="btn btn-info">Send Message</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </section>
      <!-- End contact Section -->

@endsection
