@include('includes.header')

    <!-- Master Wrap : starts -->
    <section id="master-wrap" class="master-wrap">
		<!-- Home : starts -->
		<section id="home" class="text-effect-block full-height">
			<!-- Animate Carousel : starts -->
			<div class="animate-carousel text-effect-content-carousel-2 black-dots bg-image-carousel mouse-controls-fade" data-dots="true" data-nav="true" data-autoplay="true" data-autoplay-speed="4000" data-anim-out="" data-anim-in="" data-items="1" data-xsnumber="1" data-smnumber="1" data-mdnumber="1">
				<!-- Item01 -->
				<div class="item full-height">
					<!-- Background Image Source -->
					<img src="images/slide4.jpg" class="hidden bg-image" alt="hidden_img" data-no-retina>
					<!-- Animate Content Block : starts -->
					<div class="cd-intro full-height">
						<div class="mask cd-intro-content vertical-align text-center">
							<h2 class="white"><span>Atraktivne lokacije</span></h2>
							<div class="action-wrapper">
								<div class="action-block">
									<p class="white">
										sa širokom mrežom naših partnera
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
					<img src="images/slide1.jpg" class="hidden bg-image" alt="hidden_img" data-no-retina>
					<!-- Animate Content Block : starts -->
					<div class="cd-intro full-height">
						<div class="cd-intro-content mask vertical-align text-center">
							<h2 class="white"><span>Najpovoljnije avio karte</span></h2>
							<div class="action-wrapper">
								<div class="action-block">
									<p class="white">
										u najkraćem roku Vam nalazimo najpovoljniju kartu za željenu destinaciju
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
					<img src="{{asset('images/slide3.jpg')}}" class="hidden bg-image" alt="hidden_img" data-no-retina>
					<!-- Animate Content Block : starts -->
					<div class="cd-intro full-height">
						<div class="cd-intro-content mask vertical-align text-center">
							<h2 class="white"><span>Rent a car</span></h2>
							<div class="action-wrapper">
								<div class="action-block">
									<p class="white">
										vozila različitih klasa, da odgovore na Vaše zahtjeve 
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

                    @foreach($data['ekskluzivno'] as $post)

                    	
	                        <div class="col-md-4 col-sm-4 wow slideInLeft">
	                            <div class="item tours">	
								   <img src="{{$post->photo->file}}" alt="Tour Image">
								   <div class="tour-detail">
	                               <div class="tour-title">								
									    <h4>{{$post->title}}</h4>
									</div>
									<div class="row">								
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<div class="ed_stardiv">
												<div class="star-rating"><span style="width:80%;"></span></div>
											</div>
										</div>
										<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
											<span class="price">${{$post->price}}</span>
										</div>
										</div>	


									<p>
									{{$post->short_desc}}
									</p>
									</div>								
							    </div>
	                        </div>
                        

                        @endforeach

                        
						<div class="col-md-4 col-sm-4 wow fadeIn">
                            <div class="item tours">	
							   <img src="{{asset('images/post1.jpg')}}" alt="Tour Image">
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
										<h2 class="page-title light-white">o nama</h2>
										<p class="page-sub-title light-white"></p>
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
								<h2>Sa vama već deset godina</h2>
								<p>Agencija Luna travel je osnovana   u Baru. U okviru ove agencije, od prošle godine posluje in luna interanitional, koja se nalazi u Podgorici. Od početka našeg poslovanja, prepoznati smo kao ozbiljan i odgovoran tim, spreman da u svakom trenutku odgovori na zahtjeve klijenata kvalitetnom i najpovoljnijom ponudom. Kroz godine uspješnog poslovanja, stvarajući mrežu partnera sa najprestinžnijih svjetskih destinacija, postajemo jedna od vodećih turističkih agencija u Crnoj Gori i regionu.</p>
                                <p>Na samom početku poslovanja našu ponudu sastojala se od aranžmana za ____________________            . Uspješnim poslovanjem i velikim brojem zadovoljnih klijenata, našu ponudu smo obogatili aranžmanima za _____________. Veliki broj zadovoljnih klijenata nas je ustanovio kao brand nespornog ugleda i profesionalizma. Njihov broj je u stalnom porastu, dajući nam motiv i obavezu da nastavimo rad sa istim entuzijazmom i posvećenošću.</p>
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
						    <h4>Misija</h4>
							    <p>
									Posjeta najprestižnijih turističkih destinacija postaje ostvariva za veliki broj ljudi. Putovanja i uspomene koje nose, predstavljaju neprocjenjivo bogatstvo koje ne blijedi. Povoljnom i raznovrsnom ponudom nastojimo da Vas obogatimo uspomenama na živopisne predjele egzotičnih lokacija.
								    </p>
								</div>
                        </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item element-content wow fadeIn">									
						    <h4>Mogućnosti</h4>
							    <p>
									Raznovrsan asortiman turističkih usluga koji čine:<br>
									<i class="fa fa-circle-thin" aria-hidden="true"></i> Rezervacije najpovoljnijih avio karata za sve svjetske destinacije<br>
									<i class="fa fa-circle-thin" aria-hidden="true"></i> Rezervacije smještaja u svim svjetskim hotelima
									<br>
									<i class="fa fa-circle-thin" aria-hidden="true"></i> Rent-a-car usluge
									<br>
									<i class="fa fa-circle-thin" aria-hidden="true"></i> Poslovna putovanja <br>

								    </p>
								</div>
                        </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="item element-content wow slideInRight">									
						    <h4>Vrijednosti</h4>
							    <p>
									Članica smo udruženja avio prevoznika - IATA, što nam omogućuje pristup najsavremenijem sistemu prodaje avio karata najvećeg broja svjetskih avio kompanija. Osposobljen kadar za rad na sistemu će u najkraćem roku pronaći najjeftinije avio karte po upitu koji odgovara Vašem zahtjevu.
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
										<h2 class="page-title light-white">usluge</h2>
										<p class="page-sub-title light-white"></p>
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
								<h5 class="services-content-head white">rent a car</h5>
								<p class="services-content-text white">
									Iznajmite automobil u nasoj agenciji. Na raspolaganju imate Renault Clio automatic, Renault Megane manual, Renault Fluence automatic, Mercedes S class long.
								</p>
							</a>

							<!-- Services Item02 -->
							<a href="#" class="services-content-block dark-color white light-black-bg">
								<i class="services-content-icon ion-android-restaurant white"></i>
								<h5 class="services-content-head white">Hotel Booking</h5>
								<p class="services-content-text white">
									Ukoliko imate potrebu za rezervacijom hotelskih soba bilo gdje u svijetu, naša agencija je pravi izbor. U najkraćem roku i pouzdano, dobijate potvrdu o rezervaciji.
								</p>
							</a>

							<!-- Services Item03 -->
							<a href="#" class="services-content-block dark-color white light-black-bg">
								<i class="services-content-icon ion-android-plane white"></i>
								<h5 class="services-content-head white">Avio karte</h5>
								<p class="services-content-text white">
									Turistička agencija Luna international d.o.o. je od 2008. godine punopravni član međunarodnog udruženja avio prevoznika IATA-e. U najkraćem roku možete kupiti avion karte po najpovoljnim cijenama.
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
										<h2 class="page-title white">aranzmani</h2>
										<p class="page-sub-title white"></p>
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

            @foreach($data['ture'] as $post)  

            

    			<div class="strip_all_tour_list wow fadeIn animated" data-wow-delay="0.1s">
                   <div class="row">
                	<div class="col-lg-4 col-md-4 col-sm-4">                        
                    	<div class="img_list"><a href="single-tour/{{$post->id}}"><div class="ribbon popular"></div><img src="{{$post->photo->file}}" alt="">
                        </a>
                        </div>
                    </div>
                     <div class="clearfix visible-xs-block"></div>
                    <div class="col-lg-6 col-md-6 col-sm-6">


                    	
	                       <div class="tour_list_desc" style="position: relative;">
                    		<h3><strong>{{$post->title}}</strong></h3>
                            <div class="ed_stardiv">
								<div class="star-rating"><span style="width:80%;"></span></div>
							</div>
                            <p>{{$post->short_desc}}</p>
                            <ul class="add_info" id="bar"> 
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

                           @if($post->address != NULL)

                           <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-location-outline"></i></span>
                                	<div class="tooltip-content"><h4>Address</h4>
                                    	{{$post->address}}
                                </div>
                              </div>
                           </li> 

                           @endif
                              <!-- <li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-ios-volume-high"></i></span>
                                	<div class="tooltip-content"><h4>Languages</h4>
                                    	English - French - Chinese - Russian - Italian
                                </div>
                              </div>
                           </li>  -->                                                        
                         
							
							@if($post->transport != NULL)

							<li>
                            <div class="tooltip_styled tooltip-effect-4">
                            	<span class="tooltip-item"><i class="ion-android-train"></i></span>
                                	<div class="tooltip-content"><h4>Transport</h4>
                                    	<strong>Metro: </strong>Musee du Louvre station (line 1)<br>
                                        <strong>Bus:</strong> {{$post->transport}}<br>
                                </div>
                            </div>
                            </li>

                            @endif

                           
                            </ul>
                            </div>
                        

                        


                    </div>
					<div class="col-lg-2 col-md-2 col-sm-2">

					@if($post->price != NULL && $post->decreased_price !=NULL)

					<div class="price_list"> <div> @if($post->decreased_price != NULL) <sup>$</sup>{{$post->

			decreased_price}} @endif <span class="normal_price_list">${{$post->price}}</span><small>Per person</small>

                        <p><a href="single-tour/{{$post->id}}" class="btn_1" >Details</a></p>

                        					</div>
                       
                    </div>

                    @elseif($post->price != NULL && $post->decreased_price == NULL)

                    	<div class="price_list"> <div><sup>$</sup>{{$post->price}} 

                        <p><a href="single-tour/{{$post->id}}" class="btn_1" >Details</a></p>

                        					</div>
                       
                    </div>

					@else

					<div class="price_list"> 

                        <p><a href="single-tour/{{$post->id}}" class="btn_1" style="margin: 60% 20% 0%;">Details</a></p>

                        					</div>


					@endif
                    	
                    </div>
                    </div>
				</div><!--End strip -->

				
				@endforeach

                

               

               

              
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
                    <!--<ul class="pagination">
                        <li><a href="#">Prev</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>-->

                    {{$data['ture']->render()}} 
                </div> <!-- end pagination-->       


        </div><!-- End col lg-9 -->
    </div>
				</div>
				<!-- Container : ends -->
			</div>
			<!-- Package Content : ends -->
		</section>
		<!-- Package : ends -->
		
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
										<h2 class="page-title white">Galerija</h2>
										<p class="page-sub-title white"></p>
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

				
				@foreach($photos as $photo)
					<!-- Gallery Item-01 -->
					<div class="shuf-item sizer image-lightbox dh-container" data-groups='["all","category-3"]'>
						<a href="{{$photo->file}}" class="image-selector">
							<img src="{{$photo->file}}" class="img-responsive delayed-animation wow slideInUp" alt="portfolio_image" data-wow-offset="150" data-no-retina>
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
				@endforeach


				
					
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
										<h2 class="page-title white">rent a car</h2>
										<p class="page-sub-title white"></p>
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
            <h2>rent a <span>car</span></h2>
            <p>Odaberite vozilo u skladu sa Vašim potrebama.</p>
        </div>              
					<div class="row">     

			@foreach($data['rent a car'] as $post)

				

                <div class="col-md-4 col-sm-6 wow zoomIn animated" data-wow-delay="0.1s">

	                <div class="tour_container">
		                    <div class="img_container">
		                        <a href="javascript:void(0);">
		                        <img src="{{$post->photo->file}}" class="img-responsive" alt="">
		                        <div class="ribbon {{$post->status}}"></div>
		                        
		                        @if($post->save)
		                        <div class="badge_save">Save<strong>{{$post->saving}}</strong></div>
		                        @endif

		                        <div class="short_info">
		                            <span class="price"><sup>$</sup>{{$post->price}}</span>
		                        </div>
		                        </a>
		                    </div>
                    <div class="tour_title">
                        <h3><strong>{{$post->title}}</strong></h3>
                       <div class="ed_stardiv">
								<div class="star-rating"><span style="width:80%;"></span></div>
							</div><!-- end rating -->                                
                            <div class="clearfix visible-xs-block"></div>                   
                    </div>
                </div><!-- End box tour -->
            </div><!-- End col-md-4 -->

           

            @endforeach
            
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
										<h2 class="page-title white">kontakt</h2>
										<p class="page-sub-title white"></p>
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
							
									<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d309.4789595409738!2d19.26133780366728!3d42.44312962659832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x134deb490a96345d%3A0x69a69a13363bd6b!2zSGVyY2Vnb3ZhxI1rYSwgUG9kZ29yaWNhLCDQptGA0L3QsCDQk9C-0YDQsA!5e0!3m2!1ssr!2s!4v1502697860003"  width="100%" height="334px" frameborder="0" style="border:0" allowfullscreen ></iframe> -->
								
								<div id="map-container" class="map-container light-grey-bg"></div>


							
						</div>
						<div class="col-md-6 col-sm-5 col-xs-5 no-padding">
							<!-- Contact Block : starts -->
							<div class="contact-block light-black-bg">
								<div class="vertical-align">
									<!-- Contact Form : starts -->
									<div class="contact-form text-left">
										
								{!! Form::open(['method'=>'POST','action' => 'HomeController@sendEmail','id'=>'contactform','files'=>true]) !!}

											<input class="white" type="text" id="name" placeholder="Name" name="name" data-placeholder="Name">
											<input class="white" type="text" id="email" placeholder="Email" name="email" data-placeholder="Email">											
											<textarea class="white" rows="4" id="message" name="body" placeholder="Message" data-placeholder="Message"></textarea>
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
		<!-- Testimonial : starts -->
		<section id="testimonial" class="testimonial pad-top pad-bottom text-center" style="background-color: #E9E9EB;">

			<div class="row">
					<div class="col-md-12">
						<div class="testimonial-title">
							<h2 class="light-black">naši partneri</h2>
						</div>
					</div>
				</div>

			<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:980px;height:100px;overflow:hidden;visibility:hidden;">
        <!-- Loading Screen -->
        <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
            <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
        </div>
        <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:100px;overflow:hidden;">
            <div>
                <img data-u="image" src="img/001.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/002.jpg" />
            </div>
            <div>
                <a href="" class=""><img data-u="image" src="img/003.jpg" /></a>
            </div>
            <div>
                <img data-u="image" src="img/004.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/009.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/010.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/019.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/020.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/021.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/022.jpg" />
            </div>
            <div>
                <img data-u="image" src="img/024.jpg" />
            </div>
            <a data-u="any" href="https://www.jssor.com" style="display:none">image gallery</a>
        </div>
    </div>
    <!-- #endregion Jssor Slider End -->
		</section>
		<!-- Testimonial : ends -->
		
		@include('includes/footer')