@extends('master')

@section('home')

	<div id="home-section" class="image-bg">
		<div class="container">
			<div class="home-content padding">
				<img class="img-responsive" src="images/landing/slider-logo.png" alt="">				
				<h2>Explore the world through someone else's eyes.</h2>				
				<div class="button">
					<a href="#" class="btn btn-primary btn-animated">Free Trail</a>
					<a href="#" class="btn btn-primary btn-animated">Buy Now</a>
				</div>
				<div class="app-icons text-center">
					<ul class="list-inline">
						<li><a href="#"><i class="fa fa-desktop"></i></a></li>
						<li><a href="#"><i class="fa fa-apple"></i></a></li>
						<li><a href="#"><i class="fa fa-windows"></i></a></li>
						<li><a href="#"><i class="fa fa-android"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div><!--/#home-section--> 

@endsection

@section('nav')

<header id="navigation">
	<div class="navbar" role="banner">
		<div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="#home-section">
					<img class="main-logo img-responsive" src="images/landing/logo.png" alt="" width="80" height="80">
                </a> 

            </div> 
            <nav id="mainmenu" class="collapse navbar-collapse navbar-right" aria-expanded="false">         
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home-section">HOME</a></li>
                    <li class=""><a href="#about">About Us</a></li>
                    <li class=""><a href="#services">Services</a></li>
                    <li class=""><a href="#mediums">Mediums</a></li>
                    <li class=""><a href="#network">Network</a></li>
                    <li class=""><a href="#innovation">Innovation</a></li>
                    <li class=""><a href="#career">Career</a></li>
                    <li class=""><a href="#contact">Contact</a></li>
                    <li class=""><a href="{{ url('/home') }}">Login</a></li>
                </ul>         
            </nav>               
        </div>
    </div>
</header><!--/#navigation--> 

@endsection

@section('about')

<div id="about" class="padding">
<div class="container">
	  <div class="row">
	  </div>
</div>
	<div class="container">
	  <div class="row">
	    <div class="col-lg-12">
	      <h3 class="text-center">Zigzag Timeline Layout (and Cats)</h3>
	      <p>
	        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	      </p>
	      <ul class="timeline">
	        <li>
	          <div class="timeline-image">
	            <img class="img-circle img-responsive" src="http://lorempixel.com/250/250/cats/1" alt="">
	          </div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <h4>Step One</h4>
	              <h4 class="subheading">Subtitle</h4>
	            </div>
	            <div class="timeline-body">
	              <p class="text-muted">
	                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	              </p>
	            </div>
	          </div>
	          <div class="line"></div>
	        </li>
	        <li class="timeline-inverted">
	          <div class="timeline-image">
	            <img class="img-circle img-responsive" src="http://lorempixel.com/250/250/cats/2" alt="">
	          </div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <h4>Step Two</h4>
	              <h4 class="subheading">Subtitle</h4>
	            </div>
	            <div class="timeline-body">
	              <p class="text-muted">
	                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	              </p>
	            </div>
	          </div>
	          <div class="line"></div>
	        </li>
	        <li>
	          <div class="timeline-image">
	            <img class="img-circle img-responsive" src="http://lorempixel.com/250/250/cats/3" alt="">
	          </div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <h4>Step Three</h4>
	              <h4 class="subheading">Subtitle</h4>
	            </div>
	            <div class="timeline-body">
	              <p class="text-muted">
	                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	              </p>
	            </div>
	          </div>
	          <div class="line"></div>
	        </li>
	        <li class="timeline-inverted">
	          <div class="timeline-image">
	            <img class="img-circle img-responsive" src="http://lorempixel.com/250/250/cats/4" alt="">
	          </div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <h4>Step Three</h4>
	              <h4 class="subheading">Subtitle</h4>
	            </div>
	            <div class="timeline-body">
	              <p class="text-muted">
	                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	              </p>
	            </div>
	          </div>
	          <div class="line"></div>
	        </li>
	        <li>
	          <div class="timeline-image">
	            <img class="img-circle img-responsive" src="http://lorempixel.com/250/250/cats/5" alt="">
	          </div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <h4>Bonus Step</h4>
	              <h4 class="subheading">Subtitle</h4>
	            </div>
	            <div class="timeline-body">
	              <p class="text-muted">
	                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	              </p>
	            </div>
	          </div>
	          <div class="line"></div>
	        </li>
	       <li class="timeline-inverted">
	          <div class="timeline-image">
	            <img class="img-circle img-responsive" src="http://lorempixel.com/250/250/cats/4" alt="">
	          </div>
	          <div class="timeline-panel">
	            <div class="timeline-heading">
	              <h4>Step Three</h4>
	              <h4 class="subheading">Subtitle</h4>
	            </div>
	            <div class="timeline-body">
	              <p class="text-muted">
	                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
	              </p>
	            </div>
	          </div>
	          
	        </li>
	      </ul> <!-- TimeLine -->
	    </div> <!-- Col-12 -->
	  </div> <!-- ROW -->
	</div>
</div><!--/#whatsit-->

@endsection

@section('services')

<div id="services" class="padding image-bg">
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
</div><!--/#whats-special-->

@endsection

@section('mediums')

<div id="mediums" class="padding">
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
</div><!--/#compatibility-->

@endsection

@section('network')

<div id="network" class="padding image-bg">
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
</div><!--/#video-section-->

@endsection

@section('innovation')

<div id="innovation" class="padding">
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
</div><!--/#features--> 


@endsection

@section('career')

<div id="career" class="padding image-bg">
	<div class="overlay-bg"></div>
		<div class="container">
			<div class="text-center section-title  wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInDown;">
				<img class="img-responsive" src="images/icons/t5.png" alt="">
				<h1>Screenshot Gallery</h1>
			</div>
			<div id="screenshot-slider" class="owl-carousel owl-theme" style="display: block; opacity: 1;">
				<div class="owl-wrapper-outer">
					<div class="owl-wrapper" style="display: block; width: 4230px; left: 0px; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);">
						<div class="owl-item" style="width: 235px;">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen1.jpg">
								<img class="img-responsive" src="images/landing/screen1.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="owl-item" style="width: 235px;">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen2.jpg">
								<img class="img-responsive" src="images/landing/screen2.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="owl-item" style="width: 235px;">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen3.jpg">
								<img class="img-responsive" src="images/landing/screen3.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="owl-item" style="width: 235px;">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen4.jpg">
								<img class="img-responsive" src="images/landing/screen4.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="owl-item" style="width: 235px;">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen2.jpg">
								<img class="img-responsive" src="images/landing/screen2.jpg" alt="">
								</a>
							</div>
						</div>
						<div class="owl-item" style="width: 235px;">
						<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.4s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.4s; animation-name: fadeInUp;">
							<a class="image-link" href="images/landing/screen1.jpg">
							<img class="img-responsive" src="images/landing/screen1.jpg" alt="">
							</a>
						</div>
						</div>
						<div class="owl-item" style="width: 235px;">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.3s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen4.jpg"><img class="img-responsive" src="images/landing/screen4.jpg" alt=""></a>
							</div>
						</div>
						<div class="owl-item" style="width: 235px;">
						<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInUp;">
							<a class="image-link" href="images/landing/screen3.jpg">
							<img class="img-responsive" src="images/landing/screen3.jpg" alt="">
							</a>
						</div>
						</div>
						<div class="owl-item" style="width: 235px;">
							<div class="career wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.2s; animation-name: fadeInUp;">
								<a class="image-link" href="images/landing/screen1.jpg">
								<img class="img-responsive" src="images/landing/screen1.jpg" alt="">
								</a>
							</div>
						</div>
					</div>
				</div>									
				<div class="owl-controls clickable">
					<div class="owl-pagination">
						<div class="owl-page active">
							<span class=""></span>
						</div>
						<div class="owl-page">
							<span class=""></span>
						</div>
						<div class="owl-page">
							<span class=""></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--/screenshots-->

@endsection

@section('contact')

	<div id="contact" class="padding">
		<div class="container text-center">
			<div class="section-title wow fadeInDown" data-wow-duration="0.5s" data-wow-delay="0.1s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.1s; animation-name: fadeInDown;">
				<img class="img-responsive" src="images/icons/t10.png" alt="">
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
	</div><!--/contact-->


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



