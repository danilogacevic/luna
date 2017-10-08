<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>MyTrip Travel Agency</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Travel Company">
    <meta name="author" content="Hitesh Jariwla">
    <!-- Standard Favicon-->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">   
    
	<link rel="stylesheet" href="{{asset('css/template.css')}}">    
   

    <!-- Google Web Fonts-->        
	<link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<!-- Google Fonts End -->

	<!-- Font Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">


</head>

@yield('styles')
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">
        </div>
    </div>
    <!-- Header : starts -->
    <header class="header-wrapper">
		<!-- Logo -->
		<div class="logo-wrap float-left">
			<div class="vertical-align">
				<a href="#">
					<img class="logo text-left" src="{{asset('images/luna_logo.JPG')}}" alt="logo">
				</a>
			</div>
		</div>		
		<!-- Menu Section : starts -->
		<nav id="baseImage" class="menu-container main-home-menu float-left">
			<ul class="menu">
				<li class="main-menu-item"><a class="scroll" href="#home">Naslovna</a></li>
				<li class="main-menu-item"><a class="scroll" href="#about">o nama</a></li>
                <li class="main-menu-item"><a class="scroll" href="#services">usluge</a></li>
				<li class="main-menu-item"><a class="scroll" href="#packages">aranzmani</a></li>
				<li class="main-menu-item"><a class="scroll" href="#gallery">galerija</a></li>
				<li class="main-menu-item"><a class="scroll" href="#deals">rent a car</a></li>				
				<li class="main-menu-item"><a class="scroll" href="#testimonial">Partneri</a></li>
				<li class="main-menu-item"><a class="scroll" href="#contact">kontakt</a></li>
			</ul>
		</nav>
		<!-- Menu Section : ends -->
		<!-- Header Content Block : starts -->
		<div class="header-content-block float-left">
			<div class="vertical-align">
				<div class="social-icons text-right">
					<ul>
						<li><a href="http://www.facebook.com/sharer.php?u=http://lunatravelinternational.me/"><i class="ion-social-facebook"></i></a></li>
						<li><a href="https://twitter.com/share?url=http://lunatravelinternational.me/&amp;text=Turisticka agencija Luna interanitional&amp;"><i class="ion-social-twitter"></i></a></li>
						<li><a href="https://plus.google.com/share?url=http://lunatravelinternational.me/"><i class="ion-social-googleplus"></i></a></li>
					</ul>
				</div>
				<!-- Mobile Menu Trigger -->
				<div class="mobile-nav-container text-right">
					<div class="mobile-nav">
						<span></span>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Content Block : ends -->
	</header>
    <!-- Header : ends -->