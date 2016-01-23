
/* $(document).ready
---------------------------------------- */

$(document).ready(function(){
	
	"use strict";


	// ----- No JS
	// ---------------------------------------------
	$('html').removeClass('no-js');


	// ----- Work Thumbnails
	// ---------------------------------------------
	if($('html').hasClass('touch')){
		// Non Mobile
		//console.log('Mobile');
		$('.work-thumbnails a').click(function(e){
			if($(this).hasClass('active')) {
			} else {
				e.preventDefault();
				$('.work-thumbnails a').removeClass('active');
				$(this).toggleClass('active');
			}
		});
	} else {
		// Non Mobile
		//console.log('Not Mobile');
		$('.work-thumbnails a').hover(
			function() {
				// console.log('in');
				$(this).addClass('active');
			},
			function() {
				// console.log('out');
				$(this).removeClass('active');
			}
		);
	}

});