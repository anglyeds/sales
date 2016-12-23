@extends('countryhk')

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
                
                <a class="navbar-brand" href="index.html">
					<img class="main-logo img-responsive" src="images/landing/logo.png" alt="" width="80" height="80">
                </a> 

            </div> 
            <nav id="mainmenu" class="collapse navbar-collapse navbar-right" aria-expanded="false">         
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#home-section">HOME</a></li>
                    <li class=""><a href="#about">About Us</a></li>
                    <li class=""><a href="#services">Services</a></li>
                    <li class=""><a href="#medium">Mediums</a></li>
                    <li class=""><a href="#network">Network</a></li>
                    <li class=""><a href="#innovation">Innovation</a></li>
                    <li class=""><a href="#career">Career</a></li>
                    <li class=""><a href="#contact">Contact</a></li>
                </ul>         
            </nav>               
        </div>
    </div>
</header><!--/#navigation--> 

@endsection