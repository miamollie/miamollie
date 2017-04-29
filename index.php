<!DOCTYPE html>
<html>
<head>

	<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<meta name="description" content="Mia Mollie: Aerial Hoop Performer and Teacher">
	<meta name="keywords" content="aerial hoop ring lyra performance circus workshops teaching mia mollie de burca">
	<meta name="author" content="Mia de Búrca">

	<!-- Favicon -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="/imagesfavicon.ico" type="image/x-icon">

	<!-- STYLESHEET -->
	<link href="css/css.css" rel="stylesheet" type="text/css">

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">


	<!-- GOOGLE FONT -->
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">

	<!-- FONTAWESOME -->
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- LIGHTBOX -->
	<link rel="stylesheet" href="css/magnificpopup.css" type="text/css"/>


	<title>Mia Mollie Aerial</title>


</head>

<body data-spy="scroll" data-target=".navigation">


	<?php include 'includes/nav.php' ?>

	<!-- Home -->
	<div id="home" class="container-fullscreen">
		<div class="main-title">
			<h1>Mia Mollie<br><span>Aerial</span></h1>
		</div>
	</div>

	<?php include 'includes/about.php' ?>

	<?php include 'includes/spacer.php' ?>

	<?php include 'includes/gallery.php' ?>

	<?php include 'includes/contact.php' ?>


	<!-- Scripts -->
	<!-- Less -->
	<!-- // <script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/1.7.4/less.min.js"></script> -->

	<!-- JQUERY -->
	<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

	<!-- Latest compiled and minified Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

	<!-- LightBox -->
	<script src="js/jquery.magnific-popup.min.js" type="text/javascript"></script>

	<script type="text/javascript">

	$(window).resize(function(){

		//Make each container-fullscreen fill the screen
		var window_height = $(window).innerHeight() + 50;
		var window_width = $(window).innerWidth();


		$(".container-fullscreen").css("min-height", window_height);

	});

	$(window).trigger("resize");

	$(document).ready(function(){

		//MENU SELECTED
		$('.navigation li').click(function() {
			$(this).addClass('selected').siblings().removeClass('selected');
    	});

		// SMOOTH SCROLLING -  Shane's code!
		$('a.scroll').click(function( event ){
			if( this.pathname !== window.location.pathname )
				return true;
			if( $(this.hash).length == 0 )
				return true;
	        event.preventDefault();// stop the link from being followed

	        $('html, body').animate({scrollTop: $(this.hash).offset().top }, 1000);

	    });


	    //ABOUT COLLAPSE BUTTONS
	    $('.panel-title a').click(function(){
	    	$(this).find($(".fa")).toggleClass("fa-times fa-plus");
	    	$(this).parent().parent().parent().siblings().find($(".fa")).removeClass("fa-times").addClass("fa-plus");
	    });



		//LIGHTBOX Magnific-Popup
		$('.gallery-item').each(function() { // the containers for all your galleries
			$(this).magnificPopup({
		        delegate: 'a', // the selector for gallery item
		        type: 'image',
		        gallery: {
		        	enabled:true,
					preload: [0,2], // read about this option in next Lazy-loading section
					navigateByImgClick: true,
					arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>'
				}
			});
		});


		//Video light box
		$('#reel').magnificPopup({
			delegate: 'a',
			type: 'iframe',

			mainClass: 'mfp-fade',
			removalDelay: 160,
			preloader: false,

			fixedContentPos: false

		});


	});

</script>

<!-- SVG Draw -->
<script type="text/javascript" src="../js/svgdraw.js"></script>
<!-- Paralax -->
<script type="text/javascript" src="../js/paralax.js"></script>
</body>
</html>
