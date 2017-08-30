<!doctype html>
<html>
<head>
	<html lang="en" class="no-js">
<!--<![endif]-->
<head>
  <meta charset="utf-8">

  <title>{{ $coursedetail->name }}</title>
  <meta name="description" content="STI Myanmar University, formerly known as STI Education, was founded in Myanmar in early 2006 with the commitment of providing academic programs at the undergraduate and postgraduate levels.">
  <meta name="author" content="Aung Thein Naing">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <!-- Facebook Pixel Code -->

  <base href="http://stiedu.net/sitemap">
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '450642131975254'); // Insert your pixel ID here.
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=450642131975254&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-104412099-1', 'auto');
  ga('send', 'pageview');

</script>



<meta property="og:url"           content="http://www.stiedu.net" />
  <meta property="og:type"          content="article" />
  <meta property="og:title"         content="{{ $coursedetail->name }}" />
  <meta property="og:description"   content="STI uni test." />
  <meta property="og:image"         content="http://www.stiedu.net/images/courses/7/photos/1497605680-photo.JPG" />
<meta property="fb:app_id" content="132711514007187" />


 
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo url(); ?>/images/apple-touch-icon-120x120-precomposed.png" /> 
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo url(); ?>/images/apple-touch-icon-152x152-precomposed.png" />

  <link rel="icon" href="<?php echo url(); ?>/images/favicon.png" type="image/png" sizes="16x16">
 

  <link rel="stylesheet" href="<?php echo url(); ?>/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo url(); ?>/css/scrolling-nav.css" />
  <link rel="stylesheet" href="<?php echo url(); ?>/css/style.css" />
  <link rel="stylesheet" href="<?php echo url(); ?>/css/color.css" />
  <link rel="stylesheet" href="<?php echo url(); ?>/css/layout.css" />
  <link rel="stylesheet" href="<?php echo url(); ?>/css/font-awesome.min.css" />
  <link rel="stylesheet" href="<?php echo url(); ?>/css/fontello.css" />
  <!-- Owl Stylesheets -->
  <link rel="stylesheet" href="<?php echo url(); ?>/js/owl/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo url(); ?>/js/owl/css/owl.theme.default.min.css">
  <!-- LayerSlider style files -->
  <link rel="stylesheet" href="<?php echo url(); ?>/js/layerslider/css/layerslider.css" />

  <link rel="stylesheet" href="<?php echo url(); ?>/js/fancybox/jquery.fancybox.css" />

   <link rel="stylesheet" href="<?php echo url(); ?>/css/font-awesome.min.css" />
   

  
    <script src="<?php echo url(); ?>/js/jquery.modernizr.js"></script>


   
<script type="text/javascript">
  function replyon(fid){
   
                    var elem = document.getElementById(fid);
                    elem.style.display = 'block';
                    
             
          }
  </script>

	


  
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
