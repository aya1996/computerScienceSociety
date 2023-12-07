$(document).ready(function() {

    // Spcial Slider 
    $(".spcial-slider").owlCarousel({
        nav: true,
        loop: false,
        navText: ["<i class='la la-arrow-left'></i>", "<i class='la la-arrow-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 1,
        rtl: false,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 2.5
            }
        }
    });

    // Services Slider 
    $(".services-slider").owlCarousel({
        nav: false,
        loop: false,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots: true,
        dotsData: false,
        autoplay: 4000,
        items: 1,
        rtl: false,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3
            }
        }
    });
});