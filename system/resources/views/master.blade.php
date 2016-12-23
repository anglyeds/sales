<!DOCTYPE html>
<html ng-app="tutapos">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Synergy Marketing - Landing Page</title>	

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/footer.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet">
	<!-- Fonts -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	@yield('home')
	@yield('nav')
	@yield('about')
	@yield('services')
	@yield('mediums')
	@yield('network')
	@yield('innovation')
	@yield('career')
	@yield('contact')
	@yield('footer')
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/landing/jquery.magnific-popup.min.js"></script>
	<script type="text/javascript" src="js/landing/jquery.nav.js"></script> 
	<script type="text/javascript" src="js/landing/owl.carousel.min.js"></script> 
	<script type="text/javascript" src="js/landing/wow.min.js"></script> 
    <script type="text/javascript" src="js/landing/main.js"></script>
    <script type="text/javascript" src="js/landing/canvas.js"></script> 
	<script type="text/javascript" src="js/landing/preloader.js"></script>	
</body>
</html>
