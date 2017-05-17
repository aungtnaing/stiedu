<!doctype html>
<html>
<head>
	@include('includes.head')  
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

	<div class="preloader">
		<div class="sk-folding-cube">
			<div class="sk-cube1 sk-cube"></div>
			<div class="sk-cube2 sk-cube"></div>
			<div class="sk-cube4 sk-cube"></div>
			<div class="sk-cube3 sk-cube"></div>
		</div>
	</div>
	
	<!-- - - - - - - - - - - - - - Wrapper - - - - - - - - - - - - - - - - -->
	<div id="wrapper">
		@include('includes.headerp') 

		@yield('content')

		@include('includes.footer') 
	</div>

	<!--Scroll to top-->
	<div class="scroll-to-top"></div>
	
	<!-- Script -->
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyAZ_gB5ISNkZ4DvI6Luar3clZ1rW70tnok"></script>

	<script src="<?php echo url(); ?>/js/jquery.min.js"></script>
	<script src="<?php echo url(); ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo url(); ?>/js/scrolling-nav.js"></script>
	<script src="<?php echo url(); ?>/js/waypoints.min.js"></script>
	<script src="<?php echo url(); ?>/js/jquery.easing.min.js"></script>
	<!-- LayerSlider script files -->
	<script src="<?php echo url(); ?>/js/layerslider/js/greensock.js" type="text/javascript"></script>
	<script src="<?php echo url(); ?>/js/layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
	<script src="<?php echo url(); ?>/js/layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
	<!-- Google Map -->
	
	<script src="<?php echo url(); ?>/js/jquery.gmap.min.js"></script>
	<script src="<?php echo url(); ?>/js/jquery.mixitup.js"></script>
	<script src="<?php echo url(); ?>/js/fancybox/jquery.fancybox.pack.js"></script>
	<!-- Owl Carousel -->
	<script src="<?php echo url(); ?>/js/owl/js/owl.carousel.js"></script>
	<script src="<?php echo url(); ?>/js/counter.js"></script>
	<script src="<?php echo url(); ?>/js/script.js"></script>






</body>
</html>
