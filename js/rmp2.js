//jQuery(function(){
//    jQuery("a[rel=popover]")
//        .popover()
//        .click(function(e) {
//        e.preventDefault()
//    });
//
//    jQuery("a[rel=tooltip]").tooltip();
//
//    jQuery('.carousel').carousel({interval: 3500});
//    jQuery(".carousel-indicators li:first").addClass("active");
//    jQuery(".carousel-inner .item:first").addClass("active");
//
//});
//
//

(function ($) {
    "use strict";

    var MQL = 1170;

    //primary navigation slide-in effect
    if ($(window).width() > MQL) {
        var headerHeight = $('.navbar-custom').height();
        $(window).on('scroll', {
            previousTop: 0
        },
                     function() {
            var currentTop = $(window).scrollTop();
            //check if user is scrolling up
            if (currentTop < this.previousTop) {
                //if scrolling up...
                if (currentTop > 0 && $('.navbar-custom').hasClass('is-fixed')) {
                    $('.navbar-custom').addClass('is-visible');
                } else {
                    $('.navbar-custom').removeClass('is-visible is-fixed');
                }
            } else {
                //if scrolling down...
                $('.navbar-custom').removeClass('is-visible');
                if (currentTop > headerHeight && !$('.navbar-custom').hasClass('is-fixed')) $('.navbar-custom').addClass('is-fixed');
            }
            this.previousTop = currentTop;
        });
    }

    //hightlight.js
    $("pre code").each(function(i, e) {hljs.highlightBlock(e); });

}(jQuery));


(function ($) {
    var $container = $('.masonry-container');
    $container.imagesLoaded( function () {
        $container.masonry({
            columnWidth: '.item',
            itemSelector: '.item'
        });   
    });
    
    
    $('a[data-toggle=tab]').each(function () {
        var $this = $(this);

        $this.on('shown.bs.tab', function () {
            $container.imagesLoaded( function () {
                $container.masonry({
                    columnWidth: '.item',
                    itemSelector: '.item'
                });   
            });  
        });
    });
}(jQuery));