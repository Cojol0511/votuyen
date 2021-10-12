jQuery(function ($) {
    var width = $(window).width();
    if (width < 1024) {
        jQuery(document).on('click', '.mobile-btn a', function () {
            $("#mobile-menu").toggleClass("menu-hidden", 1800, "easeOutQuint");
        });
    }
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            dots: false,
            responsive: {
                0: {
                    items: 1,
                },
                600: {
                    items: 3,
                },
                1000: {
                    items: 4,
                }
            }
        });

        window.onscroll = function () { myFunction() };

        var header = document.getElementById("header");
        var sticky = header.offsetTop;

        console.log(sticky);
        function myFunction() {
            // console.log(this);
            if (this.oldScroll > this.scrollY) {
                header.style.top = '0';
                // console.log(header);
            } else {
                if (this.scrollY == 0) {
                    header.style.top = '0';
                } else {
                    if (this.scrollY > 135) {
                        header.style.top = '-160px';
                    }
                }
            }
            this.oldScroll = this.scrollY;
        }
    });
    // if ($('.owl-carousel').length) {
    //     $('.owl-carousel').each(function () {
    //         var owl = $('.owl-carousel');
    //         $(this).owlCarousel({
    //             margin: 0,
    //             autoplayTimeout: $(this).data('autotime'),
    //             smartSpeed: $(this).data('speed'),
    //             autoHeight: $(this).data('autoheight'),
    //             autoplay: $(this).data('autoplay'),
    //             items: $(this).data('carousel-items'),
    //             nav: $(this).data('nav'),
    //             dots: $(this).data('dots'),
    //             center: $(this).data('center'),
    //             loop: $(this).data('loop'),
    //             responsive: {
    //                 0: {
    //                     items: $(this).data('mobile'),
    //                 },
    //                 768: {
    //                     items: $(this).data('tablet'),
    //                     margin: $(this).data('margintb'),
    //                 },
    //                 992: {
    //                     items: $(this).data('desktop-small'),
    //                     margin: $(this).data('margintb'),
    //                 },
    //                 1680: {
    //                     items: $(this).data('desktop'),
    //                     margin: $(this).data('margintb'),
    //                 }
    //             }
    //         });
    //     });
    // }
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#goTop').fadeIn();
            } else {
                $('#goTop').fadeOut();
            }
        });
        $('#goTop').click(function () {
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
    });

});