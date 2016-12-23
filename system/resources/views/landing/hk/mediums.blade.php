@extends('countryhk')

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
</div><!--/#compatibility-->

@endsection
