<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang=""> <!--<![endif]-->

<!-- Template for amclcanada.com/index2.html by akr4m, Sat, 30 Mar 2019 14:25:03 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>BootStrap HTML5 CSS3 Theme</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="{{asset('client/apple-touch-icon.png')}}">
	<link rel="stylesheet" href="{{asset('client/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/prettyPhoto.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/owl.theme.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/transitions.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/googlenexusmenu.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('client/css/googlenesusdemo.css')}}" />
	<link rel="stylesheet" href="{{asset('client/css/main.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/color.css')}}">
	<link rel="stylesheet" href="{{asset('client/css/responsive.css')}}">
	<script src="{{asset('client/js/snap.svg-min.js')}}"></script>
	<script src="{{asset('client/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js')}}"></script>
</head>
<body class="home version-two">
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
		<header id="header" class="tg-haslayout">
			<div class="container">
				<div class="logo-banner pull-left">
					<strong class="logo">
						<a href="/">
							<img src="images/logo3.png" alt="Constructioner">
						</a>
					</strong>
					<div class="tg-banner-content">
						<div class="tg-border-bottomleft">
							<h1>Virtually <span>bUILD yOUR</span> HOUSE</h1>
						</div>
						<div class="tg-description">
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium  mque laudantium, totam rem omnis iste.</p>
						</div>
						<a href="#" class="tg-theme-btn">BUILD NOW</a>
					</div>
				</div>
			</div>
			<div class="navigation-area">
				<ul class="add-nav">
				@if (Route::has('login'))
                @auth
					<li><a href="{{ url('/home') }}">Dashboard</a></li>
				@else
	        		<li><a data-toggle="modal" data-target=".login-modalbox" href="#">Login</a></li>
					<li><a data-toggle="modal" data-target=".signup-modalbox" href="#">Register</a></li>
				@endauth
				@endif
				</ul>
				<ul id="gn-menu" class="gn-menu-main">
					<li class="gn-trigger">
						<a class="gn-icon-menu"><i class="flaticon-square234"></i></a>
						<nav class="gn-menu-wrapper">
							<div class="gn-scroller">
								<ul class="gn-menu">
									<li class="current-menu-item">
										<a href="index2.html"><i class="flaticon-house158"></i><span>HOME</span></a>
									</li>
									<li>
										<a href="aboutus.html"><i class="flaticon-group12"></i><span>ABOUT</span></a>
									</li>
									<li>
										<a href="services.html"><i class="flaticon-wrench103"></i><span>SERVICES</span></a>
									</li>
									<li>
										<a href="virtual-construct.html"><i class="flaticon-shovel23"></i><span>BUILD</span></a>
									</li>
									<li>
										<a href="portfolio-grid.html"><i class="flaticon-star178"></i><span>PORTFOLIO</span></a>
									</li>
									<li>
										<a href="blog-grid.html"><i class="flaticon-comments16"></i><span>BLOG</span></a>
									</li>
								</ul>
								<div class="form-area">
									<div class="tg-border-bottomleft">
										<h2>contact us</h2>
									</div>
									<form class="form-contact">
										<fieldset>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="name">
											</div>
											<div class="form-group">
												<input type="email" class="form-control" placeholder="email">
											</div>
											<div class="form-group">
												<textarea placeholder="message"></textarea>
											</div>
											<button class="tg-theme-btn tg-theme-btn-lg" type="submit">SEND NOW</button>
										</fieldset>
									</form>
								</div>
							</div>
						</nav>
					</li>
				</ul>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Home Slider Start
		*************************************-->
		<ul id="bx-home-slider" class="home slider">
			<li class="swiper-slide">
				<figure><img src="images/home-slider2/img-01.jpg" alt="image description"></figure>
			</li>
			<li class="swiper-slide">
				<figure><img src="images/home-slider2/img-02.jpg" alt="image description"></figure>
			</li>
			<li class="swiper-slide">
				<figure><img src="images/home-slider2/img-03.jpg" alt="image description"></figure>
			</li>
		</ul>
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
						<div class="tg-services">
							<div class="col-sm-4 col-xs-6">
								<div class="tg-service tg-haslayout">
									<figure class="tg-sercice-img">
										<img src="images/img-04.jpg" alt="image description">
									</figure>
									<div class="tg-border-topleft tg-haslayout">
										<div class="tg-displaytable">
											<div class="tg-displaytablecell">
												<span class="flaticon-shovel23"></span>
												<h3>Building</h3>
												<div class="tg-description">
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-xs-6">
								<div class="tg-service tg-haslayout">
									<figure class="tg-sercice-img">
										<img src="images/img-04.jpg" alt="image description">
									</figure>
									<div class="tg-border-topleft tg-haslayout">
										<div class="tg-displaytable">
											<div class="tg-displaytablecell">
												<span class="flaticon-star182"></span>
												<h3>Unique design</h3>
												<div class="tg-description">
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-xs-6">
								<div class="tg-service tg-haslayout">
									<figure class="tg-sercice-img">
										<img src="images/img-04.jpg" alt="image description">
									</figure>
									<div class="tg-border-topleft tg-haslayout">
										<div class="tg-displaytable">
											<div class="tg-displaytablecell">
												<span class="flaticon-interiordesign"></span>
												<h3>Interior</h3>
												<div class="tg-description">
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-xs-6">
								<div class="tg-service tg-haslayout">
									<figure class="tg-sercice-img">
										<img src="images/img-04.jpg" alt="image description">
									</figure>
									<div class="tg-border-topleft tg-haslayout">
										<div class="tg-displaytable">
											<div class="tg-displaytablecell">
												<span class="flaticon-worker5"></span>
												<h3>designing</h3>
												<div class="tg-description">
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-xs-6">
								<div class="tg-service tg-haslayout">
									<figure class="tg-sercice-img">
										<img src="images/img-04.jpg" alt="image description">
									</figure>
									<div class="tg-border-topleft tg-haslayout">
										<div class="tg-displaytable">
											<div class="tg-displaytablecell">
												<span class="flaticon-star178"></span>
												<h3>trending</h3>
												<div class="tg-description">
													<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-4 col-xs-6">
								<div class="tg-service tg-haslayout">
									<figure class="tg-sercice-img">
										<img src="images/img-04.jpg" alt="image description">
									</figure>
									<div class="tg-border-topleft tg-haslayout">
										<div class="tg-displaytable">
											<div class="tg-displaytablecell">
												<span class="flaticon-comments16"></span>
												<h3>much more</h3>
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
							<div class="tg-portfolio-head tg-haslayout">
								<div class="col-sm-4">
									<div class="tg-theme-heading">
										<span>Some of our</span>
										<h2>Portfolio</h2>
									</div>
								</div>
								<div class="col-sm-8">
									<ul id="gallery-cats" class="gallery-cats option-set haslayout">
										<li class="select"><a href="#" data-filter="*">All</a></li>
										<li><a href="#" data-filter=".construction">Construction</a></li>
										<li><a href="#" data-filter=".digging">Digging</a></li>
										<li><a href="#" data-filter=".Renovation">Renovation</a></li>
										<li><a href="#" data-filter=".Interior">Interior</a></li>
									</ul>
								</div>
							</div>
							<div class="portfolio masnory portfolio-home-img tg-haslayout">
								<div class="portfolio-content tg-haslayout grid" role="tablist">
									<div role="presentation" class="active portfolio-item grid-item construction">
										<div class="product-box">
											<a data-rel="prettyPhoto[gallery2]" href="images/portfolio/img-22.jpg">
												<figure>
													<img src="images/thumbnail/img-31.jpg" alt="image description">
												</figure>
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
									<div role="presentation" class="active portfolio-item grid-item construction">
										<div class="product-box">
											<a data-rel="prettyPhoto[gallery2]" href="images/portfolio/img-23.jpg">
												<figure><img src="images/thumbnail/img-32.jpg" alt="image description"></figure>
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
									<div role="presentation" class="active portfolio-item grid-item construction">
										<div class="product-box">
											<a data-rel="prettyPhoto[gallery2]" href="images/portfolio/img-14.jpg">
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
											<a data-rel="prettyPhoto[gallery2]" href="images/portfolio/img-15.jpg">
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
									<div role="presentation" class="portfolio-item grid-item Renovation">
										<div class="product-box">
											<a data-rel="prettyPhoto[gallery2]" href="images/portfolio/img-16.jpg">
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
									<div role="presentation" class="portfolio-item grid-item digging">
										<div class="product-box">
											<a data-rel="prettyPhoto[gallery2]" href="images/portfolio/img-17.jpg">
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
											<a data-rel="prettyPhoto[gallery2]" href="images/portfolio/img-18.jpg">
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
									<div role="presentation"  class="portfolio-item grid-item Interior">
										<div class="product-box">
											<a data-rel="prettyPhoto[gallery2]" href="images/portfolio/img-19.jpg">
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
									<div role="presentation"  class="portfolio-item grid-item Interior">
										<div class="product-box">
											<a data-rel="prettyPhoto[gallery2]" href="images/portfolio/img-20.jpg">
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
									<div role="presentation"  class="portfolio-item grid-item Renovation">
										<div class="product-box">
											<a data-rel="prettyPhoto[gallery2]" href="images/portfolio/img-21.jpg">
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
			</section>
			<!--************************************
					Portfolio End
			*************************************-->
			<!--************************************
					Testimonials Start
			*************************************-->
			<section class="tg-main-section tg-testimonial-img tg-haslayout">
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
												<li><a href="#"><i class="flaticon-plus79"></i></a></li>
												<li><a href="#"><i class="flaticon-share55"></i></a></li>
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
												<li><a href="#"><i class="flaticon-plus79"></i></a></li>
												<li><a href="#"><i class="flaticon-share55"></i></a></li>
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
												<li><a href="#"><i class="flaticon-plus79"></i></a></li>
												<li><a href="#"><i class="flaticon-share55"></i></a></li>
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
												<li><a href="#"><i class="flaticon-plus79"></i></a></li>
												<li><a href="#"><i class="flaticon-share55"></i></a></li>
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
												<li><a href="#"><i class="flaticon-plus79"></i></a></li>
												<li><a href="#"><i class="flaticon-share55"></i></a></li>
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
												<li><a href="#"><i class="flaticon-plus79"></i></a></li>
												<li><a href="#"><i class="flaticon-share55"></i></a></li>
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
		<footer id="footer" class="tg-haslayout">
			<div class="tg-main-section">
				<div class="container">
					<div class="row">
						<div class="tg-cols">
							<div class="col-sm-4 tg-colfirst-bgcolor">
								<div class="tg-col">
									<div class="tg-theme-heading">
										<h3>About Us</h3>
									</div>
									<strong class="logo">
										<a href="index.html">
											<img src="images/logo2.png" alt="constructioner">
										</a>
									</strong>
									<div class="tg-description">
										<p>Lorem ipsum dolor sit amet, consectetuer adiscing elit, sed diam nonummy nibh euismod tincidunt laoreet dolore magna aliquam.</p>
									</div>
									<ul class="tg-social-icon">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-tumblr"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-4 tg-colmid-bgcolor">
								<div class="tg-col">
									<div class="tg-theme-heading">
										<h3>Latest news</h3>
									</div>
									<div class="tg-latest-post">
										<ul>
											<li>
												<span class="tg-date">04<i>Feb</i></span>
												<div class="tg-post-contentbox">
													<div class="tg-description">
														<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium</p>
													</div>
													<div class="tg-post-meta">
														<span><a href="#">26 Comments</a></span>
													</div>
												</div>
											</li>
											<li>
												<span class="tg-date">04<i>Feb</i></span>
												<div class="tg-post-contentbox">
													<div class="tg-description">
														<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium</p>
													</div>
													<div class="tg-post-meta">
														<span><a href="#">26 Comments</a></span>
													</div>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-sm-4 tg-collast-bgcolor">
								<div class="tg-col">
									<div class="tg-theme-heading">
										<h3>get in touch</h3>
									</div>
									<div class="contact-info">
										<ul>
											<li>
												<span>Address:</span>
												<span>795 South Park Avenue, Door 6 Wonderland, CA 94107, Australia</span>
											</li>
											<li>
												<span>Phone:</span>
												<span>
													<i>+440 875369208 - Office</i>
													<i>+440 353363114 - Fax</i>
												</span>
											</li>
											<li>
												<span>Email:</span>
												<span>
													<i><a href="support%40sitename.html">support@sitename.com</a></i>
													<i><a href="info%40sitename.html">info@sitename.com</a></i>
												</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-haslayout tg-footerbar-color">
				<div class="container">
					<div class="tg-footer-bar">
						<nav class="footer-nav">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">About</a></li>
								<li><a href="#">Services</a></li>
								<li><a href="#">Portfolio</a></li>
								<li><a href="#">virtual construct</a></li>
								<li><a href="#">Blog</a></li>
								<li><a href="#">Contact</a></li>
							</ul>
						</nav>
						<span class="copyright">&copy; 2015 | All Rights Reserved</span>
					</div>
				</div>
			</div>
		</footer>
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
	<div class="modal fade login-modalbox" tabindex="-1" role="dialog">
		<div class="tg-login-modalbox">
			<h2>LOGIN FORM</h2>
			<form class="login-form">
				<fieldset>
					<div class="form-group">
						<i class="fa fa-envelope"></i>
						<input type="email" placeholder="Email" class="form-control">
					</div>
					<div class="form-group">
						<i class="fa fa-lock"></i>
						<input type="text" placeholder="Name" class="form-control">
					</div>
					<div class="form-group">
						<label>
							<input type="checkbox">
							<em>Remember Me</em>
						</label>
						<a class="forgetpassword" href="#">
							<em>Forgot Password</em>
							<i class="fa fa-question-circle"></i>
						</a>
					</div>
					<button class="tg-theme-btn tg-theme-btn-lg" type="submit">login</button>
				</fieldset>
			</form>
			<p>Not a Member? <a href="#">Create an Account</a></p>
		</div>
	</div>
	<div class="modal fade signup-modalbox" tabindex="-1" role="dialog">
		<div class="tg-signup-modalbox">
			<h2>REGISTRATION FORM</h2>
			<form class="login-form">
				<fieldset>
					<div class="form-group">
						<input type="text" placeholder="Username" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" placeholder="Password" class="form-control">
					</div>
					<div class="form-group">
						<input type="password" placeholder="Confirm Password" class="form-control">
					</div>
					<div class="form-group">
						<input type="email" placeholder="Email Address" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" placeholder="First Name" class="form-control">
					</div>
					<div class="form-group">
						<input type="text" placeholder="Last Name" class="form-control">
					</div>
					<div class="form-group">
						<label><input type="checkbox"><em>I agree with the terms and conditions</em></label>
					</div>
					<button class="tg-theme-btn tg-theme-btn-lg" type="submit">Create an Account</button>
				</fieldset>
			</form>
		</div>
	</div>
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
	<script src="{{asset('client/js/classie.js')}}"></script>
	<script src="{{asset('client/js/gnmenu.js')}}"></script>
	<script src="http://maps.google.com/maps/api/js?key=AIzaSyDlh_AGFXk44DuUVd6BDFas5XgqevprVms&amp;language=en"></script>
	<script src="{{asset('client/js/gmap3.js')}}"></script>
	<script src="{{asset('client/js/main.js')}}"></script>
	<script>new gnMenu( document.getElementById( 'gn-menu' ) );</script>
</body>

<!-- Template for amclcanada.com/index2.html by akr4m, Sat, 30 Mar 2019 14:27:40 GMT -->
</html>