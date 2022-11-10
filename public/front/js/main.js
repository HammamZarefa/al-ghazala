(function ($) {
	"use strict";

/*=============================================
	=    		 show and hide items			      =
=============================================*/
$(function () {
    $(document).ready(function () {

        // ************************ show and hide portfolios ************************
        var shown1 =  3;
        var items1 = $('#portfo').attr("data-number");;
        $('#hide-portfolio').hide(1000);
        $('#portfo').children().slice(0,3).show(1000); 
        $('#show-portfolio').click(function () {
            $('#hide-portfolio').show(1000);
            shown1 = shown1+3;
            if(shown1 < items1) {
                $('#portfo').children().slice(0,shown1).show(1000);
            }
            else {
                $('#portfo').children().slice(0,items1).show(1000);
                $('#show-portfolio').hide(1000);
                }
        });
        $('#hide-portfolio').click(function () {
            $('#portfo').children().slice(3,items1).hide(1000);
            $('#show-portfolio').show(1000);
            $('#hide-portfolio').hide(1000);

        });
        // ************************ show and hide blogs ************************
        var shown =  3;
        var items =$('#blogs').attr("data-number");;
        $('#hide-blog').hide(1000);
        $('#blogs').children().slice(0,3).show(1000);
        $('#show-blog').click(function () {
            $('#hide-blog').show(1000);
            shown = shown+3;
            if(shown < items) {
                $('#blogs').children().slice(0,shown).show(1000);
            }
            else {
                $('#blogs').children().slice(0,items).show(1000);
                $('#show-blog').hide1000
                }
        });
        $('#hide-blog').click(function () {
            $('#blogs').children().slice(3,items).hide(1000);
            $('#show-blog').show(1000);
            $('#hide-blog').hide(1000);

        });
        
    });
});



})(jQuery);