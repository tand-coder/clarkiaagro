jQuery(document).ready(function($) {

	//call custom scrollbar in header
	var ps = new PerfectScrollbar('.header-four .top-header .mobile-menu', {
	  wheelSpeed: 0.1,
	  wheelPropagation: false,
	});

	//animate site header contain
	$('.site-header.layout-four .top-header > .toggle-button').click(function() {
		$(this).siblings('.container').animate({
			width: 'toggle',
		}, 350);
	});

	$('.site-header.layout-four .main-navigation .close').click(function() {
		$(this).parents('.container').animate({
			width: 'toggle',
		}, 350);
	});

	$('.site-header.layout-four .site-branding').prependTo('.site-header.layout-four .main-navigation .menu');
	$('.site-header.layout-four .header-right').appendTo('.site-header.layout-four .main-navigation .menu');


	if($(window).width() > 1300){
		$('.site-header.layout-four .top-header .toggle-button, .site-header.layout-four .top-header .close').click(function() {
			$(window).one("webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", function(event) {
			    $('.site-banner .banner-items').trigger('refresh.owl.carousel');
			});
		});
	}

});