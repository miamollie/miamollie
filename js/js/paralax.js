
var field = null;
var eye = null;
var origin = null;
var x = 0;
var y = 0;
var z = 0;

$(window).resize(function(){

		//Make each container-fullscreen fill the screen
		var window_height = $(window).innerHeight();
		var window_width = $(window).innerWidth();

		// $('#spacer').css("min-height", window_height);
		// $('#spacer').css("min-width", window_width);

		field = {
			width: $("#spacer").width(),
			height: $("#spacer").height()
		};



		origin = {
			x: Math.round( field.width/2 ),
			y: Math.round( field.height/2 ),
			z: 100
		};

		eye = {
			x: Math.round( field.width/2 ),
			y: Math.round( field.height/2 ),
			z: 1
		};

		$('.feather').each(function(){

			z = Math.floor( Math.random() *  20);
			x = Math.floor( Math.random() * parseInt(field.width ));
			y = Math.floor( Math.random() * (parseInt(field.height ) - 50));

			var feather = $( "<div class='feather'/>" );

			feather.css({ left: x +"px", top: y + "px" });
			feather.data("z", z);
			feather.data("x", x);
			feather.data("y", y);


		});




	});

$(window).trigger("resize");


$(document).ready(function(){

	// Position the feathers on the screen randomly
	for( i=0; i < 10; i++ ){

		z = Math.floor( Math.random() *  20);
		x = Math.floor( Math.random() * parseInt(field.width - 50) );
		y = Math.floor( Math.random() * (parseInt(field.height ) - 50) );

		var feather = $( "<div class='feather'/>" );
		feather.css({ left: x +"px", top: y + "px" });
		feather.data("z", z);
		feather.data("x", x);
		feather.data("y", y);

		$('#spacer').append(feather);

	}

	function updateField(){

	//Calculate the angle that we'll use to set the new X-coords of the paralax items
	var angleX = (eye.x - origin.x) / origin.z;
	var angleY = (eye.y - origin.y) / origin.z;

	var newX = 0;
	var newY = 0;


		//calculate the coords of each paralax-item based on the current angle
		$('.feather').each(function(){

			// find the offset of the element within its plane:

			newX = ( angleX * $(this).data('z') ) + origin.x - (origin.x - $(this).data('x'));
			newY = ( angleY * $(this).data('z') ) + origin.y - (origin.y - $(this).data('y'));

			if( newX < field.width - 50 ){
				$(this).css({ left: newX + "px"});
			}

			if( newY < field.height - 50 ){
				$(this).css({ top: newY + "px" });
			}


		});

	}

	updateField();


	//Scrolly Paralax
	$(window).scroll(function() {

		var scroll = $(window).scrollTop();

		eye.y = scroll;

		updateField();


	});


	//Mouse Move paralax
	$("#spacer").mousemove(function( event ) {

		eye.x = event.pageX;
		eye.y = event.pageY;

		updateField();

	});

});







