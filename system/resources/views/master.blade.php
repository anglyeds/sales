<!DOCTYPE html>
<html ng-app="tutapos">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Superman Store</title>

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/footer.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/magnific-popup.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet">	
	<link href="{{ asset('/css/selfdefine.css') }}" rel="stylesheet">
	<!-- Fonts -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<!--[endif]-->
</head>
<body>
	@section('home')
	<div id="home-section" class="image-bg">
	<nav id="mainmenu" class="collapse navbar-collapse navbar-rights" aria-expanded="false" style="float: right">         
        <ul class="nav navbar-nav">
        	@if (Auth::guest())
				<li class=""><a href="{{ url('auth/register') }}">Register</a></li>
    			<li class=""><a href="{{ url('auth/login') }}">Login</a></li>
			@else
				<!-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="{{ url('/tutapos-settings') }}">{{trans('menu.application_settings')}}</a></li>
						<li class="divider"></li>
						<li><a href="{{ url('/auth/logout') }}">{{trans('menu.logout')}}</a></li>
					</ul>
				</li> -->
				<li><a href="#">{{ Auth::user()->name }}</a></li> 
                <li><a href="{{ url('auth/logout') }}" class="logout_button">Logout</a></li>
                                  
            </ul>
			@endif
            
            <!-- <li class=""><a href="{{ url('/home') }}">Login</a></li> -->
        </ul>      
    </nav> 
		<div class="container">

			<div class="home-content padding">
				<img class="img-responsive" src="images/landing/slider-logo.jpg" width="120px" alt="">				
				<!-- <h2>Explore the world through someone else's eyes.</h2>				 -->
				<!-- <div class="button">
					<a href="#" class="btn btn-primary btn-animated">Free Trail</a>
					<a href="#" class="btn btn-primary btn-animated">Buy Now</a>
				</div> -->
				<!-- <div class="app-icons text-center">
					<ul class="list-inline">
						<li><a href="#"><i class="fa fa-desktop"></i></a></li>
						<li><a href="#"><i class="fa fa-apple"></i></a></li>
						<li><a href="#"><i class="fa fa-windows"></i></a></li>
						<li><a href="#"><i class="fa fa-android"></i></a></li>
					</ul>
				</div> -->



			</div>
		</div>
	</div>

@endsection

@section('nav')

<header id="navigation">
	<div class="navbar" role="banner">
		<div class="container">
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
               <!--  <a class="navbar-brand" href="index.html">
					<img class="main-logo img-responsive" src="images/landing/logo.jpg" alt="" width="80" height="80">
                </a>  -->

            <!-- </div>  -->
            <nav id="mainmenu" class="collapse navbar-collapse navbar-lefts" aria-expanded="false">         
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('hk') }}">HOME</a></li>
                    <li class=""><a href="{{ url('hk/about') }}">Category 1</a></li>
                    <li class=""><a href="{{ url('hk/about') }}">Category 2</a></li>
                    <li class=""><a href="{{ url('hk/about') }}">Category 3</a></li>
                    @if (Auth::check())
						<li><a href="{{ url('/customers') }}">{{trans('menu.customers')}}</a></li>
						<li><a href="{{ url('/items') }}">{{trans('menu.items')}}</a></li>
						<li><a href="{{ url('/item-kits') }}">{{trans('menu.item_kits')}}</a></li>
						<li><a href="{{ url('/suppliers') }}">{{trans('menu.suppliers')}}</a></li>
						<li><a href="{{ url('/receivings') }}">{{trans('menu.receivings')}}</a></li>
						<li><a href="{{ url('/sales') }}">{{trans('menu.sales')}}</a></li>
						<li><a href="{{ url('/photo/index') }}">List All</a></li>
           				<li><a href="{{ url('/photo/create') }}">Upload New</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{trans('menu.reports')}} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/reports/receivings') }}">{{trans('menu.receivings_report')}}</a></li>
								<li><a href="{{ url('/reports/sales') }}">{{trans('menu.sales_report')}}</a></li>
							</ul>
						</li>
						<li><a href="{{ url('/employees') }}">{{trans('menu.employees')}}</a></li>
					@endif
                    <li class="">                    	
						<form action="{{ url('hk') }}">
							<input type="text" placeholder="Search..." name="search_field" required class="search" value="{{Input::get('search_field')}}">
	                        <input type="button" value="Search" class="button" name="search_btn" onclick="submit();">
				        </form>
					</li>
                    <!-- <li class=""><a href="{{ url('hk/about') }}">About Us</a></li> -->
                    <!-- <li class=""><a href="{{ url('hk/services') }}">Services</a></li>
                    <li class=""><a href="{{ url('hk/mediums') }}">Mediums</a></li>
                    <li class=""><a href="{{ url('hk/network') }}">Network</a></li>
                    <li class=""><a href="{{ url('hk/innovation') }}">Innovation</a></li>
                    <li class=""><a href="{{ url('hk/career') }}">Career</a></li> -->
                    <!-- <li class=""><a href="{{ url('hk/contact') }}">Contact</a></li> -->
                    <!-- <li class=""><a href="{{ url('/home') }}">Login</a></li> -->
                </ul>         
            </nav>  
           

            



        </div>
    </div>
</header>

@endsection



@section('about')

<div id="whatsit" class="padding">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.10s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
				<img class="img-responsive" src="images/landing/about_us.jpg" alt="" width="500px" height="500px">
			</div>
			<div class="col-sm-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.20s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInUp;">
				<div class="whatsit">
					<h1>SYNERGY MARKETING (ASIA) LTD</h1>
					<h2>YOUR PREFERRED IN-STORE MARKETING AND BRANDING PARTNER</h2>						
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum nulla pariatur. </p>
				</div>						
			</div>
		</div>
	</div>
</div>

@endsection



 @section('services')

<div id="whats-special" class="padding image-bg">
	<div class="overlay-bg"></div>
	<div class="container">
		<div class="text-center section-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.10s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-	: fadeInUp;">
			<img class="img-responsive" src="images/icons/t1.png" alt="">
			<h1>What’s Special</h1>
		</div>
		<div class="special-features">
			<div class="row"> 
				<div class="col-sm-3">
					<div class="special-content text-right wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInDown;">
						<h2>For Business</h2>
						<p>Sectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					</div>
					<div class="special-content text-right wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
						<h2>Top Technology</h2>
						<p>Ut enim ad minim veniam, quis nosexercitation ullaboris nisi ut aliquip ex ea commodo.</p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="special-image wow slideInUp" data-wow-duration="0.5s" data-wow-delay="0.7s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.7s; animation-name: slideInUp;">
						<img class="img-responsive" src="images/landing/special.png" alt="">
					</div>
				</div>
				<div class="col-sm-3">
					<div class="special-content text-left wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInDown;">
						<h2>Creative Design</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<div class="special-content text-left wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
						<h2>Advanced Security</h2>
						<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

@endsection

 @section('mediums')

<div id="compatibility" class="padding">
	<div class="container">
		<div class="section-title text-center wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInDown;">
			<img class="img-responsive" src="images/icons/t2.png" alt="">
			<h1>OS Compatibility</h1>
		</div>
		<div class="col-sm-6 left-side">
			<div class="compatibility">
				<div class="os text-right wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInLeft;">
					<h2>Android</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					<a href="#">More Detail</a>
				</div>
				<div class="os-image wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInRight;">
					<img class="img-responsive" src="images/landing/os1.png" alt="">
				</div>
			</div>
		</div>	
		<div class="col-sm-6 right-side">
			<div class="compatibility">
				<div class="os-image wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInLeft;">
					<img class="img-responsive" src="images/landing/os2.png" alt="">
				</div>
				<div class="os text-left wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInRight;">
					<h2>iPhone</h2>
					<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
					<a href="#">More Detail</a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

 @section('network')

<div id="video-section" class="padding image-bg">
	<div class="overlay-bg"></div>
	<div class="container text-center">
		<div class="section-title wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInDown;">
			<img class="img-responsive" src="images/icons/t3.png" alt="">
			<h1>Description with video</h1>
		</div>
		<div class="video wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: zoomIn;">
			<a class="video-link" href="https://vimeo.com/124415606"><i class="fa fa-youtube-play"></i></a>
			<img class="img-responsive" src="images/landing/video.png" alt="">
		</div>
	</div>
</div>

@endsection

 @section('innovation')

<div id="features" class="padding">
	<div class="container">
		<div class="row">
			<div class="text-center section-title wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInUp;">
				<img class="img-responsive" src="images/icons/t4.png" alt="">
				<h1>Discover All Features</h1>
			</div>				
		</div>
		<div class="all-features text-center">
			<div class="row">
				<div class="col-sm-3">
					<div class="feature wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInDown;">							
						<img class="img-responsive" src="images/icons/f1.png" alt="">
						<h2>Super Fast</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					<div class="feature wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">							
						<img class="img-responsive" src="images/icons/f5.png" alt="">
						<h2>Free Text</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="feature wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInDown;">							
						<img class="img-responsive" src="images/icons/f2.png" alt="">
						<h2>East to Use</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					<div class="feature wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInUp;">							
						<img class="img-responsive" src="images/icons/f6.png" alt="">
						<h2>Creative UI</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="feature wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInDown;">							
						<img class="img-responsive" src="images/icons/f3.png" alt="">
						<h2>Video Calls</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					<div class="feature wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">							
						<img class="img-responsive" src="images/icons/f7.png" alt="">
						<h2>Instant Messaging</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="feature wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInDown;">							
						<img class="img-responsive" src="images/icons/f4.png" alt="">
						<h2>Free Call</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
					<div class="feature wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.6s; animation-name: fadeInUp;">							
						<img class="img-responsive" src="images/icons/f8.png" alt="">
						<h2>File Sharing</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>


@endsection

@section('career')

<div id="screenshots" class="padding image-bg">
	<div class="overlay-bg"></div>
		<div class="container">
			<div class="text-center section-title  wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInDown;">
				<img class="img-responsive" src="images/icons/t5.png" alt="">
				<h1>Screenshot Gallery</h1>
			</div>
			<div id="screenshot-slider" class="owl-carousel owl-theme" style="display: block; opacity: 1;">
				<div class="owl-wrapper-outer"><div class="owl-wrapper" style="display: block; width: 4230px; left: 0px; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 235px;"><div class="screenshot wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInUp;">
					<a class="image-link" href="images/landing/screen1.jpg"><img class="img-responsive" src="images/landing/screen1.jpg" alt=""></a>
				</div></div><div class="owl-item" style="width: 235px;"><div class="screenshot wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
					<a class="image-link" href="images/landing/screen2.jpg"><img class="img-responsive" src="images/landing/screen2.jpg" alt=""></a>
				</div></div><div class="owl-item" style="width: 235px;"><div class="screenshot wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInUp;">
					<a class="image-link" href="images/landing/screen3.jpg"><img class="img-responsive" src="images/landing/screen3.jpg" alt=""></a>
				</div></div><div class="owl-item" style="width: 235px;"><div class="screenshot wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
					<a class="image-link" href="images/landing/screen4.jpg"><img class="img-responsive" src="images/landing/screen4.jpg" alt=""></a>
				</div></div><div class="owl-item" style="width: 235px;"><div class="screenshot wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
					<a class="image-link" href="images/landing/screen2.jpg"><img class="img-responsive" src="images/landing/screen2.jpg" alt=""></a>
				</div></div><div class="owl-item" style="width: 235px;"><div class="screenshot wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInUp;">
					<a class="image-link" href="images/landing/screen1.jpg"><img class="img-responsive" src="images/landing/screen1.jpg" alt=""></a>
				</div></div><div class="owl-item" style="width: 235px;"><div class="screenshot wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
					<a class="image-link" href="images/landing/screen4.jpg"><img class="img-responsive" src="images/landing/screen4.jpg" alt=""></a>
				</div></div><div class="owl-item" style="width: 235px;"><div class="screenshot wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInUp;">
					<a class="image-link" href="images/landing/screen3.jpg"><img class="img-responsive" src="images/landing/screen3.jpg" alt=""></a>
				</div></div><div class="owl-item" style="width: 235px;"><div class="screenshot wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInUp;">
					<a class="image-link" href="images/landing/screen1.jpg"><img class="img-responsive" src="images/landing/screen1.jpg" alt=""></a>
				</div></div></div></div>									
			<div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
		</div>
	</div>

@endsection

@section('contact')

	<div id="contact" class="padding">

	<hr>
		<div class="container text-center">
			<div class="section-title wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInDown;">
				<img class="img-responsive" src="images/landing/t10.png" alt="">
				<h1>Send us a Message</h1>
			</div>
			<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="#">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInDown;">
							<input type="text" class="form-control" required="required" placeholder="Your Name">
						</div>
						<div class="form-group wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInDown;">
							<input type="email" class="form-control" required="required" placeholder="Your Email">
						</div>
						<div class="form-group wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInDown;">
							<input type="text" class="form-control" required="required" placeholder="Subject">
						</div>	
					</div>
					<div class="col-sm-6">
						 <div class="form-group wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.6s; animation-name: fadeInUp;">
							<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Enter Message Here"></textarea>
						</div> 							
					</div>	
					<div class="form-group wow slideInUp" data-wow-duration="0.5s" data-wow-delay="0.7s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.7s; animation-name: slideInUp;">
						<button type="submit" class="btn btn-primary btn-animated ">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>


@endsection

@section('footer')

	<footer id="footer">
		<div class="overlay-bg"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-7">
					<p>© Copyright 2015 <a href="#">Synergy Marketing</a>.</p>
				</div>
				<div class="col-sm-5">
					<ul class="list-inline footer-menu text-right">
						<li><a href="#">English(us)</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Cookies</a></li>
					</ul>
				</div>	
			</div>
		</div>
	</footer>


@endsection


	@yield('home')
	@yield('nav')
	@yield('sale')
	<!-- @yield('about') -->
	<!-- @yield('services')
	@yield('mediums')
	@yield('network')
	@yield('innovation')
	@yield('career') -->
	@yield('content')
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
