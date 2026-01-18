@extends('layouts.app')
@section('content')	
	<!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/6.jpg)">
    	<div class="auto-container">
			<h2>Destination Detail</h2>
			<ul class="page-breadcrumb">
				<li><a href="index.html">home</a></li>
				<li>Destination Detail</li>
			</ul>
        </div>
    </section>
    <!--End Page Title-->
	
	<!-- Destination Detail Section -->
	<section class="destinations-detail-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title">
				<h2>Indonesia</h2>
				<div class="text">Lorem ipsum dolor sit amet, conseetuer adipiscing elit. Aenan comdo igula eget. Aenean massa cum sociis Theme natoque</div>
			</div>
			<!-- Big Image -->
			<div class="big-image">
				<img src="images/resource/destination-29.jpg" alt="" />
				<div class="overlay-heading">
					<h1>Indonesia</h1>
				</div>
			</div>
			
			<!-- Sidebar Page Container -->
			<div class="sidebar-page-container style-two">
				
				<div class="row clearfix">
					
					<!--Content Side-->
					<div class="content-side col-lg-9 col-md-12 col-sm-12">
						<div class="destination-detail">
							<div class="inner-box">
								<h3>Amazing Spectacle</h3>
								<p>Dramatic sights are the norm. There’s the sublime: an orang-utan lounging in a tree. The artful: a Balinese dancer executing precise moves that would make a robot seem ungainly. The idyllic: a deserted stretch of blinding white sand on Sumbawa. The astonishing: crowds in a glitzy Jakarta mall. The intriguing: tales of the beautiful Banda Islands' twisted history.</p>
								<div class="two-column">
									<div class="row clearfix">
										
										<!-- Image Column -->
										<div class="image-column col-lg-8 col-md-12 col-sm-12">
											<div class="image">
												<img src="images/resource/destination-30.jpg" alt="" />
											</div>
										</div>
										
										<!-- Content Column -->
										<div class="content-column col-lg-4 col-md-12 col-sm-12">
											<div class="inner-column">
												<h4>Komodo National Park</h4>
												<div class="bold-text">This intoxicating land offers some of the last great adventures on earth. Sitting in the open door of a train whizzing across Java, you’re sure no one has seen before.</div>
												<p> the Komodo dragon. That’s the big draw here, and it’s easy to spot them, but there’s also big nature beneath the water's surface where polychromatic bait draw big pelagics such as sharks and manta rays in great numbers. </p>
											</div>
										</div>
										
									</div>
								</div>
								<p>Dramatic sights are the norm. There’s the sublime: an orang-utan lounging in a tree. The artful: a Balinese dancer executing precise moves that would make a robot seem ungainly. The idyllic: a deserted stretch of blinding white sand on Sumbawa. The astonishing: crowds in a glitzy Jakarta mall. The intriguing: tales of the beautiful Banda Islands' twisted history.</p>
								<h4>When is the best time to visit Indonesia?</h4>
								<p>With temperatures hovering around 28 degrees Celsius, Indonesia is a year-round destination. The best time to visit Indonesia ultimately depends on what you want from your trip. If trekking is high on the agenda, then you’d want to avoid the wettest months – typically January and February</p>
								<div class="row clearfix">
									<!-- Column -->
									<div class="column col-lg-6 col-md-12 col-sm-12">
										<ul class="list-style-three">
											<li>When is the best time to visit Indonesia?</li>
											<li>Best month to visit Indonesia</li>
											<li>Climate in Indonesia</li>
											<li>Best time to visit Bali</li>
											<li>Best time to visit Lombok and Gili Islands</li>
										</ul>
									</div>
									<!-- Column -->
									<div class="column col-lg-6 col-md-12 col-sm-12">
										<ul class="list-style-three">
											<li>When is the best time to visit Indonesia?</li>
											<li>Best month to visit Indonesia</li>
											<li>Climate in Indonesia</li>
											<li>Best time to visit Bali</li>
											<li>Best time to visit Lombok and Gili Islands</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!--Sidebar Side-->
					<div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
						<aside class="sidebar style-two">
							
							<!-- Search Widget -->
							<div class="sidebar-widget search-widget">
								<div class="sidebar-title">
									<h5>Search</h5>
								</div>
								<!-- Search -->
								<div class="sidebar-widget search-box">
									<form method="post" action="contact.html">
										<div class="form-group">
											<input type="search" name="search-field" value="" placeholder="Search" required>
											<button type="submit"><span class="icon fa fa-search"></span></button>
										</div>
									</form>
								</div>
							</div>
							
							<!--Blog Category Widget-->
							<div class="sidebar-widget sidebar-blog-category">
								<div class="sidebar-title">
									<h5>Categories</h5>
								</div>
								<ul class="cat-list">
									<li><a href="destination-detail.html#">Things to do <span>(05)</span></a></li>
									<li><a href="destination-detail.html#">Local Guides <span>(13)</span></a></li>
									<li><a href="destination-detail.html#">Culture <span>(05)</span></a></li>
									<li><a href="destination-detail.html#">Outdoor <span>(19)</span></a></li>
									<li><a href="destination-detail.html#">Food & drink <span>(12)</span></a></li>
									<li><a href="destination-detail.html#">Traditional <span>(06)</span></a></li>
									<li><a href="destination-detail.html#">City life <span>(06)</span></a></li>
									<li><a href="destination-detail.html#">Adventure <span>(06)</span></a></li>
									<li><a href="destination-detail.html#">Consumer <span>(06)</span></a></li>
								</ul>
							</div>
							
							<!-- Instagram Newsletter -->
							<div class="sidebar-widget instagram-widget">
								<div class="sidebar-title">
									<h5>Instragram:</h5>
								</div>
								
								<div class="images-outer clearfix">
									<!--Image Box-->
									<figure class="image-box"><a href="images/background/1.jpg" class="lightbox-image" data-fancybox="instagram-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/resource/instagram-1.jpg" alt=""></a></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="images/background/2.jpg" class="lightbox-image" data-fancybox="instagram-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/resource/instagram-2.jpg" alt=""></a></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="images/background/4.jpg" class="lightbox-image" data-fancybox="instagram-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/resource/instagram-3.jpg" alt=""></a></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="images/background/6.jpg" class="lightbox-image" data-fancybox="instagram-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/resource/instagram-4.jpg" alt=""></a></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="images/background/7.jpg" class="lightbox-image" data-fancybox="instagram-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/resource/instagram-5.jpg" alt=""></a></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="images/background/1.jpg" class="lightbox-image" data-fancybox="instagram-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/resource/instagram-6.jpg" alt=""></a></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="images/background/2.jpg" class="lightbox-image" data-fancybox="instagram-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/resource/instagram-7.jpg" alt=""></a></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="images/background/4.jpg" class="lightbox-image" data-fancybox="instagram-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/resource/instagram-8.jpg" alt=""></a></figure>
									<!--Image Box-->
									<figure class="image-box"><a href="images/background/6.jpg" class="lightbox-image" data-fancybox="instagram-gallery" title="Image Title Here" data-fancybox-group="footer-gallery"><img src="images/resource/instagram-9.jpg" alt=""></a></figure>
								</div>
									
							</div>
							
							<!-- Tags Widget -->
							<div class="sidebar-widget popular-tags">
								<div class="sidebar-title">
									<h5>Tags</h5>
								</div>
								<div class="widget-content">
									<a href="destination-detail.html#">Things</a>
									<a href="destination-detail.html#">Culture</a>
									<a href="destination-detail.html#">Tradition</a>
									<a href="destination-detail.html#">Things</a>
									<a href="destination-detail.html#">Travel ca</a>
									<a href="destination-detail.html#">Destination</a>
									<a href="destination-detail.html#">Tour</a>
									<a href="destination-detail.html#">Explore tour</a>
								</div>
							</div>
							
						</aside>
					</div>
					
				</div>
				
			</div>
			
		</div>
	</section>
	<!-- End Destination Detail Section -->
	
	@endsection