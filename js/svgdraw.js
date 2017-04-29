// SVG DRAW

$(document).ready(function(){

	var aboutOffset = $("#about").offset().top;
	var aboutHeight = $("#about").height();

	// Get the length of the SVG , not entirely necessary but makes things more precise
	var path = document.querySelector('#featherSVG path');
	var length = path.getTotalLength();

	// Clear any previous transition
	path.style.transition = path.style.WebkitTransition ='none';

	// Set up the starting positions
	path.style.strokeDasharray = length + ' ' + length;
	path.style.strokeDashoffset = length;

	// Trigger a layout so styles are calculated & the browser picks up the starting position before animating
	path.getBoundingClientRect();

	// Define a transition
	path.style.transition = path.style.WebkitTransition = 'stroke-dashoffset 3s ease-in-out';


	$(window).scroll(function () {

		var scroll = $(window).scrollTop();


		if( scroll > aboutOffset - (aboutHeight/2) ){
			path.style.strokeDashoffset = 0;
		}

		if( scroll < aboutOffset - (aboutHeight/2) ){
			path.style.strokeDashoffset = length;
		}

		if( scroll > aboutOffset + aboutHeight ){
			path.style.strokeDashoffset = length;
		}

	});


});

