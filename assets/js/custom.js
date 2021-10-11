jQuery(function($){
    var width = $(window).width();
    if(width < 1024){            
        jQuery(document).on('click', '.mobile-btn a', function(){
            $("#mobile-menu").toggleClass("menu-hidden", 1800, "easeOutQuint");
        });        
    }
    if( $('.owl-carousel').length ){
        $('.owl-carousel').each(function(){
            var owl = $('.owl-carousel');
            $(this).owlCarousel({
                margin: 0,
                autoplayTimeout: $(this).data('autotime'),
                smartSpeed:$(this).data('speed'), 
                autoHeight:$(this).data('autoheight'),
                autoplay : $(this).data('autoplay'),
                items    : $(this).data('carousel-items'),
                nav      : $(this).data('nav'),
                dots     : $(this).data('dots'),   
                center   : $(this).data('center'),
                loop     : $(this).data('loop'),             
                responsive: {
                    0: {
                        items: $(this).data('mobile'),                 
                    },
                    768: {
                        items: $(this).data('tablet'),
                        margin   : $(this).data('margintb'),
                    },
                    992: {
                        items: $(this).data('desktop-small'),
                        margin   : $(this).data('margintb'),
                    },
                    1680: {
                        items: $(this).data('desktop'),
                        margin   : $(this).data('margintb'),
                    }
                }
            });    
        });
    }
    $(document).ready(function(){ 
        $(window).scroll(function(){ 
            if ($(this).scrollTop() > 100) { 
                $('#goTop').fadeIn(); 
            } else { 
                $('#goTop').fadeOut(); 
            } 
        }); 
        $('#goTop').click(function(){ 
            $("html, body").animate({ scrollTop: 0 }, 600); 
            return false; 
        }); 
    });    

    $(window).bind('scroll', function () {
        if ($(window).scrollTop() > 300) {
            $('.sticky-header').addClass('fixed');
        } else {
            $('.sticky-header').removeClass('fixed');
        }
    });   
});