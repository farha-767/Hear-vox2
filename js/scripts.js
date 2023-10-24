(function($) {
	$(document).ready(function() {
		"use strict";
		

		
		
		
		$('#service-btn').click(function() {
			if ($(window).width() < 998) {
			  $('.navbar-collapse').toggleClass('show');
			  $('.navbar-toggler').toggleClass('collapsed');
			}
		  });

		  

		$('#customers-testimonials').owlCarousel({
			loop: true,
			center: true,
			items: 3,
			margin: 0,
			autoplay: true,
			dots:true,
			autoplayTimeout: 8500,
			smartSpeed: 450,
			responsive: {
			  0: {
				items: 1
			  },
			  768: {
				items: 2
			  },
			  1170: {
				items: 3
			  }
			}
		});


		 
			  
		$(window).scroll(function() {
			var scrollTop = $(this).scrollTop();
			$('.parallax').css('background-position', 'center ' + scrollTop / 2 + 'px');
		  }); 
			  
			  
		
		
			  /**
   * Clients Slider
   */
			 
			  $('.customer-logos').slick({
				slidesToShow: 5,
				slidesToScroll: 1,
				autoplay: true,
				autoplaySpeed: 3000,
				speed: 500,
				pauseOnHover: false,
				cssEase: 'linear',
				arrows: false,
				dots: false,
				pauseOnHover: false,
				responsive: [{
				  breakpoint: 992,
				  settings: {
					slidesToShow: 4
				  }
				},
				 {
				  breakpoint: 768,
				  settings: {
					slidesToShow: 3
				  }
				}]
			  });
			  
				

			  /********************
			Main image slider
		  *********************/
			$('.main-image-slider').slick({
				slidesToShow: 1,
				loop:true,
				autoplay: true,
				swipe: false,
				  pauseOnHover: false, 
				autoplaySpeed: 5000,
				arrows: false,
				autoplayButton: false,
				fade: true,
				speed: 1000,
				dots:false,
			  });
				
				

				  
		

			
			  

		
		
			
	});
	// END JQUERY		

	////////////////////////////////

	/**
 * Navbar links active state on scroll
 */
let navbarlinks = $('#navbar .scrollto');
const navbarlinksActive = () => {
  let position = $(window).scrollTop() + 200;
  navbarlinks.each(function () {
    if (!this.hash) return;
    let section = $(this.hash);
    if (!section.length) return;
    if (position >= section.offset().top && position <= (section.offset().top + section.outerHeight())) {
      $(this).addClass('active');
    } else {
      $(this).removeClass('active');
    }
  });
};
$(window).on('load', navbarlinksActive);
$(document).on('scroll', navbarlinksActive);

/**
 * Scrolls to an element with header offset
 */
const scrollto = (el) => {
  let header = $('#header');
  let offset = header.outerHeight();

  if (!header.hasClass('header-scrolled')) {
    offset -= 10;
  }

  let elementPos = $(el).offset().top;
  $('html, body').animate({
    scrollTop: elementPos - offset
  }, 'slow');
};

/**
 * Toggle .header-scrolled class to #header when page is scrolled
 */
let selectHeader = $('#header');
if (selectHeader.length) {
  const headerScrolled = () => {
    if ($(window).scrollTop() > 100) {
      selectHeader.addClass('header-scrolled');
    } else {
      // selectHeader.removeClass('header-scrolled');
      selectHeader.addClass('header-scrolled');
    }
  };
  $(window).on('load', headerScrolled);
  $(document).on('scroll', headerScrolled);
}

/**
 * Mobile nav toggle
 */
$(document).on('click', '.mobile-nav-toggle', function (e) {
  $('#navbar').toggleClass('navbar-mobile');
  $(this).toggleClass('bi-list bi-x');
});

/**
 * Mobile nav dropdowns activate
 */
$(document).on('click', '.navbar .dropdown > a', function (e) {
  if ($('#navbar').hasClass('navbar-mobile')) {
    e.preventDefault();
    $(this).next().toggleClass('dropdown-active');
  }
});

/**
 * Scroll with offset on links with a class name .scrollto
 */
$(document).on('click', '.scrollto', function (e) {
  if ($(this.hash).length) {
    e.preventDefault();
    let navbar = $('#navbar');
    if (navbar.hasClass('navbar-mobile')) {
      navbar.removeClass('navbar-mobile');
      let navbarToggle = $('.mobile-nav-toggle');
      navbarToggle.toggleClass('bi-list bi-x');
    }
    scrollto(this.hash);
  }
});

/**
 * Scroll with offset on page load with hash links in the URL
 */
$(window).on('load', () => {
  if (window.location.hash) {
    if ($(window.location.hash).length) {
      scrollto(window.location.hash);
    }
  }
});



	/////////////////////////////


	
	  

	new WOW().init();

	
	

	setTimeout(function(){
		$("body").addClass("page-loaded");
	});

	
  

       
    
})(jQuery);











  
  

