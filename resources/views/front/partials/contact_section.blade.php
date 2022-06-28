<section id="contact" class="section-main slide-menu text-edit">
    <div class="container">
        <div class="row">
            <div class="col-md-12 column">
                <div class="slogan">
                    <h1>Contact Us</h1>
                </div>
            </div>
            <div class="col-md-12 column">
                <div class="slogan">
                    <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia minima at odit eius omnis quasi officiis. <br />Mollitia eligendi veritatis neque, provident officia hic.
                    </h6>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact-info" class="bg_color gap-bottom section-main slide-menu text-edit">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-3">
                <div class="contact-info">
                    <div class="tb">
                        <div class="tb-cell">
                            <img src="{{asset('front/images/logo.png')}}" width="150px">
                            <span style="font-size: large">AL Ghazala General Trading</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="contact-info">
                    <div class="tb">
                        <div class="tb-cell">
                            <h5>PHONE</h5>
                            <span >123-456-789</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="contact-info">
                    <div class="tb">
                        <div class="tb-cell">
                            <h5>EMAIL</h5>
                            <span><a href="mailto:support@studio-themes.com">info@al-gazala.com.com</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-3">
                <div class="contact-info">
                    <div class="tb">
                        <div class="tb-cell">
                            <h5>ADDRESS</h5>
                            <span>Street 1234</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="contact-form" class="gap-bottom slide-menu section-main text-edit">
    <div class="container">
        <div class="row">
            <div id="contact-form-script" class="my-animation fadeInRight">
                <form method="post" id="form-ajax" action="#" class="form-group">

                    <div class="col-sm-6 col-lg-6">
                                <textarea onfocus="if (this.value == this.defaultValue)
                                            this.value = '';" onblur="if (this.value == '')
                                                        this.value = this.defaultValue;" id="message-contact" name="message" class="form-control">Your message...</textarea>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <input type="text" name="personal" value="Your name*" onfocus="if (this.value == '' || this.value == 'Your name*')
                                            this.value = ''" onblur="if (this.value == '') {
                                                        this.value = this.defaultValue
                                                    }" onkeyup="keyUp();" id="personal" class="form-control">
                        <input type="text" name="email" value="Your email*" onfocus="if (this.value == '' || this.value == 'Your email*')
                                            this.value = ''" onblur="if (this.value == '') {
                                                        this.value = this.defaultValue
                                                    }" onkeyup="keyUp();" id="email" class="form-control">
                        <input type="text" name="website" value="Your website" onfocus="if (this.value == '' || this.value == 'Your website')
                                            this.value = ''" onblur="if (this.value == '') {
                                                        this.value = this.defaultValue
                                                    }" onkeyup="keyUp();" id="website" class="form-control">
                    </div>
                    <div class="clear"></div>

                    <div class="col-md-12">
                        <input type="submit" value="send message" class="contact_button">
                        <img src="img/bx_loader.gif" id="send_wait" alt="" />
                    </div>


                    <input type="hidden" name="my_email" value="support@studio-themes.com">
                </form>
                <div class="clearfix"></div>
            </div>
            <div id="contact-success"><h4 class="contact-text">Thank you for your message.</h4></div>
        </div>
    </div>
</section>
<section id="google-map" class="slide-menu gap-1 text-edit">
    <div class="google-map">
        <div class="map-field">
            <i class="fa fa-angle-down"></i>
            Locate us on the map
        </div>
        <div id="map-canvas">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7216.09806142058!2d55.31087239985965!3d25.268936020531164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sar!2snl!4v1645531579098!5m2!1sar!2snl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</section>