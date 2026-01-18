@extends('layouts.app')
@section('content')	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/7.jpg)">
    	<div class="auto-container">
			<h2>Tours Detail</h2>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>Tours Detail</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Sidebar Page Container -->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
				
				<!--Sidebar Side-->
                <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                	<aside class="sidebar">
						
						<!-- Sidebar Widget -->
						<div class="sidebar-widget search-tour-widget">
							<div class="widget-content">
								
								<!-- Tour Search Tabs-->
								<div class="tour-search-tabs">
									<!-- Tours Tabs -->
									<div class="tour-tabs tabs-box">
									
										<!--Tab Btns-->
										<ul class="tab-btns tab-buttons clearfix">
											<li data-tab="#prod-details" class="tab-btn active-btn">Search Tours</li>
											<li data-tab="#prod-info" class="tab-btn">Hotel Card available</li>
										</ul>
										
										<!--Tabs Container-->
										<div class="tabs-content">
											
											<!--Tab / Active Tab-->
											<div class="tab active-tab" id="prod-details">
												<div class="content">
													
													<!-- Default Form -->
													<div class="default-form">
														<form method="post" action="contact.html">
															
															<!-- Form Group -->
															<div class="form-group">
																<label>Destination</label>
																<input type="text" name="text" placeholder="Type your destination" required>
															</div>
															
															<!-- Form Group -->
															<div class="form-group">
																<label>Starts</label>
																<input type="text" name="text" placeholder="30 January, 2020" required>
															</div>
															
															<!-- Form Group -->
															<div class="form-group">
																<label>2 guests</label>
																<select class="custom-select-box">
																	<option>Guests</option>
																	<option>01 Guests</option>
																	<option>02 Guests</option>
																	<option>03 Guests</option>
																	<option>04 Guests</option>
																</select>
															</div>
															
															<!-- Form Group -->
															<div class="form-group">
																<label>Travel type</label>
																<select class="custom-select-box">
																	<option>Trakking</option>
																	<option>01 Trakking</option>
																	<option>02 Trakking</option>
																	<option>03 Trakking</option>
																	<option>04 Trakking</option>
																</select>
															</div>
															
															<!-- Form Group -->
															<div class="form-group">
																<div class="range-slider-one clearfix">
																	<label>Price Range</label>
																	<div class="area-range-slider"></div>
																	<div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
																	<div class="title clearfix">
																		Min <span>Max</span>
																	</div>
																</div>
																<div class="separet margin-top"></div>
															</div>
															
															<div class="form-group">
																<label>&nbsp;</label>
																<button type="submit" class="theme-btn btn-style-one"><i class="map flaticon-maps-and-flags"></i><span class="txt">Search Now</span></button>
															</div>
															
														</div>
													</form>
													
												</div>
											</div>
											
											<!-- Tab -->
											<div class="tab" id="prod-info">
												<div class="content">
													
													<!-- Default Form -->
													<div class="default-form">
														<form method="post" action="contact.html">
															
															<!-- Form Group -->
															<div class="form-group">
																<label>Destination</label>
																<input type="text" name="text" placeholder="Type your destination" required>
															</div>
															
															<!-- Form Group -->
															<div class="form-group">
																<label>Starts</label>
																<input type="text" name="text" placeholder="30 January, 2020" required>
															</div>
															
															<!-- Form Group -->
															<div class="form-group">
																<label>2 guests</label>
																<select class="custom-select-box">
																	<option>Guests</option>
																	<option>01 Guests</option>
																	<option>02 Guests</option>
																	<option>03 Guests</option>
																	<option>04 Guests</option>
																</select>
															</div>
															
															<!-- Form Group -->
															<div class="form-group">
																<label>Travel type</label>
																<select class="custom-select-box">
																	<option>Trakking</option>
																	<option>01 Trakking</option>
																	<option>02 Trakking</option>
																	<option>03 Trakking</option>
																	<option>04 Trakking</option>
																</select>
															</div>
															
															<!-- Form Group -->
															<div class="form-group">
																<div class="range-slider-one clearfix">
																	<label>Price Range</label>
																	<div class="area-range-slider"></div>
																	<div class="input"><input type="text" class="property-amount" name="field-name" readonly></div>
																	<div class="title clearfix">
																		Min <span>Max</span>
																	</div>
																</div>
																<div class="separet margin-top"></div>
															</div>
															
															<div class="form-group">
																<label>&nbsp;</label>
																<button type="submit" class="theme-btn btn-style-one"><i class="map flaticon-maps-and-flags"></i><span class="txt">Search Now</span></button>
															</div>
															
														</div>
													</form>
													
												</div>
											</div>
											
										</div>
									
									</div>
								</div>			
			
							</div>
						</div>
						
						<!-- Sidebar Widget -->
						<div class="sidebar-widget search-tour-widget">
							<div class="widget-content">
								
								<!-- Tour Search Tabs-->
								<div class="tour-search-tabs">
									<!-- Tours Tabs -->
									<div class="tour-tabs tabs-box">
									
										<!--Tab Btns-->
										<ul class="tab-btns tab-buttons clearfix">
											<li data-tab="#prod-filter" class="tab-btn active-btn">Search Tours</li>
											<li data-tab="#prod-card" class="tab-btn">Hotel Card available</li>
										</ul>
										
										<!--Tabs Container-->
										<div class="tabs-content">
											
											<!--Tab / Active Tab-->
											<div class="tab active-tab" id="prod-filter">
												<div class="content">
													
													<!-- Tours Selection Form -->
													<div class="tours-selection-form">
														<form method="post" action="index.html">
															<h5>Categories </h5>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-1"> 
																	<label for="service-1">Adventure</label>
																</div>
															</div>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-2"> 
																	<label for="service-2">Traking</label>
																</div>
															</div>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-3"> 
																	<label for="service-3">Historical</label>
																</div>
															</div>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-4"> 
																	<label for="service-4">Japan</label>
																</div>
															</div>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-5"> 
																	<label for="service-5">Indonesia</label>
																</div>
															</div>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-6"> 
																	<label for="service-6">Bangladesh</label>
																</div>
															</div>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-7"> 
																	<label for="service-7">Thailand</label>
																</div>
															</div>
															
															<h5>Duration</h5>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-8"> 
																	<label for="service-8">1 days</label>
																</div>
															</div>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-9"> 
																	<label for="service-9">1-3 days</label>
																</div>
															</div>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-10"> 
																	<label for="service-10">5 days</label>
																</div>
															</div>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-11"> 
																	<label for="service-11">7+ Days Tour</label>
																</div>
															</div>
															
															<h5>Places</h5>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-12"> 
																	<label for="service-12">Avsallar</label>
																</div>
															</div>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-13"> 
																	<label for="service-13">India</label>
																</div>
															</div>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-14"> 
																	<label for="service-14">Nepal</label>
																</div>
															</div>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-14"> 
																	<label for="service-14">Bangladesh</label>
																</div>
															</div>
															
														</form>
													</div>
													
												</div>
											</div>
											
											<!-- Tab -->
											<div class="tab" id="prod-card">
												<div class="content">
													
													<!-- Tours Selection Form -->
													<div class="tours-selection-form">
														<form method="post" action="index.html">
															<h5>Categories </h5>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-15"> 
																	<label for="service-15">Adventure</label>
																</div>
															</div>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-16"> 
																	<label for="service-16">Traking</label>
																</div>
															</div>
															
															<div class="form-group">
																<div class="check-box">
																	<input type="checkbox" name="shipping-option" id="service-17"> 
																	<label for="service-17">Historical</label>
																</div>
															</div>
															
														</form>
													</div>														
													
												</div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>
						
					</aside>
				</div>
				
				<!--Content Side-->
                <div class="content-side col-lg-8 col-md-12 col-sm-12">
					<div class="tours-detail">
						<div class="inner-box">
							<!-- Upper Box -->
							<div class="upper-box">
								<div class="row clearfix">
									
									<div class="col-lg-7 col-md-12 col-sm-12">
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star-o"></span>
											15+ Review
										</div>
										<h3>The World Famous Seashell House ~ Casa Caracol</h3>
										<div class="hotel-info">Bali, Indonesia <span>5 Days / 6 Nights &ensp; Minimum 6 people</span></div>
									</div>
									
									<div class="col-lg-5 col-md-12 col-sm-12">
										<div class="clearfix">
											<div class="price">$150 <br> Night</div>
											<a href="tour-detail.html" class="theme-btn btn-style-one"><span class="txt">Book Now</span></a>
										</div>
										<div class="good">Very Good</div>
									</div>
									
								</div>
								
								<ul class="food-list">
									<li><span class="icon flaticon-plane-1"></span>Airpot</li>
									<li><span class="icon flaticon-food"></span>Foods</li>
									<li><span class="icon flaticon-air-conditioner"></span>Ac</li>
									<li><span class="icon flaticon-step"></span>Adventure Tour</li>
									<li><span class="icon flaticon-extensible-markup-language"></span>English, Japanese</li>
								</ul>
								
							</div>
							
							<!-- Listing Page -->
							<div class="listing-page">
								
								<div class="image-column">
									<div class="carousel-outer">
				
										<ul class="image-carousel owl-carousel owl-theme">
											<li><a href="images/resource/tour-17.jpg" class="lightbox-image" data-fancybox="images" data-caption="" title="Image Caption Here"><img src="images/resource/tour-17.jpg" alt=""></a></li>
											<li><a href="images/resource/tour-17.jpg" class="lightbox-image" data-fancybox="images" data-caption="" title="Image Caption Here"><img src="images/resource/tour-17.jpg" alt=""></a></li>
											<li><a href="images/resource/tour-17.jpg" class="lightbox-image" data-fancybox="images" data-caption="" title="Image Caption Here"><img src="images/resource/tour-17.jpg" alt=""></a></li>
											<li><a href="images/resource/tour-17.jpg" class="lightbox-image" data-fancybox="images" data-caption="" title="Image Caption Here"><img src="images/resource/tour-17.jpg" alt=""></a></li>
											<li><a href="images/resource/tour-17.jpg" class="lightbox-image" data-fancybox="images" data-caption="" title="Image Caption Here"><img src="images/resource/tour-17.jpg" alt=""></a></li>
											<li><a href="images/resource/tour-17.jpg" class="lightbox-image" data-fancybox="images" data-caption="" title="Image Caption Here"><img src="images/resource/tour-17.jpg" alt=""></a></li>
											<li><a href="images/resource/tour-17.jpg" class="lightbox-image" data-fancybox="images" data-caption="" title="Image Caption Here"><img src="images/resource/tour-17.jpg" alt=""></a></li>
											<li><a href="images/resource/tour-17.jpg" class="lightbox-image" data-fancybox="images" data-caption="" title="Image Caption Here"><img src="images/resource/tour-17.jpg" alt=""></a></li>
										</ul>
										
										<ul class="thumbs-carousel owl-carousel owl-theme">
											<li><img src="images/resource/tour-18.jpg" alt=""></li>
											<li><img src="images/resource/tour-19.jpg" alt=""></li>
											<li><img src="images/resource/tour-20.jpg" alt=""></li>
											<li><img src="images/resource/tour-21.jpg" alt=""></li>
											<li><img src="images/resource/tour-18.jpg" alt=""></li>
											<li><img src="images/resource/tour-19.jpg" alt=""></li>
											<li><img src="images/resource/tour-20.jpg" alt=""></li>
											<li><img src="images/resource/tour-21.jpg" alt=""></li>
										</ul>
										
									</div>
								</div>
								
							</div>
							
							<h3>Overview</h3>
							<h4>About the Package:</h4>
							<p>The colorful flamingos welcome you as soon as you enter the grounds of the Honolulu Zoo. Nearby, over 160 other species of tropical birds also show off their bright plumage. Continue on for close encounters with impressive giant reptiles such as Komodo dragons, crocodiles and iguanas, before visiting the giraffes, meerkats, cheetahs and aardvarks</p>
							<p>The 42-acre (16-hectare) grounds of the Honolulu Zoo are divided into three main areas: the Tropical Forests, the Pacific Islands and the African Savannah. Within these areas you will see over 250 different mammal, reptile and bird species in areas designed to closely replicate their natural habitats. </p>
							<h4>Package Include:</h4>
							<p>The colorful flamingos welcome you as soon as you enter the grounds of the Honolulu Zoo. Nearby, over 160 other species of tropical birds also show off their bright plumage. Continue on for close encounters with impressive giant reptiles such as Komodo dragons, crocodiles and iguanas, before visiting the giraffes, meerkats, cheetahs and aardvarks</p>
							<ul class="list-style-two">
								<li>The colorful flamingos welcome you as soon as you enter the grounds of the Honolulu Zoo. Nearby, over 160 other species of tropical birds also show off their bright plumage. </li>
								<li>The colorful flamingos welcome you as soon as you enter the grounds of the Honolulu </li>
								<li>The colorful flamingos welcome you as soon as you enter the grounds of the Honolulu </li>
							</ul>
							<h4>Additional info:</h4>
							<p>The colorful flamingos welcome you as soon as you enter the grounds of the Honolulu Zoo. Nearby, over 160 other species of tropical birds also show off their bright plumage.</p>
							<div class="row clearfix">
								<div class="column col-lg-4 col-md-4 col-sm-12">
									<h5>Departure</h5>
									<p>Bangladesh International Airport</p>
								</div>
								<div class="column col-lg-4 col-md-4 col-sm-12">
									<h5>Departure Time</h5>
									<p>5.00AM</p>
								</div>
								<div class="column col-lg-4 col-md-4 col-sm-12">
									<h5>Return Time</h5>
									<p>Approximately 7.30PM</p>
								</div>
								<div class="column col-lg-4 col-md-4 col-sm-12">
									<h5>Entire home</h5>
									<p>You’ll have the house to yourself.</p>
								</div>
								<div class="column col-lg-4 col-md-4 col-sm-12">
									<h5>Internet</h5>
									<p>Wireless internet on site.</p>
								</div>
								<div class="column col-lg-4 col-md-4 col-sm-12">
									<h5>Return Time</h5>
									<p>Approximately 7.30PM</p>
								</div>
							</div>
							<h4>Other Includes</h4>
							<ul class="list-style-two">
								<li>Free parking on premises</li>
								<li>9 recent guests said this place was sparkling clean.</li>
								<li>90% of recent guests gave the check-in process a 5-star rating.</li>
							</ul>
							<h4>Accessibility</h4>
							<ul class="list-style-two">
								<li>Well-lit path to entrance</li>
								<li>Step-free path to entrance</li>
								<li>You’ll have the house to yourself.</li>
							</ul>
							
							<div class="two-columns">
								<div class="row clearfix">
								
									<div class="column col-lg-6 col-md-6 col-sm-12">
										<h4>Location:</h4>
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
										
										<div class="map-canvas"
											data-zoom="12"
											data-lat="-37.817085"
											data-lng="144.955631"
											data-type="roadmap"
											data-hue="#ffc400"
											data-title="Envato"
											data-icon-path="images/icons/map-marker.png"
											data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
										</div>
										
									</div>
									<div class="column col-lg-6 col-md-6 col-sm-12">
										<h4>Gallery</h4>
										<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla </p>
										<div class="image">
											<img src="images/resource/tour-22.jpg" alt="" />
										</div>
									</div>
									
								</div>
							</div>
							<h4>Ratings & Reviews :</h4>
							<!-- Skill Outer -->
							<div class="skills-outer">
								<div class="skills-inner">
									<div class="left-content">
										<div class="rating">
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star"></span>
											<span class="fa fa-star-o"></span>
										</div>
										<div class="rating-review">4.75 <br> 263 reviews</div>
										<div class="excellent">Excellent</div>
									</div>
									<div class="skill-content">
										
										<!--Skills-->
										<div class="skills">
										
											<!--Skill Item-->
											<div class="skill-item">
												<div class="skill-header clearfix">
													<div class="skill-title">Excellent</div>
													<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="100">0</span>%</div></div>
												</div>
												<div class="skill-bar">
													<div class="bar-inner"><div class="bar progress-line" data-width="100"></div></div>
												</div>
											</div>
											
											<!--Skill Item-->
											<div class="skill-item">
												<div class="skill-header clearfix">
													<div class="skill-title">Very Good</div>
													<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="55">0</span>%</div></div>
												</div>
												<div class="skill-bar">
													<div class="bar-inner"><div class="bar progress-line" data-width="55"></div></div>
												</div>
											</div>
											
											<!--Skill Item-->
											<div class="skill-item">
												<div class="skill-header clearfix">
													<div class="skill-title">Average</div>
													<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="65">0</span>%</div></div>
												</div>
												<div class="skill-bar">
													<div class="bar-inner"><div class="bar progress-line" data-width="65"></div></div>
												</div>
											</div>
											
											<!--Skill Item-->
											<div class="skill-item">
												<div class="skill-header clearfix">
													<div class="skill-title">Poor</div>
													<div class="skill-percentage"><div class="count-box"><span class="count-text" data-speed="2000" data-stop="85">0</span>%</div></div>
												</div>
												<div class="skill-bar">
													<div class="bar-inner"><div class="bar progress-line" data-width="85"></div></div>
												</div>
											</div>
											
										</div>
										
									</div>
								</div>
							</div>
						
							<!-- Comments Area -->
							<div class="comments-area">
								<div class="group-title">
									<h5>3 Comments</h5>
								</div>
								
								<div class="comment-box">
									<div class="comment">
										<div class="author-thumb"><img src="images/resource/author-3.jpg" alt=""></div>
										<div class="comment-info clearfix"><strong>Erika</strong><div class="comment-time">5 February 2020 </div></div>
										<div class="text">The shell house was amazing very artsy! They put effort in every little detail of the entire house we absolutely love it </div>
										<a class="theme-btn reply-btn" href="tour-detail.html#">Reply</a>
									</div>
								</div>
								
								<div class="comment-box">
									<div class="comment">
										<div class="author-thumb"><img src="images/resource/author-4.jpg" alt=""></div>
										<div class="comment-info clearfix"><strong>Tamim anj</strong><div class="comment-time">5 February 2020</div></div>
										<div class="text">The shell house was amazing very artsy! They put effort in every little detail of the entire house we absolutely love it </div>
										<a class="theme-btn reply-btn" href="tour-detail.html#">Reply</a>
									</div>
								</div>
								
								<div class="comment-box">
									<div class="comment">
										<div class="author-thumb"><img src="images/resource/author-5.jpg" alt=""></div>
										<div class="comment-info clearfix"><strong>Tamim anj</strong><div class="comment-time">5 February 2020 </div></div>
										<div class="text">The shell house was amazing very artsy! They put effort in every little detail of the entire house we absolutely love it </div>
										<a class="theme-btn reply-btn" href="tour-detail.html#">Reply</a>
									</div>
								</div>
								
							</div>
							
							
							<!-- Comment Form -->
							<div class="comment-form">
									
								<div class="group-title">
									<h5>Leave A Reply</h5>
									<div class="form-text">Your email address will not be published. Required fields are marked *</div>
								</div>
								
								<!--Comment Form-->
								<form method="post" action="blog.html">
									<div class="row clearfix">
										
										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="text" name="username" placeholder="Name" required>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12 form-group">
											<input type="email" name="email" placeholder="Email" required>
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<textarea class="darma" name="message" placeholder="Type your comment"></textarea>
										</div>
										
										<div class="col-lg-12 col-md-12 col-sm-12 form-group">
											<button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="txt">Submit Comment</span></button>
										</div>
										
									</div>
								</form>
									
							</div>
							<!--End Comment Form -->
							
						
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	
	@endsection