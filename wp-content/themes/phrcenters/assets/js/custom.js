var $ = jQuery.noConflict();

$(document).ready(function() {
			// grab the initial top offset of the navigation 
		   	var stickyNavTop = $('.second-top').offset().top;
		   	
		   	// our function that decides weather the navigation bar should have "fixed" css position or not.
		   	var stickyNav = function(){
			    var scrollTop = $(window).scrollTop(); // our current vertical position from the top
			         
			    // if we've scrolled more than the navigation, change its position to fixed to stick to top,
			    // otherwise change it back to relative
			    if (scrollTop > stickyNavTop) { 
			        $('.second-top').addClass('sticky');
			    } else {
			        $('.second-top').removeClass('sticky'); 
			    }
			};

			stickyNav();
			// and run it again every time you scroll
			$(window).scroll(function() {
				stickyNav();
			});
		});
		
		
		///---------------------OWL Carasoul-------------------------------//

$('#services').owlCarousel({
    loop:true,
    margin:30,
    nav:false,
    autoplay:true,
    autoplayTimeout:10000,
    dots:true,
    navText: [ '', '' ],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})

		 
				 
		///---------------------OWL Carasoul-------------------------------//
		
	
	
