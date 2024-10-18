(function($) {
"use strict";
 
$(document).ready(function() { 
$('#slider .owl-carousel').owlCarousel({
    loop:true,
	rtl:true,
    margin:10,
    responsiveClass:true,
dots: false,
autoplay: false,
autoplayTimeout: 5000,
slideBy: 1,
smartSpeed: 500,
autoplayHoverPause: true,
nav: true,
navText: ['<i class="flaticon-right-arrow"></i>','<i class="flaticon-left-arrow"></i>'], //Note, if you are not using Font Awesome in your theme, you can change this to Previous & Next
responsive:{
        0:{
            items:1,
        }
    }
});
$('#dowreha .owl-carousel').owlCarousel({
        loop:true,
        rtl:true,
        margin:30,
        responsiveClass:true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        slideBy: 1,
        smartSpeed: 500,
        autoplayHoverPause: true,
        nav: true,
        navText: ['<i class="flaticon-right-arrow"></i>','<i class="flaticon-left-arrow"></i>'], //Note, if you are not using Font Awesome in your theme, you can change this to Previous & Next
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:5,
            }
        }
    });
$('#related .owl-carousel').owlCarousel({
        loop:true,
        rtl:true,
        margin:10,
        responsiveClass:true,
        dots: false,
        autoplay: false,
        autoplayTimeout: 5000,
        slideBy: 1,
        smartSpeed: 500,
        autoplayHoverPause: true,
        nav: false,
        navText: ['<i class="flaticon-right-arrow"></i>','<i class="flaticon-left-arrow"></i>'], //Note, if you are not using Font Awesome in your theme, you can change this to Previous & Next
        responsive:{
            0:{
                items:4,
            }
        }
    });
})
})(jQuery);