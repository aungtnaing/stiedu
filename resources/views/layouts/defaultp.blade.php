<!doctype html>
<html>
<head>
	@include('includes.head')  

	<meta property="og:url" content="http://www.stiedu.net/coursedetails/6"/>
  <meta property="og:type" content="article" />
  <meta property="og:title" content="STI Myanmar University" />
  <meta property="og:description" content="we r soldier." />
  <meta property="og:image" content="<?php echo url(); ?>/images/about1.jpg" />

  
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZZ44ZV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

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
	
	
	<script src="<?php echo url(); ?>/js/jquery.mixitup.js"></script>
	<script src="<?php echo url(); ?>/js/fancybox/jquery.fancybox.pack.js"></script>
	<!-- Owl Carousel -->
	<script src="<?php echo url(); ?>/js/owl/js/owl.carousel.js"></script>
	<script src="<?php echo url(); ?>/js/counter.js"></script>
	<script src="<?php echo url(); ?>/js/script.js"></script>






</body>

</html>
