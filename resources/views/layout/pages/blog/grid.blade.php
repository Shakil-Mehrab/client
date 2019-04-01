@extends('layout.master')
@section('banner')
		<div class="tg-banner tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/page-banner-img/img-01.jpg">
			<div class="tg-banner-holder">
				<div class="container">
					<div class="tg-displaytable">
						<div class="tg-displaytablecell">
							<div class="banner-content tg-haslayout">
								<h1>blog grid</h1>
								<ol class="tg-breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">blog grid</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
@section('content')
<main id="main" class="tg-haslayout">
			<!--************************************
					Blog Grid Section Start
			*************************************-->
			<div class="tg-main-section tg-haslayout bg-white">
				<div class="container">
					<div class="row">
						<div class="blog-grid">
							<div class="col-xs-12">
								<div class="tg-theme-heading">
									<span>from our</span>
									<h2>latest blog</h2>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="tg-post">
								<div class="tg-post-img">
									<figure>
										<a href="#">
											<img src="{{asset('images/blog-grid/img-01.jpg')}}" alt="image description">
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
							<div class="col-sm-6">
								<div class="tg-post">
								<div class="tg-post-img">
									<figure>
										<a href="#">
											<img src="{{asset('images/blog-grid/img-02.jpg')}}" alt="image description">
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
							<div class="col-sm-6">
								<div class="tg-post">
								<div class="tg-post-img">
									<figure>
										<a href="#">
											<img src="images/blog-grid/img-03.jpg" alt="image description">
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
							<div class="col-sm-6">
								<div class="tg-post">
								<div class="tg-post-img">
									<figure>
										<a href="#">
											<img src="images/blog-grid/img-04.jpg" alt="image description">
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
							<div class="col-sm-6">
								<div class="tg-post">
								<div class="tg-post-img">
									<figure>
										<a href="#">
											<img src="images/blog-grid/img-05.jpg" alt="image description">
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
							<div class="col-sm-6">
								<div class="tg-post">
								<div class="tg-post-img">
									<figure>
										<a href="#">
											<img src="images/blog-grid/img-06.jpg" alt="image description">
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
							<div class="col-sm-6">
								<div class="tg-post">
								<div class="tg-post-img">
									<figure>
										<a href="#">
											<img src="images/blog-grid/img-07.jpg" alt="image description">
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
							<div class="col-sm-6">
								<div class="tg-post">
								<div class="tg-post-img">
									<figure>
										<a href="#">
											<img src="images/blog-grid/img-08.jpg" alt="image description">
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
							<!--************************************
								Pagination Start
							*************************************-->
							<div class="col-xs-12">
								<ul class="tg-pagination">
									<li class="tg-prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li class="tg-next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
								</ul>
							</div>
							<!--************************************
								Pagination End
							*************************************-->
						</div>
					</div>
				</div>
			</div>
			<!--************************************
					Blog Grid Section End
			*************************************-->
		</main>	
@endsection