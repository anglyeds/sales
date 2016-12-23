@extends('countryhk')

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
</div><!--/#video-section-->

@endsection
