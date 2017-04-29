// SVG DRAW

$(document).ready(function(){



	var aboutOffset = $("#about").offset().top;
	var aboutHeight = $("#about").height();

	// Get the length of the SVG , not entirely necessary but makes things more precise
	var path = document.querySelector('.feather path');
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




// 		// Animate on scroll event
//

// 			//store the dashoffset value, initilly the length, the amount by which the stroke is hidden/visible
// 			var dashOffset = length;

// 			//keeping track of the top of the viewport, the window height, the top of the SVG and the middle of the SVG

// 			var scroll = $(window).scrollTop();
// 			var svgTop = $("svg").offset().top;
// 			var windowheight = $(window).height();
// 			var svgMidPoint = $("svg").height()/2;


// 			//calculate what percentage of the line should be drawn based on where on the page the viewpoint is.
// 			// we want it to start drawing when the svg just starts to appear at the bottom of the screen, and it should be 100% drawn when it is right in the centre of the screen
// 		    var offsetPercentage =  (( (scroll) - svgTop  ) / ( svgTop + svgMidPoint)) - 1;

// 		    dashOffset -= (length * offsetPercentage);

// 		    path.style.strokeDashoffset = dashOffset; //start drawing!

// 		});