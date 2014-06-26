jQuery(document).ready(function($){
"use strict"; 

        var winHeight = $(window).height();
        var winWidth = $(window).width();

        $('.homeoverlay').css('height', winHeight);
        $('.homeoverlay .home-part .item').css('height', winHeight);

        if(winHeight > 360){$('.homeoverlay .item .slider-part').css('height', winHeight/100*80);}

        else {$('.homeoverlay .item .slider-part').css('height', winHeight);}

        $(window).resize(function() {
            $('.homeoverlay').css('height', winHeight);
            $('.homeoverlay .home-part .item').css('height', winHeight);

            if(winHeight > 360){$('.homeoverlay .item .slider-part').css('height', winHeight/100*80);}

            else {$('.homeoverlay .item .slider-part').css('height', winHeight);}
        });

        $('#mobilenav .nav').height(winHeight-70);

// MENU FIXED START

var offset = winHeight;
var duration = 500;
jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > offset) {
        jQuery('.fixed-nav').addClass('fixed');
    } else {
        jQuery('.fixed-nav').removeClass('fixed');
    }
});

// MENU FIXED END


// MENU FOR MOBILE AND SMALL DEVICES START
    $('#mobile-nav-trigger').click (function(){
        $('#mobilenav').toggleClass('fixed-m-nav');
        $('#body-wrapper').toggleClass('body-wrapper-trigger');
    })

    $('#body-wrapper').click(function(){
        $('#mobilenav').removeClass('fixed-m-nav');
        $('#body-wrapper').removeClass('body-wrapper-trigger');
    })
// MENU FOR MOBILE AND SMALL DEVICES END
});