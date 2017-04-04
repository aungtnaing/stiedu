<!doctype html>
<html>
<head>
	@include('includes.head')  
</head>
<body>


				@include('includes.headermyanmar') 

				@yield('content')

				@include('includes.footermyanmar') 

		

	
	<script type="text/javascript" src="<?php echo url(); ?>/js/bootstrap.min.js"></script>

</body>
</html>
