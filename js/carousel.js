/*! jQuery slider.js
  Setup of the Frontpage Slider based on the FlexSlider plugin (jquery.flexslider-min.js)
  Author: Thomas W (themezee.com)
*/
jQuery(document).ready(function($) {

	/* Add flexslider to #carousel-slider div */ 
	$("#carousel-slider").flexslider({
		namespace: "zeecarousel-",
		selector: ".zeecarousel-slides > li",
		animation: "slide",
		smoothHeight: true,
		controlsContainer: ".frontpage-posts-slidenav",
		directionNav: false
	});
});