<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<!-- Template for amclcanada.com/index.html by akr4m, Sat, 30 Mar 2019 14:22:09 GMT -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>BootStrap HTML5 CSS3 Theme</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{asset('images/icon/logo.png')}}">
    <link rel="stylesheet" href="{{asset('client/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/prettyPhoto.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/transitions.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/color.css')}}">
    <link rel="stylesheet" href="{{asset('client/css/responsive.css')}}">
    <script src="{{asset('client/js/snap.svg-min.js')}}"></script>
    <script src="{{asset('client/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
<body class="home">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
			Preloader Start
	*************************************-->
	<div class="preloader">
		<div id="status"></div>
		<div id="loading-center">
			<div id="loading-center-absolute">
				<div class="object" id="object_four"></div>
				<div class="object" id="object_three"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_one"></div>
			</div>
		</div>
	</div>
	<!--************************************
			Preloader END
	*************************************-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="wrapper">
		<!--************************************
				Header Start
		*************************************-->
			 @include('layout.includes.nav')
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Home Slider Start
		*************************************-->
		<div id="home-slider" class="home-slider tg-haslayout">
			<div class="item">
				<figure>
					<img src="images/home-slider/img-01.jpg" alt="image description">
				</figure>
				<div class="tg-banner-content">
					<div class="tg-border-bottomleft">
						<h1>Virtually <span>bUILD yOUR</span> HOUSE</h1>
					</div>
					<a class="tg-theme-btn" href="#">BUILD NOW</a>
				</div>
			</div>
			<div class="item">
				<figure>
					<img src="images/home-slider/img-02.jpg" alt="image description">
				</figure>
				<div class="tg-banner-content">
					<div class="tg-border-bottomleft">
						<h1>Virtually <span>bUILD yOUR</span> HOUSE</h1>
					</div>
					<a class="tg-theme-btn" href="#">BUILD NOW</a>
				</div>
			</div>
			<div class="item">
				<figure>
					<img src="images/home-slider/img-03.jpg" alt="image description">
				</figure>
				<div class="tg-banner-content">
					<div class="tg-border-bottomleft">
						<h1>Virtually <span>bUILD yOUR</span> HOUSE</h1>
					</div>
					<a class="tg-theme-btn" href="#">BUILD NOW</a>
				</div>
			</div>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="main" class="tg-haslayout">
			<!--************************************
					Services Start
			*************************************-->
			<section class="tg-main-section tg-haslayout bg-white">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="tg-theme-heading">
								<span>WE ARE EXPERT IN</span>
								<h2>SERVICES</h2>
							</div>
						</div>
						<div class="col-xs-12">
							<div class="col-md-4 col-sm-12 col-sm-offset-3 col-sm-12 col-md-offset-0 ">
								<div class="row">
									<div class="tg-service-img">
										<figure class="tg-img-border">
											<img src="images/portfolio/img-01.jpg" alt="image description">
										</figure>
									</div>
								</div>
							</div>
							<div class="col-md-8 col-sm-12 col-xs-12 zero-right-padding">
								<div class="tg-services row">
									<div class="tg-service services-content tg-haslayout">
										<figure class="tg-sercice-img">
											<img src="images/img-04.jpg" alt="image description">
										</figure>
										<div class="tg-border-topleft tg-haslayout">
											<div class="tg-displaytable">
												<div class="tg-displaytablecell">
													<span class="fa fa-cubes"></span>
													<h3>Building</h3>
													<div class="tg-description">
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tg-service tg-haslayout">
										<figure class="tg-sercice-img">
											<img src="images/img-04.jpg" alt="image description">
										</figure>
										<div class="tg-border-topleft tg-haslayout">
											<div class="tg-displaytable">
												<div class="tg-displaytablecell">
													<span class="fa fa-star"></span>
													<h3>Renovation</h3>
													<div class="tg-description">
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tg-service tg-haslayout">
										<figure class="tg-sercice-img">
											<img src="images/img-04.jpg" alt="image description">
										</figure>
										<div class="tg-border-topleft tg-haslayout">
											<div class="tg-displaytable">
												<div class="tg-displaytablecell">
													<span class="fa fa-legal"></span>
													<h3>Digging</h3>
													<div class="tg-description">
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="tg-service tg-haslayout">
										<figure class="tg-sercice-img">
											<img src="images/img-04.jpg" alt="image description">
										</figure>
										<div class="tg-border-topleft tg-haslayout">
											<div class="tg-displaytable">
												<div class="tg-displaytablecell">
													<span class="fa fa-bed"></span>
													<h3>Interior</h3>
													<div class="tg-description">
														<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Services End
			*************************************-->
			<!--************************************
					Virtually Build Start
			*************************************-->
			<section class="tg-main-section tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax-img/bg-parallax-01.jpg">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 tg-displayinlineblock">
							<div class="tg-virtual-img tg-haslayout">
								<figure>
									<img src="images/img-05.png" alt="image description">
								</figure>
							</div>
						</div>
						<div class="col-sm-5 tg-displayinlineblock">
							<div class="tg-virtuallybuild">
								<div class="tg-theme-heading">
									<h2>virtually build your house <span>in few steps</span></h2>
								</div>
								<div class="tg-description">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud.</p>
								</div>
								<div class="tg-btn-box">
									<a class="tg-theme-btn" href="#">build now</a>
									<a class="tg-theme-btn" href="#">Read more</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Virtually Build End
			*************************************-->
			<!--************************************
					Portfolio Start
			*************************************-->
			<section class="tg-main-section tg-haslayout bg-white">
				<div class="container">
					<div class="row">
						<div class="tg-portfolio">
							<div class="col-sm-4">
								<div class="tg-theme-heading">
									<span>Some of our</span>
									<h2>Portfolio</h2>
								</div>
								<div class="tg-service-img tg-haslayout">
									<div class="tab-content tg-img-border">
										<div role="tabpanel" class="tab-pane fade in active" id="portfolio-item-one">
											<figure><img src="images/portfolio/img-01.jpg" alt="image description"></figure>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="portfolio-item-two">
											<figure><img src="images/portfolio/img-02.jpg" alt="image description"></figure>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="portfolio-item-three">
											<figure><img src="images/portfolio/img-03.jpg" alt="image description"></figure>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="portfolio-item-four">
											<figure><img src="images/portfolio/img-04.jpg" alt="image description"></figure>
										</div>
										<div role="tabpanel" class="tab-pane fade in" id="portfolio-item-five">
											<figure><img src="images/portfolio/img-05.jpg" alt="image description"></figure>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="portfolio-item-six">
											<figure><img src="images/portfolio/img-06.jpg" alt="image description"></figure>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="portfolio-item-seven">
											<figure><img src="images/portfolio/img-07.jpg" alt="image description"></figure>
										</div>
										<div role="tabpanel" class="tab-pane fade" id="portfolio-item-eight">
											<figure><img src="images/portfolio/img-08.jpg" alt="image description"></figure>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-8">
								<div class="portfolio masnory tg-haslayout">
									<ul id="gallery-cats" class="gallery-cats option-set haslayout">
										<li class="select"><a href="#" data-filter="*">All</a></li>
										<li><a href="#" data-filter=".construction">Construction</a></li>
										<li><a href="#" data-filter=".digging">Digging</a></li>
										<li><a href="#" data-filter=".renovation">Renovation</a></li>
										<li><a href="#" data-filter=".interior">Interior</a></li>
									</ul>
									<div class="row">
									<div class="portfolio-content tg-haslayout portfolio-image grid" role="tablist">
											<div role="presentation" class="active portfolio-item grid-item construction">
												<div class="product-box">
													<a href="#portfolio-item-one" aria-controls="portfolio-item-one" role="tab" data-toggle="tab">
														<figure><img src="images/thumbnail/img-01.jpg" alt="image description"></figure>
														<div class="tg-img-hover">
															<div class="tg-displaytable">
																<div class="tg-displaytablecell">
																	<i class="fa fa-picture-o"></i>
																	<h4>Exterior Project</h4>
																</div>
															</div>
														</div>
													</a>
												</div>
											</div>
											<div role="presentation" class="portfolio-item grid-item digging">
												<div class="product-box">
													<a href="#portfolio-item-two" aria-controls="portfolio-item-two" role="tab" data-toggle="tab">
														<figure><img src="images/thumbnail/img-02.jpg" alt="image description"></figure>
														<div class="tg-img-hover">
															<div class="tg-displaytable">
																<div class="tg-displaytablecell">
																	<i class="fa fa-picture-o"></i>
																	<h4>Exterior Project</h4>
																</div>
															</div>
														</div>
													</a>
												</div>
											</div>
											<div role="presentation" class="portfolio-item grid-item renovation">
												<div class="product-box">
													<a href="#portfolio-item-three" aria-controls="portfolio-item-three" role="tab" data-toggle="tab">
														<figure><img src="images/thumbnail/img-03.jpg" alt="image description"></figure>
														<div class="tg-img-hover">
															<div class="tg-displaytable">
																<div class="tg-displaytablecell">
																	<i class="fa fa-picture-o"></i>
																	<h4>Exterior Project</h4>
																</div>
															</div>
														</div>
													</a>
												</div>
											</div>
											<div role="presentation" class="portfolio-item grid-item interior">
												<div class="product-box">
													<a href="#portfolio-item-four" aria-controls="portfolio-item-four" role="tab" data-toggle="tab">
														<figure><img src="images/thumbnail/img-04.jpg" alt="image description"></figure>
														<div class="tg-img-hover">
															<div class="tg-displaytable">
																<div class="tg-displaytablecell">
																	<i class="fa fa-picture-o"></i>
																	<h4>Exterior Project</h4>
																</div>
															</div>
														</div>
													</a>
												</div>
											</div>
											<div role="presentation" class="portfolio-item grid-item construction">
												<div class="product-box">
													<a href="#portfolio-item-five" aria-controls="portfolio-item-five" role="tab" data-toggle="tab">
														<figure><img src="images/thumbnail/img-05.jpg" alt="image description"></figure>
														<div class="tg-img-hover">
															<div class="tg-displaytable">
																<div class="tg-displaytablecell">
																	<i class="fa fa-picture-o"></i>
																	<h4>Exterior Project</h4>
																</div>
															</div>
														</div>
													</a>
												</div>
											</div>
											<div role="presentation"  class="portfolio-item grid-item digging">
												<div class="product-box">
													<a href="#portfolio-item-six" aria-controls="portfolio-item-six" role="tab" data-toggle="tab">
														<figure><img src="images/thumbnail/img-06.jpg" alt="image description"></figure>
														<div class="tg-img-hover">
															<div class="tg-displaytable">
																<div class="tg-displaytablecell">
																	<i class="fa fa-picture-o"></i>
																	<h4>Exterior Project</h4>
																</div>
															</div>
														</div>
													</a>
												</div>
											</div>
											<div role="presentation"  class="portfolio-item grid-item renovation">
												<div class="product-box">
													<a href="#portfolio-item-seven" aria-controls="portfolio-item-seven" role="tab" data-toggle="tab">
														<figure><img src="images/thumbnail/img-07.jpg" alt="image description"></figure>
														<div class="tg-img-hover">
															<div class="tg-displaytable">
																<div class="tg-displaytablecell">
																	<i class="fa fa-picture-o"></i>
																	<h4>Exterior Project</h4>
																</div>
															</div>
														</div>
													</a>
												</div>
											</div>
											<div role="presentation"  class="portfolio-item grid-item renovation">
												<div class="product-box">
													<a href="#portfolio-item-eight" aria-controls="portfolio-item-eight" role="tab" data-toggle="tab">
														<figure><img src="images/thumbnail/img-08.jpg" alt="image description"></figure>
														<div class="tg-img-hover">
															<div class="tg-displaytable">
																<div class="tg-displaytablecell">
																	<i class="fa fa-picture-o"></i>
																	<h4>Exterior Project</h4>
																</div>
															</div>
														</div>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Portfolio End
			*************************************-->
			<!--************************************
					Testimonials Start
			*************************************-->
			<section class="tg-main-section tg-haslayout testimonial-image">
				<div class="container">
					<div class="row">
						<div class="tg-testimonials tg-haslayout">
							<div class="col-sm-5">
								<div class="tg-testimonials-img">
									<figure><img src="images/img-02.png" alt="image description"></figure>
								</div>
							</div>
							<div class="col-lg-5 col-md-7 col-sm-7">
								<div id="tg-testi-slider" class="tg-testi-slider">
									<div class="item">
										<div class="tg-theme-heading">
											<span>our happy customers</span>
											<h2>Mr. David <span>&amp; Family</span></h2>
										</div>
										<div class="tg-description">
											<blockquote>
												<q>Sed ut perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudantium, totam.</q>
											</blockquote>
										</div>
									</div>
									<div class="item">
										<div class="tg-theme-heading">
											<span>our happy customers</span>
											<h2>Mr. David <span>&amp; Family</span></h2>
										</div>
										<div class="tg-description">
											<blockquote>
												<q>Sed ut perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudantium, totam.</q>
											</blockquote>
										</div>
									</div>
									<div class="item">
										<div class="tg-theme-heading">
											<span>our happy customers</span>
											<h2>Mr. David <span>&amp; Family</span></h2>
										</div>
										<div class="tg-description">
											<blockquote>
												<q>Sed ut perspiciatis unde omnis iste natus error sit tatem accusantium doloremque laudantium, totam.</q>
											</blockquote>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Testimonials End
			*************************************-->
			<!--************************************
					Latest Blog Start
			*************************************-->
			<section class="tg-main-section tg-haslayout bg-white">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="tg-theme-heading">
								<span>from our</span>
								<h2>latest blog</h2>
							</div>
						</div>
						<div id="tg-posts-slider" class="tg-posts">
							<div class="item">
								<div class="tg-post">
									<div class="tg-post-img">
										<figure>
											<a href="#">
												<img src="images/blog/img-01.jpg" alt="image description">
											</a>
										</figure>
										<div class="tg-post-hover">
											<ul class="tg-post-hover-icons">
												<li><a href="#"><i class="fa fa-eye"></i></a></li>
												<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="tg-post-content tg-border-topleft">
										<h3><a href="#">blog title here</a></h3>
										<div class="tg-post-meta">
											<span><a href="#">By Admin / </a></span>
											<span><a href="#">In Map</a></span>
										</div>
										<div class="tg-description">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="tg-post">
									<div class="tg-post-img">
										<figure>
											<a href="#">
												<img src="images/blog/img-02.jpg" alt="image description">
											</a>
										</figure>
										<div class="tg-post-hover">
											<ul class="tg-post-hover-icons">
												<li><a href="#"><i class="fa fa-eye"></i></a></li>
												<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="tg-post-content tg-border-topleft">
										<h3><a href="#">blog title here</a></h3>
										<div class="tg-post-meta">
											<span><a href="#">By Admin / </a></span>
											<span><a href="#">In Map</a></span>
										</div>
										<div class="tg-description">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="tg-post">
									<div class="tg-post-img">
										<figure>
											<a href="#">
												<img src="images/blog/img-01.jpg" alt="image description">
											</a>
										</figure>
										<div class="tg-post-hover">
											<ul class="tg-post-hover-icons">
												<li><a href="#"><i class="fa fa-eye"></i></a></li>
												<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="tg-post-content tg-border-topleft">
										<h3><a href="#">blog title here</a></h3>
										<div class="tg-post-meta">
											<span><a href="#">By Admin / </a></span>
											<span><a href="#">In Map</a></span>
										</div>
										<div class="tg-description">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="tg-post">
									<div class="tg-post-img">
										<figure>
											<a href="#">
												<img src="images/blog/img-02.jpg" alt="image description">
											</a>
										</figure>
										<div class="tg-post-hover">
											<ul class="tg-post-hover-icons">
												<li><a href="#"><i class="fa fa-eye"></i></a></li>
												<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="tg-post-content tg-border-topleft">
										<h3><a href="#">blog title here</a></h3>
										<div class="tg-post-meta">
											<span><a href="#">By Admin / </a></span>
											<span><a href="#">In Map</a></span>
										</div>
										<div class="tg-description">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="tg-post">
									<div class="tg-post-img">
										<figure>
											<a href="#">
												<img src="images/blog/img-01.jpg" alt="image description">
											</a>
										</figure>
										<div class="tg-post-hover">
											<ul class="tg-post-hover-icons">
												<li><a href="#"><i class="fa fa-eye"></i></a></li>
												<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="tg-post-content tg-border-topleft">
										<h3><a href="#">blog title here</a></h3>
										<div class="tg-post-meta">
											<span><a href="#">By Admin / </a></span>
											<span><a href="#">In Map</a></span>
										</div>
										<div class="tg-description">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="tg-post">
									<div class="tg-post-img">
										<figure>
											<a href="#">
												<img src="images/blog/img-02.jpg" alt="image description">
											</a>
										</figure>
										<div class="tg-post-hover">
											<ul class="tg-post-hover-icons">
												<li><a href="#"><i class="fa fa-eye"></i></a></li>
												<li><a href="#"><i class="fa fa-share-alt"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="tg-post-content tg-border-topleft">
										<h3><a href="#">blog title here</a></h3>
										<div class="tg-post-meta">
											<span><a href="#">By Admin / </a></span>
											<span><a href="#">In Map</a></span>
										</div>
										<div class="tg-description">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Latest Blog End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		@include('layout.includes.footer')
		<!--************************************
				Wrapper End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<!--************************************
			Popup Start
	*************************************-->
	@include('layout.includes.footer-lower')
	<!--************************************
			Popup End
	*************************************-->
	<script src="{{asset('client/js/vendor/jquery.min.js')}}"></script>
	<script src="{{asset('client/js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('client/js/jquery.bxslider.js')}}"></script>
	<script src="{{asset('client/js/jquery.flexslider.js')}}"></script>
	<script src="{{asset('client/js/jquery.prettyPhoto.js')}}"></script>
	<script src="{{asset('client/js/jquery.appear.js')}}"></script>
	<script src="{{asset('client/js/parallax.js')}}"></script>
	<script src="{{asset('client/js/isotope.pkgd.js')}}"></script>
	<script src="{{asset('client/js/owl.carousel.js')}}"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyDlh_AGFXk44DuUVd6BDFas5XgqevprVms&amp;language=en"></script>
	<script src="{{asset('client/js/gmap3.js')}}"></script>
	<script src="{{asset('client/js/classie.js')}}"></script>
	<script src="{{asset('client/js/gnmenu.js')}}"></script>
	<script src="{{asset('client/js/classie.js')}}"></script>
	<script src="{{asset('client/js/main.js')}}"></script>
</body>

<!-- Template for amclcanada.com/index.html by akr4m, Sat, 30 Mar 2019 14:24:23 GMT -->
</html>