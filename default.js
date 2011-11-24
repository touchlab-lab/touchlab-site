jQuery(function() {
	var $ = jQuery;
	
	// fill document with background
	$(window).resize(function() {
		$('#wrapper').height($(document).height());
	}).resize();
	
	// we add additional styling for the main menu
	$('#links-main li:first').addClass('first');
	$('#links-main li:last').addClass('last');
	
	// heres the script for the slideshow	
	var slides = $('#quote-slideshow li');
	slides.hide();
	showNextSlide(slides);
	
	function showNextSlide(slides, slide_num) {		
		// no need for any animation if there is only one slide
		if(slides.length == 1) { 
			$(slides[0]).show(); return; 
		}
		
		var next_slide;
		var speed = 'slow';
		var slide_stay = 5000;
		
		if(!slide_num) slide_num = 0;
		
		next_slide = slide_num + 1;
		
		if(next_slide == slides.length) { 
			next_slide = 0;
			slide_stay = 5000;
		}
		
		$(slides[slide_num]).fadeIn(speed, function() {
			setTimeout(function() {
				$(slides[slide_num]).fadeOut(speed, function() {
					showNextSlide(slides, next_slide);
				});	
			},3000);					
		});
	}
	
	// lets fix the home widget for displaying recent post
	// it should display a title, and if the image is available, it will be displayed
	$('.home-module h2').each(function() {
		if($(this).text() == 'app news') {
			$(this).css('display', 'block').html('<img src="' + bloginfo.template_url + '/images/title_appnews.png" title="app news" alt="app news" />');
		}
	});
});