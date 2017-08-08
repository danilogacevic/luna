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
				<li class="main-menu-item"><a class="scroll" href="#home">Home</a></li>
				<li class="main-menu-item"><a class="scroll" href="#about">About</a></li>
                <li class="main-menu-item"><a class="scroll" href="#services">Services</a></li>
				<li class="main-menu-item"><a class="scroll" href="#packages">Packages</a></li>
				<li class="main-menu-item"><a class="scroll" href="#gallery">Gallery</a></li>
				<li class="main-menu-item"><a class="scroll" href="#deals">Hot Deals</a></li>				
				<li class="main-menu-item"><a class="scroll" href="#blog">Blog</a></li>
				<li class="main-menu-item"><a class="scroll" href="#contact">Contact</a></li>
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
		<!-- Home : starts -->
		<section id="home" class="text-effect-block full-height">
			<!-- Animate Carousel : starts -->
			<div class="animate-carousel text-effect-content-carousel-2 black-dots bg-image-carousel mouse-controls-fade" data-dots="true" data-nav="true" data-autoplay="true" data-autoplay-speed="4000" data-anim-out="" data-anim-in="" data-items="1" data-xsnumber="1" data-smnumber="1" data-mdnumber="1">
				<!-- Item01 -->
				<div class="item full-height">
					<!-- Background Image Source -->
					<img src="images/slide1.jpg" class="hidden bg-image" alt="hidden_img" data-no-retina>
					<!-- Animate Content Block : starts -->
					<div class="cd-intro full-height">
						<div class="mask cd-intro-content vertical-align text-center">
							<h2 class="white"><span>Trendy Designs</span></h2>
							<div class="action-wrapper">
								<div class="action-block">
									<p class="white">
										Smart and detailed designs keep us one step ahead
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Animate Content Block : ends -->
				</div>
				<!-- Item02 -->
				<div class="item full-height">
					<!-- Background Image Source -->
					<img src="images/slide2.jpg" class="hidden bg-image" alt="hidden_img" data-no-retina>
					<!-- Animate Content Block : starts -->
					<div class="cd-intro full-height">
						<div class="cd-intro-content mask vertical-align text-center">
							<h2 class="white"><span>Simple and Minimal</span></h2>
							<div class="action-wrapper">
								<div class="action-block">
									<p class="white">
										Easy to use templates from our experienced team
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Animate Content Block : ends -->
				</div>
				<!-- Item03 -->
				<div class="item full-height">
					<!-- Background Image Source -->
					<img src="images/slide3.jpg" class="hidden bg-image" alt="hidden_img" data-no-retina>
					<!-- Animate Content Block : starts -->
					<div class="cd-intro full-height">
						<div class="cd-intro-content mask vertical-align text-center">
							<h2 class="white"><span>Futuristic Designs</span></h2>
							<div class="action-wrapper">
								<div class="action-block">
									<p class="white">
										Just the number of users shows the strength
									</p>
								</div>
							</div>
						</div>
					</div>
					<!-- Animate Content Block : ends -->
				</div>
			</div>
			<!-- Animate Carousel : ends -->            
		</section>
        <div class="light-grey-bg pad-top pad-bottom ">
				<!-- Container : starts-->
				<div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 wow slideInLeft">
                            <div class="item tours">	
							   <img src="Images/tour/tour_img1.jpg" alt="Tour Image">
							   <div class="tour-detail">
                               <div class="tour-title">								
								    <h4>Paris Family Tour</h4>
								</div>
								<div class="row">								
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<div class="ed_stardiv">
											<div class="star-rating"><span style="width:80%;"></span></div>
										</div>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<span class="price">$45</span>
									</div>
									</div>																		
								<p>
								Lorem Ipsum Hotel is situated 5 minutes walk from London's Zoological Gardens and a metro station in tree.
								</p>
								</div>								
						    </div>
                        </div>
						<div class="col-md-4 col-sm-4 wow fadeIn">
                            <div class="item tours">	
							   <img src="Images/tour/tour_img2.jpg" alt="Tour Image">
							   <div class="tour-detail">
                               <div class="tour-title">								
								    <h4>Maldives Tour</h4>
								</div>
								<div class="row">								
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<div class="ed_stardiv">
											<div class="star-rating"><span style="width:95%;"></span></div>
										</div>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<span class="price">$95</span>
									</div>
									</div>																		
								<p>
								Lorem Ipsum Hotel is situated 5 minutes walk from London's Zoological Gardens and a metro station in tree.
								</p>
								</div>								
						    </div>
                        </div>
						<div class="col-md-4 col-sm-4 wow slideInRight">
                            <div class="item tours">	
							   <img src="Images/tour/tour_img3.jpg" alt="Tour Image">
							   <div class="tour-detail">
                               <div class="tour-title">								
								    <h4>Egypt Tour</h4>
								</div>
								<div class="row">								
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
										<div class="ed_stardiv">
											<div class="star-rating"><span style="width:90%;"></span></div>
										</div>
									</div>
									<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
										<span class="price">$145</span>
									</div>
									</div>																		
								<p>
								Lorem Ipsum Hotel is situated 5 minutes walk from London's Zoological Gardens and a metro station in tree.
								</p>
								</div>								
						    </div>
                        </div>                                              
                    </div>
                </div>
                <!-- Container : end-->
            </div>
		<!-- Home : ends -->
		<!-- About : starts -->
		<section id="about" class="about nav-highlight">
			<!-- Page Title : starts -->
			<div class="bg container-fluid pad-top-half pad-bottom-half light-white-bg parallax">
				<div class="page-title-container">
					<div class="row">
						<!-- Container : starts -->
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="page-title-icon light-white">
										<span class="ion-ios-paper-outline"></span>
									</div>
									<div class="page-title-wrap">
										<h2 class="page-title light-white">About Us</h2>
										<p class="page-sub-title light-white">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Container : ends -->

					</div>
				</div>
			</div>
			<!-- Page Title : ends -->
			<!-- About Static Block : starts -->
			<div class="pad-top pad-bottom ">
				<!-- Container : starts-->
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="wow slideInLeft">
								<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</div>
                        <div class="col-md-4">
                        <div class="button-style-01-container wow slideInRight">
									<img src="images/about-img1.jpg" alt="" />
                                        <div class="arrow-img">
                                            <img src="Images/according-arrow.png" alt="Arrow">
                                        </div>
								</div>
                        </div>
					</div>
                    <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <div class="item element-content wow slideInLeft">									
						    <h4>Vision</h4>
							    <p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
									in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								    </p>
								</div>
                        </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item element-content wow fadeIn">									
						    <h4>Mission</h4>
							    <p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
									in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								    </p>
								</div>
                        </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item element-content wow slideInRight">									
						    <h4>Strengths & Values</h4>
							    <p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
									in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								    </p>
								</div>
                        </div>
                    </div>                    
				</div>
				<!-- Container : ends -->
			</div>
			<!-- About Static Block : ends -->
		</section>
		<!-- About : ends -->
		<!-- Services : starts -->
		<section id="services" class="services nav-highlight">
			<!-- Page Title : starts -->
			<div class="bg container-fluid pad-top-half pad-bottom-half light-grey-bg parallax">
				<div class="page-title-container">
					<div class="row">
						<!-- Container : starts -->
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="page-title-icon">
										<span class="ion-ios-cog-outline light-white"></span>
									</div>
									<div class="page-title-wrap">
										<h2 class="page-title light-white">Services</h2>
										<p class="page-sub-title light-white">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Container : ends -->
					</div>
				</div>
			</div>
			<!-- Page Title : ends -->
			<!-- Services Content : starts -->
			<div class="services-content pad-top pad-bottom">
				<!-- Background Overlay -->
				<div class="bg-overlay black-bg"></div>
				<!-- Container : starts -->
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<!-- Services Item01 -->
							<a href="#" class="services-content-block light-color blue-bg">
								<i class="services-content-icon ion-android-train white"></i>
								<h5 class="services-content-head white">Rail Booking</h5>
								<p class="services-content-text white">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
							</a>

							<!-- Services Item02 -->
							<a href="#" class="services-content-block dark-color white light-black-bg">
								<i class="services-content-icon ion-android-restaurant white"></i>
								<h5 class="services-content-head white">Hotel Booking</h5>
								<p class="services-content-text white">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
							</a>

							<!-- Services Item03 -->
							<a href="#" class="services-content-block dark-color white light-black-bg">
								<i class="services-content-icon ion-android-plane white"></i>
								<h5 class="services-content-head white">Flight Booking</h5>
								<p class="services-content-text white">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
							</a>

							<!-- Services Item04 -->
							<a href="#" class="services-content-block light-color blue-bg">
								<i class="services-content-icon ion-android-boat white"></i>
								<h5 class="services-content-head white">Cruises Booking</h5>
								<p class="services-content-text white">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
								</p>
							</a>
						</div>
					</div>
				</div>
				<!-- Container : ends -->
			</div>
			<!-- Services Content : ends -->
		</section>
		<!-- Services : ends -->
		<!-- Packages : starts -->
		<section id="packages" class="nav-highlight">
			<!-- Page Title : starts -->
			<div class="bg container-fluid pad-top-half pad-bottom-half light-white-bg parallax">
				<div class="page-title-container">
					<div class="row">
						<!-- Container : starts -->
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="page-title-icon">
										<span class="ion-ios-people-outline white"></span>
									</div>
									<div class="page-title-wrap">
										<h2 class="page-title white">Tour Packages</h2>
										<p class="page-sub-title white">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Container : ends -->
					</div>
				</div>
			</div>
			<!-- Page Title : ends -->
			<!-- Team Content : starts -->
			<div class="packages-content pad-top pad-bottom light-grey-bg">
				<!-- Container : starts -->
				<div class="container">
					<div class="row">        	
            <div class="col-lg-12 col-md-12">     
    			<div class="strip_all_tour_list wow fadeIn animated" data-wow-delay="0.1s">
                   <div class="row">
                	<div class="col-lg-4 col-md-4 col-sm-4">                        
                    	<div class="img_list"><a href="{{route('single-tour')}}"><div class="ribbon popular"></div><img src="images/tour/tour_img4.jpg" alt="">
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    		<div class="tour_list_desc">
                    		<h3><strong>Arch Triomphe</strong> tour</h3>
                            <div class="ed_stardiv">
								<div class="star-rating"><span style="width:80%;"></span></div>
							</div>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
                            <ul class="add_info">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-time-outline"></i></span>
                                	<div class="tooltip-content"><h4>Schedule</h4>
                                    	<strong>Monday to Friday</strong> 09.00 AM - 5.30 PM<br>
                                        <strong>Saturday</strong> 09.00 AM - 5.30 PM<br>
                                        <strong>Sunday</strong> <span class="label label-danger">Closed</span>
                                </div>
                              </div>
                           </li>
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-location-outline"></i></span>
                                	<div class="tooltip-content"><h4>Address</h4>
                                    	Musee du Louvre, 75058 Paris - France
                                </div>
                              </div>
                           </li> 
                              <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-volume-high"></i></span>
                                	<div class="tooltip-content"><h4>Languages</h4>
                                    	English - French - Chinese - Russian - Italian
                                </div>
                              </div>
                           </li>                                                         
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-android-train"></i></span>
                                	<div class="tooltip-content"><h4>Transport</h4>
                                    	<strong>Metro: </strong>Musee du Louvre station (line 1)<br>
                                        <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95<br>
                                </div>
                              </div>
                           </li>
                            </ul>
                            </div>
                    </div>
					<div class="col-lg-2 col-md-2 col-sm-2">
                    	<div class="price_list"><div><sup>$</sup>39<span class="normal_price_list">$99</span><small>Per person</small>
                        <p><a href="single_tour.html" class="btn_1">Details</a></p>
                        </div>
                       
                        </div>
                    </div>
                    </div>
				</div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn animated" data-wow-delay="0.1s">
                   <div class="row">
                	<div class="col-lg-4 col-md-4 col-sm-4">                        
                    	<div class="img_list"><a href="single_tour.html"><div class="ribbon popular"></div><img src="images/tour/tour_img5.jpg" alt="">
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    		<div class="tour_list_desc">
                    		<h3><strong>Notredame</strong> tour</h3>
                            <div class="ed_stardiv">
								<div class="star-rating"><span style="width:80%;"></span></div>
							</div>
                            <div class="clearfix visible-xs-block"></div>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
                            <ul class="add_info">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-time-outline"></i></span>
                                	<div class="tooltip-content"><h4>Schedule</h4>
                                    	<strong>Monday to Friday</strong> 09.00 AM - 5.30 PM<br>
                                        <strong>Saturday</strong> 09.00 AM - 5.30 PM<br>
                                        <strong>Sunday</strong> <span class="label label-danger">Closed</span>
                                </div>
                              </div>
                           </li>
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-location-outline"></i></span>
                                	<div class="tooltip-content"><h4>Address</h4>
                                    	Musee du Louvre, 75058 Paris - France
                                </div>
                              </div>
                           </li> 
                              <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-volume-high"></i></span>
                                	<div class="tooltip-content"><h4>Languages</h4>
                                    	English - French - Chinese - Russian - Italian
                                </div>
                              </div>
                           </li>                                                         
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-android-train"></i></span>
                                	<div class="tooltip-content"><h4>Transport</h4>
                                    	<strong>Metro: </strong>Musee du Louvre station (line 1)<br>
                                        <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95<br>
                                </div>
                              </div>
                           </li>
                            </ul>
                            </div>
                    </div>
					<div class="col-lg-2 col-md-2 col-sm-2">
                    	<div class="price_list"><div><sup>$</sup>42*<span class="normal_price_list">$99</span><small>*Per person</small>
                        <p><a href="single_tour.html" class="btn_1">Details</a></p>
                        </div>
                       
                        </div>
                    </div>
                    </div>
				</div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn animated" data-wow-delay="0.1s">
                   <div class="row">
                	<div class="col-lg-4 col-md-4 col-sm-4">                        
                    	<div class="img_list"><a href="single_tour.html"><div class="ribbon top_rated"></div><img src="images/tour/tour_img6.jpg" alt="">
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    		<div class="tour_list_desc">
                    		<h3><strong>Versailles</strong> tour</h3>
                            <div class="ed_stardiv">
								<div class="star-rating"><span style="width:80%;"></span></div>
							</div>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
                            <ul class="add_info">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-time-outline"></i></span>
                                	<div class="tooltip-content"><h4>Schedule</h4>
                                    	<strong>Monday to Friday</strong> 09.00 AM - 5.30 PM<br>
                                        <strong>Saturday</strong> 09.00 AM - 5.30 PM<br>
                                        <strong>Sunday</strong> <span class="label label-danger">Closed</span>
                                </div>
                              </div>
                           </li>
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-location-outline"></i></span>
                                	<div class="tooltip-content"><h4>Address</h4>
                                    	Musee du Louvre, 75058 Paris - France<br>
                                </div>
                              </div>
                           </li> 
                              <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-volume-high"></i></span>
                                	<div class="tooltip-content"><h4>Languages</h4>
                                    	English - French - Chinese - Russian - Italian
                                </div>
                              </div>
                           </li>                                                         
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-android-train"></i></span>
                                	<div class="tooltip-content"><h4>Transport</h4>
                                    	<strong>Metro: </strong>Musee du Louvre station (line 1)<br>
                                        <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95<br>
                                </div>
                              </div>
                           </li>
                            </ul>
                            </div>
                    </div>
					<div class="col-lg-2 col-md-2 col-sm-2">
                    	<div class="price_list"><div><sup>$</sup>39*<span class="normal_price_list">$99</span><small>*Per person</small>
                        <p><a href="single_tour.html" class="btn_1">Details</a></p>
                        </div>
                       
                        </div>
                    </div>
                    </div>
				</div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn animated" data-wow-delay="0.1s">
                   <div class="row">
                	<div class="col-lg-4 col-md-4 col-sm-4">                        
                    	<div class="img_list"><a href="single_tour.html"><div class="ribbon popular"></div><img src="images/tour/tour_img7.jpg" alt="">
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    		<div class="tour_list_desc">
                    		<h3><strong>Arch Triomphe</strong> tour</h3>
                            <div class="ed_stardiv">
								<div class="star-rating"><span style="width:80%;"></span></div>
							</div>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
                            <ul class="add_info">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-time-outline"></i></span>
                                	<div class="tooltip-content"><h4>Schedule</h4>
                                    	<strong>Monday to Friday</strong> 09.00 AM - 5.30 PM<br>
                                        <strong>Saturday</strong> 09.00 AM - 5.30 PM<br>
                                        <strong>Sunday</strong> <span class="label label-danger">Closed</span>
                                </div>
                              </div>
                           </li>
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-location-outline"></i></span>
                                	<div class="tooltip-content"><h4>Address</h4>
                                    	Musee du Louvre, 75058 Paris - France<br>
                                </div>
                              </div>
                           </li> 
                              <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-volume-high"></i></span>
                                	<div class="tooltip-content"><h4>Languages</h4>
                                    	English - French - Chinese - Russian - Italian
                                </div>
                              </div>
                           </li>                                                         
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-android-train"></i></span>
                                	<div class="tooltip-content"><h4>Transport</h4>
                                    	<strong>Metro: </strong>Musee du Louvre station (line 1)<br>
                                        <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95<br>
                                </div>
                              </div>
                           </li>
                            </ul>
                            </div>
                    </div>
					<div class="col-lg-2 col-md-2 col-sm-2">
                    	<div class="price_list"><div><sup>$</sup>39*<span class="normal_price_list">$99</span><small>*Per person</small>
                        <p><a href="single_tour.html" class="btn_1">Details</a></p>
                        </div>
                       
                        </div>
                    </div>
                    </div>
				</div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn animated" data-wow-delay="0.1s">
                   <div class="row">
                	<div class="col-lg-4 col-md-4 col-sm-4">                        
                    	<div class="img_list"><a href="single_tour.html"><div class="ribbon top_rated"></div><img src="images/tour/tour_img8.jpg" alt="">
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    		<div class="tour_list_desc">
                    		<h3><strong>Pompidue</strong> tour</h3>
                            <div class="ed_stardiv">
								<div class="star-rating"><span style="width:80%;"></span></div>
							</div>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
                            <ul class="add_info">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-time-outline"></i></span>
                                	<div class="tooltip-content"><h4>Schedule</h4>
                                    	<strong>Monday to Friday</strong> 09.00 AM - 5.30 PM<br>
                                        <strong>Saturday</strong> 09.00 AM - 5.30 PM<br>
                                        <strong>Sunday</strong> <span class="label label-danger">Closed</span>
                                </div>
                              </div>
                           </li>
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-location-outline"></i></span>
                                	<div class="tooltip-content"><h4>Address</h4>
                                    	Musee du Louvre, 75058 Paris - France<br>
                                </div>
                              </div>
                           </li> 
                              <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-volume-high"></i></span>
                                	<div class="tooltip-content"><h4>Languages</h4>
                                    	English - French - Chinese - Russian - Italian
                                </div>
                              </div>
                           </li>                                                         
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-android-train"></i></span>
                                	<div class="tooltip-content"><h4>Transport</h4>
                                    	<strong>Metro: </strong>Musee du Louvre station (line 1)<br>
                                        <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95<br>
                                </div>
                              </div>
                           </li>
                            </ul>
                            </div>
                    </div>
					<div class="col-lg-2 col-md-2 col-sm-2">
                    	<div class="price_list"><div><sup>$</sup>79*<span class="normal_price_list">$99</span><small>*Per person</small>
                        <p><a href="single_tour.html" class="btn_1">Details</a></p>
                        </div>
                       
                        </div>
                    </div>
                    </div>
				</div><!--End strip -->

                <div class="strip_all_tour_list wow fadeIn animated" data-wow-delay="0.1s">
                   <div class="row">
                	<div class="col-lg-4 col-md-4 col-sm-4">                        
                    	<div class="img_list"><a href="single_tour.html"><div class="ribbon popular"></div><img src="images/tour/tour_img9.jpg" alt="">
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                    		<div class="tour_list_desc">
                    		<h3><strong>Tour Eiffel</strong> tour</h3>
                            <div class="ed_stardiv">
								<div class="star-rating"><span style="width:80%;"></span></div>
							</div>
                            <p>Lorem ipsum dolor sit amet, quem convenire interesset ut vix, ad dicat sanctus detracto vis. Eos modus dolorum ex, qui adipisci maiestatis inciderint no, eos in elit dicat.....</p>
                            <ul class="add_info">
                            <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-time-outline"></i></span>
                                	<div class="tooltip-content"><h4>Schedule</h4>
                                    	<strong>Monday to Friday</strong> 09.00 AM - 5.30 PM<br>
                                        <strong>Saturday</strong> 09.00 AM - 5.30 PM<br>
                                        <strong>Sunday</strong> <span class="label label-danger">Closed</span>
                                </div>
                              </div>
                           </li>
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-location-outline"></i></span>
                                	<div class="tooltip-content"><h4>Address</h4>
                                    	Musee du Louvre, 75058 Paris - France<br>
                                </div>
                              </div>
                           </li> 
                              <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-volume-high"></i></span>
                                	<div class="tooltip-content"><h4>Languages</h4>
                                    	English - French - Chinese - Russian - Italian
                                </div>
                              </div>
                           </li>                                                         
                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-android-train"></i></span>
                                	<div class="tooltip-content"><h4>Transport</h4>
                                    	<strong>Metro: </strong>Musee du Louvre station (line 1)<br>
                                        <strong>Bus:</strong> 21, 24, 27, 39, 48, 68, 69, 72, 81, 95<br>
                                </div>
                              </div>
                           </li>
                            </ul>
                            </div>
                    </div>
					<div class="col-lg-2 col-md-2 col-sm-2">
                    	<div class="price_list"><div><sup>$</sup>65*<span class="normal_price_list">$99</span><small>*Per person</small>
                        <p><a href="single_tour.html" class="btn_1">Details</a></p>
                        </div>
                       
                        </div>
                    </div>
                    </div>
				</div><!--End strip -->
                <div class="text-center">
                    <ul class="pagination">
                        <li><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div><!-- end pagination-->              
        </div><!-- End col lg-9 -->
    </div>
				</div>
				<!-- Container : ends -->
			</div>
			<!-- Package Content : ends -->
		</section>
		<!-- Package : ends -->
		<!-- Testimonial : starts -->
		<section id="testimonial" class="testimonial pad-top pad-bottom text-center white-bg">
			<!-- Container : starts -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="testimonial-title">
							<h2 class="light-black">Customer Reviews</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<!-- Text Block : starts -->
						<div class="text-block sync-single" data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "arrows": false, "dots": false, "asNavFor": ".sync-multi", "fade": false}'>
							<!-- Item01 -->
							<div class="item">
								<p class="dark-grey">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
									in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								</p>
							</div>
							<!-- Item02 -->
							<div class="item">
								<p class="dark-grey">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
									in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								</p>
							</div>
							<!-- Item03 -->
							<div class="item">
								<p class="dark-grey">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
									in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								</p>
							</div>
							<!-- Item04 -->
							<div class="item">
								<p class="dark-grey">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
									in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
								</p>
							</div>
						</div>
						<!-- Text Block : ends -->
						<!-- Image Block : starts -->
						<div class="image-block sync-multi" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows": false, "dots": true, "asNavFor": ".sync-single", "fade": false, "loop":false, "focusOnSelect": true, "centerMode": true, "centerPadding": 0}' data-mdnumber="1"
										data-smnumber="1" data-xsnumber="1">

							<!-- Item01 -->
							<div class="item text-center">
								<img src="images/testimonial/1.jpg" class="img-responsive" alt="testimonial-image" data-no-retina>
								<h5 class="light-black">Alexander John</h5>
								<p class="dark-grey">C.E.O, Port Quest</p>
							</div>
							<!-- Item02 -->
							<div class="item text-center">
								<img src="images/testimonial/2.jpg" class="img-responsive" alt="testimonial-image" data-no-retina>
								<h5 class="light-black">Natalia David</h5>
								<p class="dark-grey">Senior Manager, Milan Tools</p>
							</div>
							<!-- Item03 -->
							<div class="item text-center">
								<img src="images/testimonial/3.jpg" class="img-responsive" alt="testimonial-image" data-no-retina>
								<h5 class="light-black">Andrew Mark</h5>
								<p class="dark-grey">Managing Editor, Media Boom</p>
							</div>
							<!-- Item04 -->
							<div class="item text-center">
								<img src="images/testimonial/4.jpg" class="img-responsive" alt="testimonial-image" data-no-retina>
								<h5 class="light-black">Laura Patrik</h5>
								<p class="dark-grey">President/C.E.O, Digital Aster</p>
							</div>
						</div>
						<!-- Image Block : ends -->

					</div>
				</div>
			</div>
			<!-- Container : ends -->
		</section>
		<!-- Testimonial : ends -->
		<!-- Gallery : starts -->
		<section id="gallery" class="nav-highlight white-bg">
			<!-- Page Title : starts -->
			<div class="bg container-fluid pad-top-half pad-bottom-half light-white-bg parallax">
				<div class="page-title-container">
					<div class="row">
						<!-- Container : starts -->
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="page-title-icon">
										<span class="ion-ios-camera-outline white"></span>
									</div>
									<div class="page-title-wrap">
										<h2 class="page-title white">Gallery</h2>
										<p class="page-sub-title white">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Container : ends -->
					</div>
				</div>
			</div>
			<!-- Page Title : ends -->
			<!-- Gallery Container : starts -->
			<div class="portfolio-container">
				<!-- Gallery Navigation : starts -->
				<div class="portfolio-filter-nav text-center pad-top-half pad-bottom-half">
					<ul class="filter">
						<li><a href="#" class="filter active dark-gery" data-group="all">All</a></li>
						<li><a href="#" class="filter dark-grey" data-group="category-1">Sea</a></li>
						<li><a href="#" class="filter dark-grey" data-group="category-2">Holiday</a></li>
						<li><a href="#" class="filter dark-grey" data-group="category-3">Hotels</a></li>
						<li><a href="#" class="filter dark-grey" data-group="category-4">Cruises</a></li>
						<li><a href="#" class="filter dark-grey" data-group="category-5">PhotoGraphy</a></li>
					</ul>
				</div>
				<!-- Gallery Navigation : ends -->
				<!-- Gallery Grid : starts -->
				<div id="grid" class="grid shuffle gutter-grid text-center directional-hover wow-container" data-col-no="5" data-gutter="0px">
					<!-- Gallery Item-01 -->
					<div class="shuf-item sizer image-lightbox dh-container" data-groups='["all","category-3"]'>
						<a href="images/gallery/1.jpg" class="image-selector">
							<img src="images/gallery/1.jpg" class="img-responsive delayed-animation wow slideInUp" alt="portfolio_image" data-wow-offset="150" data-no-retina>
							<div class="dh-overlay">
								<div class="overlay-icon">
									<span class="white ion-image"></span>
								</div>
								<div class="overlay-text">
									<h4 class="white">Lorem ipsum dolor</h4>
									<p class="white">consectetur adipisicing elit </p>
								</div>
							</div>
						</a>
					</div>
					<!-- Gallery Item-02 -->
					<div class="shuf-item sizer image-lightbox dh-container" data-groups='["all","category-2","category-4"]'>
						<a href="images/gallery/2.jpg">
							<img src="images/gallery/2.jpg" class="img-responsive delayed-animation wow slideInUp" alt="portfolio_image" data-wow-offset="150" data-no-retina>
							<div class="dh-overlay">
								<div class="overlay-icon">
									<span class="white ion-image"></span>
								</div>
								<div class="overlay-text">
									<h4 class="white">Lorem ipsum dolor</h4>
									<p class="white">consectetur adipisicing elit </p>
								</div>
							</div>
						</a>
					</div>
					<!-- Gallery Item-03 -->
					<div class="shuf-item sizer image-lightbox dh-container" data-groups='["all","category-1,category-5"]'>
						<a href="images/gallery/3.jpg" class="image-selector">
							<img src="images/gallery/3.jpg" class="img-responsive delayed-animation wow slideInUp" alt="portfolio_image" data-wow-offset="150" data-no-retina>
							<div class="dh-overlay">
								<div class="overlay-icon">
									<span class="white ion-image"></span>
								</div>
								<div class="overlay-text">
									<h4 class="white">Lorem ipsum dolor</h4>
									<p class="white">consectetur adipisicing elit </p>
								</div>
							</div>
						</a>
					</div>
					<!-- Gallery Item-04 -->
					<div class="shuf-item sizer image-lightbox dh-container" data-groups='["all","category-3","category-2","category-1"]'>
						<a href="images/gallery/4.jpg" class="image-selector">
							<img src="images/gallery/4.jpg" class="img-responsive delayed-animation wow slideInUp" alt="portfolio_image" data-wow-offset="150" data-no-retina>
							<div class="dh-overlay">
								<div class="overlay-icon">
									<span class="white ion-images"></span>
								</div>
								<div class="overlay-text">
									<h4 class="white">Lorem ipsum dolor</h4>
									<p class="white">consectetur adipisicing elit </p>
								</div>
							</div>
						</a>
						<a href="images/gallery/2.jpg" class="image-selector hidden" data-no-retina></a>
						<a href="images/gallery/3.jpg" class="image-selector hidden" data-no-retina></a>
					</div>
					<!-- Gallery Item-05 -->
					<div class="shuf-item sizer image-lightbox dh-container" data-groups='["all","category-5"]'>
						<a href="images/gallery/5.jpg" class="image-selector">
							<img src="images/gallery/5.jpg" class="img-responsive delayed-animation wow slideInUp" alt="portfolio_image" data-wow-offset="150"  data-no-retina>
							<div class="dh-overlay">
								<div class="overlay-icon">
									<span class="white ion-image"></span>
								</div>
								<div class="overlay-text">
									<h4 class="white">Lorem ipsum dolor</h4>
									<p class="white">consectetur adipisicing elit </p>
								</div>
							</div>
						</a>
					</div>
					<!-- Gallery Item-06 -->
					<div class="shuf-item sizer image-lightbox dh-container" data-groups='["all","category-1","category-4"]'>
						<a href="images/gallery/6.jpg" class="image-selector">
							<img src="images/gallery/6.jpg" class="img-responsive delayed-animation wow slideInUp" alt="portfolio_image" data-wow-offset="150" data-no-retina>
							<div class="dh-overlay">
								<div class="overlay-icon">
									<span class="white ion-image"></span>
								</div>
								<div class="overlay-text">
									<h4 class="white">Lorem ipsum dolor</h4>
									<p class="white">consectetur adipisicing elit </p>
								</div>
							</div>
						</a>
					</div>
					<!-- Gallery Item-07 -->
					<div class="shuf-item sizer image-lightbox dh-container" data-groups='["all","category-3"]'>
						<a href="images/gallery/7.jpg" class="image-selector">
							<img src="images/gallery/7.jpg" class="img-responsive delayed-animation wow slideInUp" alt="portfolio_image" data-wow-offset="150" data-no-retina>
							<div class="dh-overlay">
								<div class="overlay-icon">
									<span class="white ion-images"></span>
								</div>
								<div class="overlay-text">
									<h4 class="white">Lorem ipsum dolor</h4>
									<p class="white">consectetur adipisicing elit </p>
								</div>
							</div>
						</a>
						<a href="images/gallery/8.jpg" class="image-selector hidden" data-no-retina></a>
						<a href="images/gallery/9.jpg" class="image-selector hidden" data-no-retina></a>
					</div>
					<!-- Portfolio Item-08-->
					<div class="shuf-item sizer image-lightbox dh-container" data-groups='["all","category-1,"category-4""]'>
						<a href="images/gallery/8.jpg" class="image-selector">
							<img src="images/gallery/8.jpg" class="img-responsive delayed-animation wow slideInUp" alt="portfolio_image" data-wow-offset="150" data-no-retina>
							<div class="dh-overlay">
								<div class="overlay-icon">
									<span class="white ion-image"></span>
								</div>
								<div class="overlay-text">
									<h4 class="white">Lorem ipsum dolor</h4>
									<p class="white">consectetur adipisicing elit </p>
								</div>
							</div>
						</a>
					</div>
					<!-- Gallery Item-09-->
					<div class="shuf-item sizer image-lightbox dh-container" data-groups='["all","category-5"]'>
						<a href="images/gallery/9.jpg" class="image-selector">
							<img src="images/gallery/9.jpg" class="img-responsive delayed-animation wow slideInUp" alt="portfolio_image" data-wow-offset="150" data-no-retina>
							<div class="dh-overlay">
								<div class="overlay-icon">
									<span class="white ion-image"></span>
								</div>
								<div class="overlay-text">
									<h4 class="white">Lorem ipsum dolor</h4>
									<p class="white">consectetur adipisicing elit </p>
								</div>
							</div>
						</a>
					</div>
					<!-- Gallery Item-10-->
					<div class="shuf-item sizer image-lightbox dh-container" data-groups='["all","category-1"]'>
						<a href="images/gallery/10.jpg">
							<img src="images/gallery/10.jpg" class="img-responsive delayed-animation wow slideInUp" alt="portfolio_image" data-wow-offset="150" data-no-retina>
							<div class="dh-overlay">
								<div class="overlay-icon">
									<span class="white ion-image"></span>
								</div>
								<div class="overlay-text">
									<h4 class="white">Lorem ipsum dolor</h4>
									<p class="white">consectetur adipisicing elit </p>
								</div>
							</div>
						</a>
					</div>
				</div>
				<!-- Gallery Grid : ends -->
			</div>
			<!-- Gallery Container : ends -->
		</section>
		<!-- Gallery : ends -->
		<!-- Counter BLock : starts -->
		<div class="counter-block pad-top pad-bottom light-black-bg">
			<!-- Container : starts -->
			<div class="container">
				<div class="row">
					<!-- Couner Item01 -->
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="counter-item item01 text-center">
							<span class="timer white" data-from="0" data-to="3820"></span>
							<p class="white">Top Destinations</p>
						</div>
					</div>
					<!-- Couner Item02 -->
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="counter-item item02 text-center">
							<span class="timer white" data-from="0" data-to="11504"></span>
							<p class="white">Popular Hotels</p>
						</div>
					</div>
					<!-- Couner Item03 -->
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="counter-item item03 text-center">
							<span class=" timer white" data-from="0" data-to="219"></span>
							<p class="white">Cruises</p>
						</div>
					</div>
					<!-- Couner Item04 -->
					<div class="col-md-3 col-sm-3 col-xs-3">
						<div class="counter-item item04 text-center">
							<span class="timer white" data-from="0" data-to="3417"></span>
							<p class="white">Images</p>
						</div>
					</div>
				</div>
			</div>
			<!-- Container : ends -->
		</div>
		<!-- Counter Block : ends -->
		<!-- Deals : starts -->
		<section id="deals" class="nav-highlight">
			<!-- Page Title : starts -->
			<div class="blog-content container-fluid pad-top-half pad-bottom-half light-white-bg parallax">
				<div class="page-title-container">
					<div class="row">
						<!-- Container : starts -->
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="page-title-icon">
										<span class="ion-ios-compose-outline white"></span>
									</div>
									<div class="page-title-wrap">
										<h2 class="page-title white">Hot Deals</h2>
										<p class="page-sub-title white">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Container : ends -->
					</div>
				</div>
			</div>
			<!-- Page Title : ends -->
			<!-- Deals Content : starts -->
			<div class="pad-top pad-bottom parallax light-grey-bg">
				<!-- Container : starts -->
				<div class="container">      
                <div class="main_title">
            <h2>Hot <span>Deals</span></h2>
            <p>Quisque at tortor a libero posuere laoreet vitae sed arcu. Curabitur consequat.</p>
        </div>              
					<div class="row">        
                            <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.1s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                        <img src="images/tour/tour_img1.jpg" class="img-responsive" alt="">
                        <div class="ribbon top_rated"></div>
                        <div class="short_info">
                            <span class="price"><sup>$</sup>39</span>
                        </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Arc Triomphe</strong> tour</h3>
                       <div class="ed_stardiv">
								<div class="star-rating"><span style="width:80%;"></span></div>
							</div><!-- end rating -->                                
                            <div class="clearfix visible-xs-block"></div>                   
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            
            <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.2s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                        <img src="images/tour/tour_img2.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon top_rated"></div>
                        <div class="short_info">
                            <span class="price"><sup>$</sup>45</span>
                        </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Notredame</strong> tour</h3>
                        <div class="ed_stardiv">
								<div class="star-rating"><span style="width:85%;"></span></div>
							</div><!-- end rating -->                     
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            
            <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.3s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                        <img src="images/tour/tour_img3.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon popular"></div>
                        <div class="badge_save">Save<strong>30%</strong></div>
                        <div class="short_info">
                            <span class="price"><sup>$</sup>48</span>
                        </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Versailles</strong> tour</h3>
                         <div class="ed_stardiv">
								<div class="star-rating"><span style="width:95%;"></span></div>
							</div><!-- end rating -->                       
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            
            <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.4s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                        <img src="images/tour/tour_img4.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon popular"></div>
                        <div class="badge_save">Save<strong>20%</strong></div>
                        <div class="short_info">
                            <span class="price"><sup>$</sup>36</span>
                        </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Pompidue</strong> tour</h3>
                        <div class="ed_stardiv">
								<div class="star-rating"><span style="width:80%;"></span></div>
							</div><!-- end rating -->                       
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            
            <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.5s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                        <img src="images/tour/tour_img5.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon popular"></div>
                        <div class="short_info">
                            <span class="price"><sup>$</sup>42</span>
                        </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Tour Eiffel</strong> tour</h3>
                        <div class="ed_stardiv">
								<div class="star-rating"><span style="width:90%;"></span></div>
							</div><!-- end rating -->                      
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->
            
            <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.6s">
                <div class="tour_container">
                    <div class="img_container">
                        <a href="single_tour.html">
                        <img src="images/tour/tour_img6.jpg" width="800" height="533" class="img-responsive" alt="">
                        <div class="ribbon top_rated"></div>
                        <div class="short_info">
                            <span class="price"><sup>$</sup>40</span>
                        </div>
                        </a>
                    </div>
                    <div class="tour_title">
                        <h3><strong>Pantheon</strong> tour</h3>
                        <div class="ed_stardiv">
								<div class="star-rating"><span style="width:87%;"></span></div>
							</div><!-- end rating -->                       
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->            
        </div>
				</div>
				<!-- Container : ends -->
			</div>
			<!-- deal Content : ends -->
		</section>
		<!-- Deals : ends -->
		<section id="blog" class="blog nav-highlight">
			<!-- Page Title : starts -->
			<div class="blog-content container-fluid pad-top-half pad-bottom-half light-white-bg">
				<div class="page-title-container">
					<div class="row">
						<!-- Container : starts -->
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="page-title-icon">
										<span class="ion-ios-compose-outline"></span>
									</div>
									<div class="page-title-wrap">
										<h2 class="page-title white">Blog</h2>
										<p class="page-sub-title white">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Container : ends -->
					</div>
				</div>
			</div>
			<!-- Page Title : ends -->
			<!-- Blog Content : starts -->
			<div class="pad-top pad-bottom parallax">
				<!-- Container : starts -->
				<div class="container latest_news">
					<div class="row">
						<div class="col-md-12">
							<!-- Blog Item01 -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="single_news_item">
									<div class="img_holder">
										<img src="images/blog/1.jpg" alt="images" class="img-responsive">
									</div> <!-- End .img_holder -->
									<div class="post">
										<h5>Condimentum oranre scelerisque magna</h5>
										<div class="post_history">
											<p class="flt_left">Posted <span>March 2016</span></p>
											<ul class="flt_right">
												<li><i class="ion-chatbox"></i> 1</li>
												<li><i class="ion-android-favorite-outline"></i> 3</li>
											</ul>
											<div class="clear_fix"></div>
										</div> <!-- End .post_history -->

										<p>There are many variations of passages available but the majority have  in the some form... </p>
										<a href="{{route('blog-post')}}" class="transition3s">Continue Reading</a>
									</div> <!-- End .post -->
								</div> <!-- End .single_news_item -->
							</div>
							<!-- Blog Item02 -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="single_news_item">
									<div class="img_holder">
										<img src="images/blog/2.jpg" alt="images" class="img-responsive">
									</div> <!-- End .img_holder -->
									<div class="post">
										<h5>Condimentum oranre scelerisque magna</h5>
										<div class="post_history">
											<p class="flt_left">Posted <span>March 2016</span></p>
											<ul class="flt_right">
												<li><i class="ion-chatbox"></i> 5</li>
												<li><i class="ion-android-favorite-outline"></i> 13</li>
											</ul>
											<div class="clear_fix"></div>
										</div> <!-- End .post_history -->

										<p>There are many variations of passages available but the majority have  in the some form... </p>
										<a href="blog-post.html" class="transition3s">Continue Reading</a>
									</div> <!-- End .post -->
								</div> <!-- End .single_news_item -->
							</div>

							<!-- Blog Item03 -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="single_news_item">
									<div class="img_holder">
										<img src="images/blog/3.jpg" alt="images" class="img-responsive">
									</div> <!-- End .img_holder -->
									<div class="post">
										<h5>Condimentum oranre scelerisque magna</h5>
										<div class="post_history">
											<p class="flt_left">Posted <span>March 2016</span></p>
											<ul class="flt_right">
												<li><i class="ion-chatbox"></i> 6</li>
												<li><i class="ion-android-favorite-outline"></i> 25</li>
											</ul>
											<div class="clear_fix"></div>
										</div> <!-- End .post_history -->

										<p>There are many variations of passages available but the majority have  in the some form... </p>
										<a href="blog-post.html" class="transition3s">Continue Reading</a>
									</div> <!-- End .post -->
								</div> <!-- End .single_news_item -->
							</div>

							<!-- Blog Item04 -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="single_news_item">
									<div class="img_holder">
										<img src="images/blog/4.jpg" alt="images" class="img-responsive">
									</div> <!-- End .img_holder -->
									<div class="post">
										<h5>Condimentum oranre scelerisque magna</h5>
										<div class="post_history">
											<p class="flt_left">Posted <span>March 2016</span></p>
											<ul class="flt_right">
												<li><i class="ion-chatbox"></i> 8</li>
												<li><i class="ion-android-favorite-outline"></i> 13</li>
											</ul>
											<div class="clear_fix"></div>
										</div> <!-- End .post_history -->

										<p>There are many variations of passages available but the majority have  in the some form... </p>
										<a href="blog-post.html" class="transition3s">Continue Reading</a>
									</div> <!-- End .post -->
								</div> <!-- End .single_news_item -->
							</div>

							<!-- Blog Item05 -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="single_news_item">
									<div class="img_holder">
										<img src="images/blog/5.jpg" alt="images" class="img-responsive">
									</div> <!-- End .img_holder -->
									<div class="post">
										<h5>Condimentum oranre scelerisque magna</h5>
										<div class="post_history">
											<p class="flt_left">Posted <span>March 2016</span></p>
											<ul class="flt_right">
												<li><i class="ion-chatbox"></i> 6</li>
												<li><i class="ion-android-favorite-outline"></i> 23</li>
											</ul>
											<div class="clear_fix"></div>
										</div> <!-- End .post_history -->

										<p>There are many variations of passages available but the majority have  in the some form... </p>
										<a href="blog-post.html" class="transition3s">Continue Reading</a>
									</div> <!-- End .post -->
								</div> <!-- End .single_news_item -->
							</div>

							<!-- Blog Item06 -->
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<div class="single_news_item">
									<div class="img_holder">
										<img src="images/blog/6.jpg" alt="images" class="img-responsive">
									</div> <!-- End .img_holder -->
									<div class="post">
										<h5>Condimentum oranre scelerisque magna</h5>
										<div class="post_history">
											<p class="flt_left">Posted <span>March 2016</span></p>
											<ul class="flt_right">
												<li><i class="ion-chatbox"></i> 10</li>
												<li><i class="ion-android-favorite-outline"></i> 23</li>
											</ul>
											<div class="clear_fix"></div>
										</div> <!-- End .post_history -->

										<p>There are many variations of passages available but the majority have  in the some form... </p>
										<a href="blog-post.html" class="transition3s">Continue Reading</a>
									</div> <!-- End .post -->
								</div> <!-- End .single_news_item -->
							</div>
						</div>
					</div>
				</div>
				<!-- Container : ends -->

			</div>
			<!-- Blog Content : ends -->

		</section>
		<!-- Contact : starts -->
		<section id="contact" class="contact nav-highlight">
			<!-- Page Title : starts -->
			<div class="bg container-fluid pad-top-half pad-bottom-half light-white-bg parallax">
				<div class="page-title-container">
					<div class="row">
						<!-- Container : starts -->
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="page-title-icon">
										<span class="ion-ios-paperplane-outline white"></span>
									</div>
									<div class="page-title-wrap">
										<h2 class="page-title white">Contact</h2>
										<p class="page-sub-title white">Lorem ipsum dolor sit amet, consectetur adipisicing</p>
									</div>
								</div>
							</div>
						</div>
						<!-- Container : ends -->
					</div>
				</div>
			</div>
			<!-- Page Title : ends -->
			<!-- Contact Content : starts -->
			<div class="contact-content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-7 col-xs-7 no-padding">
							<!-- Address Block -->
							<div id="address-block" class="address-block pad-top-half pad-bottom-half white-bg">
								<div class="address-section text-center">
									<div class="address">
										<h4 class="light-black">MyTrip Travel Agency</h4>
										<p class="light-black">XYZ Road,</p>
										<p class="light-black">ABC Stree, London</p>
										<p class="light-black"><a href="mailto:admin@yourdomain.com">Email: admin@yourdomain.com</a></p>
										<p class="light-black">Call Us: +12345 67890</p>
                                        <p class="light-black">For Booking: booking@yourdomain.com</p>
									</div>
								</div>
							</div>
							<!-- Map Block -->
							<div id="map-container" class="map-container light-grey-bg"></div>
						</div>
						<div class="col-md-6 col-sm-5 col-xs-5 no-padding">
							<!-- Contact Block : starts -->
							<div class="contact-block light-black-bg">
								<div class="vertical-align">
									<!-- Contact Form : starts -->
									<div class="contact-form text-left">
										<form id="contactform" name="myform" action="sendmail.php" enctype="multipart/form-data" method="post">
											<input class="white" type="text" id="name" placeholder="Name" name="name" data-placeholder="Name">
											<input class="white" type="text" id="email" placeholder="Email" name="email" data-placeholder="Email">											
											<textarea class="white" rows="4" id="message" name="message" placeholder="Message" data-placeholder="Message"></textarea>
											<div class="button-style-01-container add-min-top-half">
												<button type="submit" name="submit" id="submit" class="button-style-01 white-button light-black">Send Now</button>
											</div>
										</form>
									</div>
									<!-- Contact Form : ends -->
								</div>
							</div>
							<!-- Contact Block : ends -->
						</div>
					</div>
					<!-- Modal Section HTML Markup -->
					<button class="md-trigger launch_modal hidden-lg hidden-md hidden-sm hidden-xs" data-modal="modal-5">Launch modal</button>
					<div class="md-modal md-effect-5" id="modal-5">
						<div class="md-content">
							<h3>Thanks For Your Comment</h3>
							<div>
								<p class="align-center">Lorem ipsum dolor siter amet mundium corpes illon tolves lorem ipsum dolor. Quisque nec est id ante consectetur tristique. Suspendisse potenti.</p>
								<div class="clear add-top-small"></div>
								<button class="md-close btn">Close</button>
							</div>
						</div>
					</div>
					<div class="md-overlay"></div>
				</div>
			</div>
			<!-- Contact Content : ends -->
		</section>
		<!-- Contact : ends -->
		<!-- Footer : starts -->
		<div id="footer" class="footer container-fluid dark-grey-bg">
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
		</div>
		<!-- Footer : ends -->
	</section>
    <!-- Master Wrap : ends -->
    
  
    <!-- Google Map API -->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

      <script src="{{asset('js/template.js')}}"></script>
   
    
</body>
</html>
