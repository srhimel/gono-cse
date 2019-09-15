(function ($) {
	"use strict";

    jQuery(document).ready(function($){
        
        $(".carousel-indicators li:first-child, .carousel-inner .item:first-child, .nav-tabs li:first-child, .tab-content .tab-pane:first-child").addClass("active");
        $(".tab-content .tab-pane:first-child").addClass("in");
        $(".panel:first-child .panel-collapse").addClass("in");

        $("#nav").slicknav({
            allowParentLinks: true
        });

        $('.single-gallery-item, .carousel-image-single').each(function() { // the containers for all your galleries
            $(this).magnificPopup({
                delegate: 'a', // the selector for gallery item
                type: 'image',
                gallery: {
                  enabled:true
                }
            });
        });   
        
        $('.parallax-bg').parallax("50%", 0.2);


    });
    
    
    jQuery(".amader-slider").owlCarousel({
		'autoPlay' : 3000,
		'items' : 3,
		'itemsDesktop' : [1200, 6],
		'itemsDesktopSmall' : [1000, 4],
		'itemsTablet' : [768, 3],
		'stopOnHover' : true,
	});
	
	jQuery(".full-slider .prev").click(function(){
		jQuery(".amader-slider").trigger('owl.prev');
		
		return false;
	});
	jQuery(".full-slider .next").click(function(){
		jQuery(".amader-slider").trigger('owl.next');
		
		return false;
	});


}(jQuery));	