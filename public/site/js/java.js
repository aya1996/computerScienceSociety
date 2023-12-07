$(window).load(function() {
    $('.loader').fadeOut(2000);
});

new WOW().init();
wow = new WOW({
    boxClass: 'wow', // default
    animateClass: 'animated', // default
    offset: 0, // default
    mobile: true, // default
    live: true // default
})
wow.init();



// All Sliader

$(document).ready(function() {
    "use strict";

    // Home Slider
    $(".home-slider").owlCarousel({
        nav: false,
        loop: true,
        // navText: ["<img src='images/arrow-top.png' />", "<img src='images/arrow-bottom.png' />"],
        dots: true,
        dotsData: true,
        autoplay: 4000,
        items: 1,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        autoplayHoverPause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            }
        }
    });

    // Pro Slider
    $(".pro-slider").owlCarousel({
        nav: true,
        loop: true,
        navText: ["<i class='la la-long-arrow-alt-left'></i>", "<i class='la la-long-arrow-alt-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 1,
        autoplayHoverPause: true,
        center: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            1000: {
                items: 3
            }
        }
    });

    // Part Slider
    $(".part-slider").owlCarousel({
        nav: false,
        loop: false,
        navText: ["<i class='la la-long-arrow-alt-left'></i>", "<i class='la la-long-arrow-alt-right'></i>"],
        dots: true,
        autoplay: 4000,
        items: 1,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
            },
            1000: {
                items: 2
            }
        }
    });


    // Clients Slider
    $(".clients-slider").owlCarousel({
        nav: false,
        loop: true,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 1,
        autoplayHoverPause: true,
        center: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            767: {
                items: 2,
            },
            1000: {
                items: 4
            }
        }
    });

    // Single Slider
    $(".single-slider").owlCarousel({
        nav: false,
        loop: false,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
        dots: true,
        autoplay: 4000,
        items: 1,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            }
        }
    });

    // Rel Slider
    $(".rel-slider").owlCarousel({
        nav: true,
        loop: false,
        navText: ["<i class='la la-angle-left'></i>", "<i class='la la-angle-right'></i>"],
        dots: false,
        autoplay: 4000,
        items: 1,
        autoplayHoverPause: true,
        center: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            1000: {
                items: 3,
            }
        }
    });


    // Activty single
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        vertical: true,
        arrows: false,
        asNavFor: '.slider-for',
        dots: false,
        focusOnSelect: true,
        verticalSwiping: true,
        responsive: [{
                breakpoint: 992,
                settings: {
                    vertical: false,
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    vertical: false,
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 580,
                settings: {
                    vertical: false,
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 380,
                settings: {
                    vertical: false,
                    slidesToShow: 2,
                }
            }
        ]
    });

    //Header Search
    if ($('.search-box-outer').length) {
        $('.search-box-outer').on('click', function() {
            $('body').addClass('search-active');
        });
        $('.close-search').on('click', function() {
            $('body').removeClass('search-active');
        });
    }

    // Mobile Menu
    if ($('.mobile-menu').length) {

        $('.mobile-menu .menu-box');

        var mobileMenuContent = $('.main-header .nav-outer .main-menu').html();
        $('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
        $('.sticky-header .main-menu').append(mobileMenuContent);

        //Menu Toggle Btn
        $('.mobile-nav-toggler').on('click', function() {
            $('body').addClass('mobile-menu-visible');
        });

        //Menu Toggle Btn
        $('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function() {
            $('body').removeClass('mobile-menu-visible');
        });

    }

    //Drop
    $('.mobile-menu li.menu-item-has-children').on('click', function(event) {
        $(this).siblings().removeClass('open');
        $(this).toggleClass('open');
    });

    //Odometer
    $(".counter-item").each(function() {
        $(this).isInViewport(function(status) {
            if (status === "entered") {
                for (var i = 0; i < document.querySelectorAll(".odometer").length; i++) {
                    var el = document.querySelectorAll('.odometer')[i];
                    el.innerHTML = el.getAttribute("data-odometer-final");
                }
            }
        });
    });

    // Select
    // $('select').niceSelect();

    // FancyBox
    $('[data-fancybox="gallaryPhoto"]').fancybox();
    $('[data-fancybox="gallaryVideo"]').fancybox();
    $('[data-fancybox]').fancybox();

    //Nav
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 50) {
            $("header").addClass("active");
        } else {
            $("header").removeClass("active");
        }
    });


    // for upload file
    $(document).on('change', ':file', function() {
        var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
    });
    $(':file').on('fileselect', function(event, numFiles, label) {

        var input = $(this).parents('.input-group').find(':text'),
            log = numFiles > 1 ? numFiles + ' files selected' : label;

        if (input.length) {
            input.val(log);
        } else {
            //            if (log) alert(log);
        }
    });

    $('.form-control').focus(function() {
        $(this).parents('.form-group').addClass('focused');
    });

    $('.form-control').blur(function() {
        var inputValue = $(this).val();
        if (inputValue == "") {
            $(this).removeClass('filled');
            $(this).parents('.form-group').removeClass('focused');
        } else {
            $(this).addClass('filled');
        }
    });
    $(document).on('change', '.btn-file :file', function() {
        var fileName = $('#uploadfile').val();
        $('.filename').val(fileName);
    });

    // Phone
    $(".phone").intlTelInput({
        preferredCountries: ["sa", "gb"],
        separateDialCode: true,
        hiddenInput: "full",
    });
});

$(".toggle-password").click(function() {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});