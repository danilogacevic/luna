<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="utf-8"> -->
    <title>MyTrip Travel Agency</title>
    
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="user-scalable = yes">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Turistička agenicija Luna international pruža kompletan asortiman turističkih usluga, od rezervacije hotela, prodaje najeftinijih avio karata do usluga rent a car - a ">
	<meta name="keywords" content="avio karte, turistički aranžmani, turističke agencije crna gora">

   <!-- Standard Favicon-->
    <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">   
    
	<link rel="stylesheet" href="{{asset('css/template.css')}}">    
   

    <!-- Google Web Fonts-->        
	<link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
	<!-- Google Fonts End -->
</head>
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
					<img class="logo text-left" src="images/logo.png" alt="logo">
				</a>
			</div>
		</div>
		<!-- Menu Section : starts -->
		<nav id="baseImage" class="menu-container main-home-menu float-left">
			<ul class="menu">
				<li class="main-menu-item"><a class="scroll" href="/#home">naslovna</a></li>
				<li class="main-menu-item"><a class="scroll" href="/#about">o nama</a></li>
                <li class="main-menu-item"><a class="scroll" href="/#services">usluge</a></li>
				<li class="main-menu-item"><a class="scroll" href="/#packages">aranzmani</a></li>
				<li class="main-menu-item"><a class="scroll" href="/#gallery">galerija</a></li>
				<li class="main-menu-item"><a class="scroll" href="/#deals">rent a car</a></li>				
				<li class="main-menu-item"><a class="scroll" href="/#blog">Blog</a></li>				
				<li class="main-menu-item"><a class="scroll" href="/#contact">kontakt</a></li>
			</ul>
		</nav>
		<!-- Menu Section : ends -->
		<!-- Header Content Block : starts -->
		<div class="header-content-block float-left">
			<div class="vertical-align">
				<div class="social-icons text-right">
					<ul>
						<li><a href="#"><i class="ion-social-facebook"></i></a></li>
						<li><a href="#"><i class="ion-social-twitter"></i></a></li>
						<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
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
    <!-- Master Wrap : starts -->
    <section id="master-wrap" class="master-wrap">
		<section id="inner-page-header" class="inner-page-header standard-blog-post text-left pad-top pad-bottom">
			<div class="inner-page-header-overlay">
				<!-- Container : starts -->
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="page-title ">{{$post->title}}</h1>
							<!-- <p class="page-sub-title white">Lorem ipsum dolor sit amet, consectetur adipisicing</p> -->
						</div>
					</div>
				</div>
				<!-- Container : ends -->
			</div>
		</section>
		<section class="light-grey-bg pad-min-top-half pad-min-bottom-half">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="tour-post-details text-left">
							<p><!-- <a class="inner-page-navigation dark-grey" href="#">6 Days / 5 Nights</a> --> &nbsp; | &nbsp;</p>
							<p class="dark-grey">{{$post->created_at->format('d-M-y')}} &nbsp; | &nbsp;</p>							
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="tour-post-path text-right">
							<p><a class="inner-page-navigation dark-grey" href="#"></a> 
							<a class="inner-page-navigation dark-grey" href="#"></a> 
							<a class="inner-page-navigation dark-grey" href="#"></a></p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="tour-page-content pad-top pad-bottom white-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-8">						
						<div class="row">
							<div class="col-md-12" id="raspored">								
								{!!$post->body!!}                              
                                <h4>Uključeno je</h4>
                                <p>
						            
					            </p>
                                <div class="row">
						<div class="col-md-8 col-sm-8">
							<ul class="list_ok">
								{!!$post->whats_included!!}
							</ul>
						</div>
						<!-- <div class="col-md-6 col-sm-6">
							<ul class="list_ok">
								<li>Lorem ipsum dolor sit amet</li>
								<li>No scripta electram necessitatibus sit</li>
								<li>Quidam percipitur instructior an eum</li>
								<li>No scripta electram necessitatibus sit</li>
							</ul>
						</div> -->
					</div>
							</div>
						</div>	
						
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="box_style_1 expose">
			                    <h3 class="inner">- Booking -</h3>
			                    <div class="row">
				                    <div class="col-md-6 col-sm-6">
					                    <div class="form-group">
						                    <label><i class="icon-calendar-7"></i> Select a date</label>
						                    <input class="date-pick form-control" data-date-format="M d, D" value="24/05/2016" type="text">
					                    </div>
				                    </div>
				                    <div class="col-md-6 col-sm-6">
					                    <div class="form-group">
						                    <label><i class=" icon-clock"></i> Time</label>
						                    <input class="time-pick form-control" value="12:00 AM" type="text">
					                    </div>
				                    </div>
			                    </div>
			                    <div class="row">
				                    <div class="col-md-6 col-sm-6">
					                    <div class="form-group">
						                    <label>Adults</label>
						                    <div class="numbers-row">
							                    <input type="text" value="1" id="adults" class="qty2 form-control" name="quantity">
						                    <div class="inc button_inc">+</div><div class="dec button_inc">-</div></div>
					                    </div>
				                    </div>
				                    <div class="col-md-6 col-sm-6">
					                    <div class="form-group">
						                    <label>Children</label>
						                    <div class="numbers-row">
							                    <input type="text" value="0" id="children" class="qty2 form-control" name="quantity">
						                    <div class="inc button_inc">+</div><div class="dec button_inc">-</div></div>
					                    </div>
				                    </div>
			                    </div>
			                    <br>
			                    <table class="table table_summary">
			                    <tbody>
			                    <tr>
				                    <td>
					                    Adults
				                    </td>
				                    <td class="text-right">
					                    2
				                    </td>
			                    </tr>
			                    <tr>
				                    <td>
					                    Children
				                    </td>
				                    <td class="text-right">
					                    0
				                    </td>
			                    </tr>
			                    <tr>
				                    <td>
					                    Total amount
				                    </td>
				                    <td class="text-right">
					                    3x $52
				                    </td>
			                    </tr>
			                    <tr class="total">
				                    <td>
					                    Total cost
				                    </td>
				                    <td class="text-right">
					                    $154
				                    </td>
			                    </tr>
			                    </tbody>
			                    </table>
                                <div class="button-style-01-container add-min-top-half">
												<button type="submit" name="submit" id="submit" class="button-style-01 white-button light-black">Book now</button>
											</div>
			                    <a class="button-style-01 white-button light-black" href="cart.html"></a>			                    
		                    </div>
					</div>
				</div>
			</div>
		</section>
		<!-- Footer : starts -->
		<section id="footer" class="footer container-fluid dark-grey-bg">
			<div class="row">				
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="footer-right-col">
						<!-- Footer Social Icons : starts -->
						<div class="footer-social-icons text-center">
							<a class="white" href="www.facebook.html">
								<span class="ion-social-facebook"></span>
							</a>
							<a class="white" href="www.twitter.html">
								<span class="ion-social-twitter"></span>
							</a>
							<a class="white" href="www.googleplus.html">
								<span class="ion-social-googleplus"></span>
							</a>
						</div>
						<!-- Footer Social Icons : ends -->
						<div class="footer-text-content text-center">
							<p class="white">&copy; Mytrip Travel Agency </p>
						</div>
					</div>
				</div>
			</div>
			<!-- To Top -->
			<div class="to-top white-bg">
				<a class="scroll dark" href="#master-wrap"><i class="ion-ios-arrow-thin-up"></i></a>
			</div>
		</section>
		<!-- Footer : ends -->

	</section>
    <!-- Master Wrap : ends -->
    <!-- Google Map API -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

      <script src="{{asset('js/template.js')}}"></script>

      @yield('scripts')
</body>
</html>
