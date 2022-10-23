(function($) {
    jQuery(".owl-testimonial").owlCarousel({
        autoPlay: false,
        responsive: true,
        navigation: false,
        pagination: true,
        rewindSpeed: 1000,
        items: 2,
        itemsDesktop: [1200, 2],
        itemsTablet: [991, 1],
        itemsMobile: [767, 1]
    });
    jQuery(".full-width .owl-testimonial-2").owlCarousel({
        autoPlay: false,
        responsive: true,
        navigation: false,
        pagination: true,
        rewindSpeed: 1000,
        items: 1,
        itemsDesktop: [1200, 1],
        itemsTablet: [991, 1],
        itemsMobile: [767, 1]
    });
    if (jQuery('#back-to-top').length) {
        var scrollTrigger = 100,
            backToTop = function() {
                var scrollTop = $(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    $('#back-to-top').addClass('show');
                } else {
                    $('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        jQuery(window).on('scroll', function() {
            backToTop();
        });
        jQuery('#back-to-top').on('click', function(e) {
            e.preventDefault();
            jQuery('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
    $(".se-pre-con").fadeOut("slow");;
})(jQuery);

jQuery(document).ready(function() {
    jQuery('.drawer').drawer();
});
jQuery('.count-number').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');
    jQuery({
        countNum: $this.text()
    }).animate({
        countNum: countTo
    }, {
        duration: 2000,
        easing: 'linear',
        step: function() {
            $this.text(Math.floor(this.countNum));
        },
        complete: function() {
            $this.text(this.countNum);
        }
    });
});
jQuery('ul.drawer-menu li a').click(function() {
    jQuery('ul.drawer-menu li').removeClass("active");
    jQuery(this).parent('li').addClass("active");
});

function init() {
    window.addEventListener('scroll', function(e) {
        var distanceY = window.pageYOffset || document.documentElement.scrollTop,
            shrinkOn = 800,
            header = document.querySelector("nav");
        if (distanceY > shrinkOn) {
            classie.add(header, "fixed");
        } else {
            if (classie.has(header, "fixed")) {
                classie.remove(header, "fixed");
            }
        }
    });
}
window.onload = init();