(function($) {
"use strict";


/* ============== DETECT MOBILE DEVICES ============== */
var isMobile = {
    Android: function() {
        return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
        return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
        return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
        return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
        return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
        return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
};


/* ============== PRELOADER ============== */
jQuery(window).load(function() {
	$('#preloader').fadeOut(300);
});

jQuery(document).ready(function() {
/* ============== STICKY MENU ============== */
$(".sticky-menu").sticky({topSpacing:0});


/* ============== VIDEO BG ============== */
$('#video-bg').appear(function() {
        if (isMobile.any()) { jQuery('#video-bg').remove(); jQuery('#video-section').addClass('thumb-video');  }
        else jQuery('#video-bg').get(0).play();
    });


/* ======== CURRENT MENU ITEM ======== */		
	$(document).scroll(function(){
		$.currentItem();
	});

	$(document).ready(function(){
		$.currentItem();
	});
	
/* ======== SCROLL MENU ======== */
		var height_menu = $("#nav-main").css("height");
		height_menu = parseInt(height_menu,10);
		$('.sticky-menu').localScroll({offset: {top: -height_menu},duration: 1000});
		$('.nosticky').localScroll({offset: {top: 0},duration: 1000});
		$('#mobile-menu ul').localScroll({offset: {top: 0},duration: 1000});
		
		
		if(jQuery(document).scrollTop() > 0 || (jQuery('.onepage').length == 0 && jQuery('.single-portfolio').length == 0)) {
			jQuery('#nav-main').addClass('menu-style');
			jQuery('#logo img').css({
				position: 'static',
				visibility: 'visible',
			});
			jQuery('#logo-white img').css({
				position: 'absolute',
				visibility: 'hidden',
			});
		}
		else {
			jQuery('#nav-main').removeClass('menu-style');
			jQuery('#logo img').css({
				position: 'absolute',
				visibility: 'hidden',
			});
				jQuery('#logo-white img').css({
					position: 'static',
					visibility: 'visible',
				});
		}
		jQuery(window).scroll(function() {
			if(jQuery(document).scrollTop() > 0 || (jQuery('.onepage').length == 0 && jQuery('.single-portfolio').length == 0)) {
				jQuery('#nav-main').addClass('menu-style');
				jQuery('#logo img').css({
				position: 'static',
				visibility: 'visible',
				});
				jQuery('#logo-white img').css({
				position: 'absolute',
				visibility: 'hidden',
				});
			}
			else {
				jQuery('#nav-main').removeClass('menu-style');
				jQuery('#logo img').css({
				position: 'absolute',
				visibility: 'hidden',
			});
				jQuery('#logo-white img').css({
				position: 'static',
				visibility: 'visible',
			});
			}
		});
		
		
		jQuery('#desktop-menu li').hover(function() {
			jQuery('> .sub-menu', this).stop(true, true).fadeIn(300);
		}, function() {
			jQuery('> .sub-menu', this).stop(true, true).fadeOut(300);
		});
		
		var menu_h = jQuery('#nav-main').css('height');
		if(jQuery('#header-portfolio').length > 0) var target_scroll = jQuery('#header-portfolio').offset().top;
		jQuery('.scroll-button a').click(function() {
			jQuery("html, body").animate({scrollTop: target_scroll  -(parseInt(menu_h,10)) },1000);
			return false;
		});

/* ============== REVOLUTION SLIDER ============== */
 jQuery('.banner').revolution({
         delay:9000,
         startWithSlide:0,
         fullScreen:"on",
		 autoHeight:"off",
		 startwidth:960,
         startheight:500,
         shadow:0
      });

/* ======= SLIDER HEADER ======= */	
		 jQuery('#header-slider').bxSlider({
			mode: 'vertical',
			speed: 1000,
			responsive: true,
			auto: true,
			pager: false,
			adaptiveHeight: true,
			slideMargin: 0,
			controls: false
		});

jQuery('.fit').fitVids();

/* ======= SLIDER TEAM ======= */	
		 jQuery('#team-slider').slick({
		  infinite: false,
		  slidesToShow: 3,
		  slidesToScroll: 1,
		  responsive: [
			{
			  breakpoint: 991,
			  settings: {
				slidesToShow: 2
			  }
			},
			{
			  breakpoint: 767,
			  settings: {
				slidesToShow: 1
			  }
			}
		  ]
		});
/* ======= EFFECTS APPEAR && CSS3 CLASSES ======= */
 jQuery('.my-animation').appear(function() { 
		if(!isMobile.any()) jQuery(this).addClass('animated');
     }); 	


		
		
/* ======= COUNTDOWN ======= */	
	jQuery('.number-container').appear(function() {
		var count_element = parseInt(jQuery(".number", this).html(), 10);

		jQuery('.number', this).countTo({
			from: 0,
			to: count_element,
			speed: 2500,
			refreshInterval: 50,
		});
	});	

});	

/* ======= BLOG SLIDESHOW ======= */
	jQuery('.media-post ul').responsiveSlides({
		nav: true,
		prevText: "<i class='fa fa-angle-left'></i>",   // String: Text for the "previous" button
		nextText: "<i class='fa fa-angle-right'></i>", 
	});

/* ======= ISOTOPE ======= */
             
      var $container = $('.portfolio-container');
      var $containerProxy = $container.clone().empty().css({ visibility: 'hidden' }); 
	  var colWidth;
    
        $container.after( $containerProxy );  


      $(window).resize( function() {
        colWidth = Math.floor( $containerProxy.width() / 4 );
        $container.css({
            width: colWidth * 4
        })
        .isotope({
          resizable: false,
          itemSelector: '.item',
          masonry: {
            columnWidth: colWidth
          }
        });
      }).resize();
                
                
		$('.portfolio-categories ul li a').click(function(){
			$('.portfolio-categories ul li .current').removeClass('current');
			$(this).addClass('current');
	 
			var selector = $(this).attr('data-filter');
			$container.isotope({
				filter: selector,
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
				}
			});
			return false;
		}); 

		$(window).load(function() {
			$container.isotope('reLayout');
		});

		var filtertoggle = jQuery('body');

		$(window).load(function() {
			$container.isotope('reLayout');
					$(function(){
						setTimeout(function() {
							$container.isotope('reLayout');
						}, filtertoggle.hasClass("") ? 755: 755);
					});	
		});
		

		$(window).resize(function() {
			$container.isotope('reLayout');
					$(function(){
						setTimeout(function() {
							$container.isotope('reLayout');
						}, filtertoggle.hasClass("") ? 755: 755);
					});		
		});

/* ============== GOOGLE MAP ============== */

		jQuery('.map-field').click(function() {

			if(jQuery(this).parent().hasClass('open-map')){
			 jQuery(this).parent().removeClass('open-map');
			 $('.map-field').html('<div class="animated fadeIn"><i class="fa fa-angle-down"></i>Find us on the map</div>');

			}

			else
			{
				jQuery(this).parent().addClass('open-map');
				$('.map-field').html('<div class="animated fadeIn"><i class="fa fa-angle-up"></i>Find us on the map</div>');

			} 

		});
		
/* ============== TWITTER ============== */
		jQuery.get("files/tweets-user.php")		
					.success(function(result) {
					 jQuery("#twitter-plugin").html(result);
					  jQuery("#twitter-plugin ul").fadeIn(500);
					   })
					.error(function(jqXHR, textStatus, errorThrown) {
					 jQuery("#twitter-plugin").html('Error. Check data account.')});

/* ============== MOBILE MENU ============== */
            jQuery('#mobile-menu-button').click(function(){
               if(jQuery('#mobile-menu').css('display') == 'block') jQuery('#mobile-menu').slideUp(300);
               else jQuery('#mobile-menu').slideDown(300);
            });
			
			jQuery('#mobile-menu a').click(function(){
				var parent_menu = jQuery(this).parent();
				if(jQuery('> .sub-menu', parent_menu).length == 0) jQuery('#mobile-menu').slideUp(300);
			});
			
			// Mobile Menu
		jQuery('#mobile-menu li').each(function() {
			if(jQuery('.sub-menu', this).length > 0) {
				jQuery(this).append('<i class="fa fa-angle-down"></i>');
			}
		});
		
		jQuery('#mobile-menu li a').click(function() {
			var parent_mobile = jQuery(this).parent();
			if(jQuery(this).attr('href') == '#') {
				if(jQuery('> .sub-menu', parent_mobile).length > 0 && jQuery('> .sub-menu', parent_mobile).css('display') == 'none') {
					jQuery('> .sub-menu', parent_mobile).slideDown(300);
					return false;
				}
				else if(jQuery('> .sub-menu', parent_mobile).length > 0 && jQuery('> .sub-menu', parent_mobile).css('display') == 'block') {
					jQuery('> .sub-menu', parent_mobile).slideUp(300);
					return false;
				}
				else {
					return false;
				}
				
			}
		});

/* ======= CLEAR AJAX FORM ======= */
		if($("#form-ajax").is('*')) {
			$('#form-ajax')[0].reset();
		}
		
/* ======= VALIDATE FORM BEFORE SEND ======= */
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

		var standard_pt = $("#form-ajax #personal").val();
		var standard_et = $("#form-ajax #email").val();
		var standard_wt = $("#form-ajax #website").val();
		var standard_mt = $("#form-ajax #message-contact").val();
		
		$("#form-ajax #personal").blur(function() {
			if($(this).val() === '' || $(this).val() === standard_pt) {
				$(this).addClass('error-input');
			}
			else {
				$(this).removeClass('error-input');
			}
		});
		
		$("#form-ajax #message-contact").blur(function() {
			if($(this).val() === '' || $(this).val() === standard_mt) {
				$(this).addClass('error-input');
			}
			else {
				$(this).removeClass('error-input');
			}
		});
		
		$("#form-ajax #email").blur(function() {
			if($(this).val() === '' || !emailReg.test($.trim($(this).val())) || $(this).val() === standard_et) {
				$(this).addClass('error-input');
			}
			else {
				$(this).removeClass('error-input');
			}
		});
		
/* ======= CONTACT FORM AJAX ======= */
		$('#form-ajax').submit(function() {
			var errors = false;
			var email_field = $("#email");
			var personal_field = $("#personal");
			var message_text = $("#message-contact");
			var website_field = $("#website");
                        var form_url = 'files/contact-form.php';
			
            if(!emailReg.test($.trim(email_field.val()))) {
				email_field.addClass("error-input");
				errors = true;
			}
			
			if(personal_field.val() === '' || personal_field.val() === standard_pt) {
				personal_field.addClass("error-input");
				errors = true;
			}
			
			if(message_text.val() === '' || message_text.val() === standard_mt) {
				message_text.addClass("error-input");
				errors = true;
			}

			
			if(errors === false) {
				jQuery('#send_wait').css('display','block');
				jQuery('#form-ajax input[type="submit"]').css('display','none');
				if(website_field.val() === standard_wt) {
					website_field.val('');
				}
				message_text.removeClass("error-input");
				email_field.removeClass("error-input");
				personal_field.removeClass("error-input");
				var formInput = $(this).serialize();
				
				$.ajax({  
							type: "POST",  
							url: form_url,
							data: formInput,  
							success: function(response) {
								jQuery('#send_wait').css('display','none');
								if (response == "")
								{
									$("#contact-form-script").slideUp(200);
									$("#contact-success").slideDown(1000);
									
								}

								else
								{
									alert('Problem with send email');
									jQuery('#form-ajax input[type="submit"]').css('display','block');
								}
							}
						});  
			}
			return false;
		});
/* ======= CLIENTS ======= */
                jQuery('#client-carousel').owlCarousel({
                    items: 4
                });
		
		

		$('#load-more').click(function () {
			var html_isotope = $('#more-items').html();
			var $newItems = $(html_isotope);
			//var $newItems = $('<div class="digitalart web item"><a href="works/works11.html" class="portfolio-box"><img src="img/portfolio/11.jpg" class="img-responsive" alt="" />  <div><div class="tb"><div class="tb-cell"><i class="icon-picture"></i><p>Portfolio</p><span>Web / Digital Art</span></div></div></div></a></div>');
			$container.isotope( 'insert', $newItems );
			$('#more-items').html('');
			$(this).remove();
			
		});
		
/* ======= SHORTCODES ======= */	
		
		// Alerts
		$(".close-alert").click(function() {
			$(this).parent().hide(400);
		});
		
		
		// Tabs
		$('.tabs-menu').each(function() {
            var $ul = $(this);
            var $li = $ul.children('li');
			
            $li.each(function() { 
                var $trescTaba = $($(this).children('a').attr('href'));
                if ($(this).hasClass('active-tab')) {
                    $trescTaba.show();
                } else {
                    $trescTaba.hide();
                }
            });
            $li.click(function() {$(this).children('a').click();});
            $li.children('a').click(function() {
                $li.removeClass('active-tab');         
                $li.each(function() {
                    $($(this).children('a').attr('href')).hide();
					$($(this).children('a').attr('href')).removeClass('animated');
                });
                $(this).parent().addClass('active-tab');
                $($(this).attr('href')).show();
				$($(this).attr('href')).addClass('animated');
                return false;
            });
        });
		
		
		
		// Toggles & Accordion
		
		$(".toggle").click(function() {
			var parent = $(this).parent();
			var content = $(".toggle-content",this);
				if(parent.hasClass("single-toggles")) {
					$(".toggle-title-text",parent).addClass("hover-icon");
					$(".toggle-arrow",parent).html("<i class='fa fa-caret-right'></i>");
				}
				if(content.css("display") === "none") {
					if(parent.hasClass("single-toggles")) {
						$(".toggle-content",parent).slideUp(200);
						$(".toggle-arrow",parent).html("<i class='fa fa-caret-right'></i>");
						$(".toggle-title-text",parent).addClass("hover-icon");
					}
					content.slideDown(200);
					$(".toggle-title-text",this).removeClass("hover-icon");
					$(".toggle-arrow",this).html("<i class='fa fa-caret-down'></i>");
				}
				else {
					content.slideUp(200);
					$(".toggle-title-text",this).addClass("hover-icon");
					$(".toggle-arrow",this).html("<i class='fa fa-caret-right'></i>");
				}
		});
		

})(jQuery);