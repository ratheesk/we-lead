(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Skills
    $('.skill').waypoint(function () {
        $('.progress .progress-bar').each(function () {
            $(this).css("width", $(this).attr("aria-valuenow") + '%');
        });
    }, { offset: '80%' });


    // Project carousel
    $(".project-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        nav: false,
        dots: true,
        dotsData: true,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 25,
        loop: true,
        center: true,
        dots: false,
        nav: true,
        navText: [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });

    // Form
    var contactForm = function () {
        if ($('#contactForm').length > 0) {
            $("#contactForm").validate({
                rules: {
                    name: "required",
                    subject: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true,
                        minlength: 5
                    }
                },
                messages: {
                    name: "Please enter your name",
                    subject: "Please enter your subject",
                    email: "Please enter a valid email address",
                    message: "Please enter a message"
                },
                /* submit via ajax */

                submitHandler: function (form) {
                    var $submit = $('.submitting'),
                        waitText = 'Submitting...';

                    $.ajax({
                        type: "POST",
                        url: "../components/send-email.php",
                        data: $(form).serialize(),

                        beforeSend: function () {
                            $submit.css('display', 'block').text(waitText);
                        },
                        success: function (msg) {
                            if (msg == 'OK') {
                                $('#form-message-warning').hide();
                                setTimeout(function () {
                                    $('#contactForm').fadeIn();
                                }, 1000);
                                setTimeout(function () {
                                    $('#form-message-success').fadeIn();
                                }, 1400);

                                setTimeout(function () {
                                    $('#form-message-success').fadeOut();
                                }, 8000);

                                setTimeout(function () {
                                    $submit.css('display', 'none').text(waitText);
                                }, 1400);

                                setTimeout(function () {
                                    $('#contactForm').each(function () {
                                        this.reset();
                                    });
                                }, 1400);

                            } else {
                                $('#form-message-warning').html(msg);
                                $('#form-message-warning').fadeIn();
                                $submit.css('display', 'none');
                            }
                        },
                        error: function () {
                            $('#form-message-warning').html("Something went wrong. Please try again.");
                            $('#form-message-warning').fadeIn();
                            $submit.css('display', 'none');
                        }
                    });
                } // end submitHandler

            });
        }
    };

})(jQuery);

