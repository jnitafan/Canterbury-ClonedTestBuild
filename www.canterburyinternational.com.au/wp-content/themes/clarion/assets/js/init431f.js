// JavaScript Document
jQuery(document).ready(function(){
	jQuery('.imageCarousel').slick({
		autoplay:false,
		slidesToShow: 1,
		slidesToScroll: 1,
	});
	jQuery(window).scroll(function() {
		if(jQuery(this).scrollTop() > 100) {
			jQuery('.go-top').fadeIn(200);
		} else {
			jQuery('.go-top').fadeOut(200);
		}
		/*if (jQuery(window).scrollTop() >= 140) {
			jQuery('header').slideDown().addClass('fixed-header');
		}
		else {
			jQuery('header').removeClass('fixed-header').slideDown();
		}*/
	});

	jQuery('.go-top').click(function(event) {
		event.preventDefault();
		jQuery('html, body').animate({scrollTop: 0}, 300);
	});
	jQuery('#menu').slicknav({});
	jQuery( "#checkin" ).datepicker({
		dateFormat: "mm/dd/yy",
		showButtonPanel: true,
		minDate: 0
		
	});
	jQuery( "#checkout" ).datepicker({
		dateFormat: "mm/dd/yy",
		showButtonPanel: true,
		minDate: 1
	});
	jQuery( "#bookcheckin" ).datepicker({
		dateFormat: "mm/dd/yy",
		showButtonPanel: true,
		minDate: 0
		
	});
	jQuery( "#bookcheckout" ).datepicker({
		dateFormat: "mm/dd/yy",
		showButtonPanel: true,
		minDate: 1
	});
	jQuery('.slide').slickLightbox({
		src: 'rel',
		caption: 'caption',
		itemSelector: 'img'
	});
	
	jQuery(".check").click(function(){
		
		var bookingFrame = jQuery('.bookingcheck').html();
		jQuery(this).closest('.iframebox').find('.availability').html(bookingFrame).fadeIn('slow');
	});
	jQuery(document).on("click",".availability span.close-btn",function(){
		
		jQuery(this).closest('.iframebox').find('.availability').fadeOut('slow');
	});
	
});

