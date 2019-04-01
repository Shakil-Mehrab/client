@extends('layout.master')
@section('banner')
<div class="tg-banner tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/page-banner-img/img-01.jpg">
			<div class="tg-banner-holder">
				<div class="container">
					<div class="tg-displaytable">
						<div class="tg-displaytablecell">
							<div class="banner-content tg-haslayout">
								<h1>blog list</h1>
								<ol class="tg-breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">blog list</li>
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
			<div class="tg-main-section tg-haslayout bg-white">
				<div class="container">
					<div class="row">
						<div id="twocolumns" class="blog-list">
							<!--************************************
									Blog List Section Start
							*************************************-->
							<div class="col-md-9 col-sm-8 col-xs-12">
								<div class="tg-theme-heading">
									<span>from our</span>
									<h2>latest blog</h2>
								</div>
								<div class="tg-post">
									<div class="tg-post-img">
										<figure>
											<a href="#">
												<img src="{{asset('images/blog-list/img-01.jpg')}}" alt="image description">
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
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque alias laudantium, totam rem aperiam.</p>
										</div>
									</div>
								</div>
								<div class="tg-post">
									<div class="tg-post-img">
										<figure>
											<a href="#">
												<img src="images/blog-list/img-02.jpg" alt="image description">
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
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque alias laudantium, totam rem aperiam.</p>
										</div>
									</div>
								</div>
								<div class="tg-post">
									<div class="tg-post-img">
										<figure>
											<a href="#">
												<img src="images/blog-list/img-03.jpg" alt="image description">
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
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque alias laudantium, totam rem aperiam.</p>
										</div>
									</div>
								</div>
								<div class="tg-post">
									<div class="tg-post-img">
										<figure>
											<a href="#">
												<img src="images/blog-list/img-04.jpg" alt="image description">
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
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque alias laudantium, totam rem aperiam.</p>
										</div>
									</div>
								</div>
								<!--************************************
									Pagination Start
								*************************************-->
								<ul class="tg-pagination">
									<li class="tg-prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li class="tg-next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
								</ul>
								<!--************************************
									Pagination End
								*************************************-->
							</div>
							<!--************************************
									Blog List Section End
							*************************************-->
							<!--************************************
									Sidebar Start
							*************************************-->
							<aside id="sidebar" class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
								<div class="row">
									<div class="col-md-12 col-xs-12">
										<div class="tg-widget sidebar-search">
											<div class="tg-widget-holder">
												<form class="search-form">
													<fieldset>
														<input type="search" placeholder="Search..." class="form-control">
														<button type="submit" class="fa fa-search"></button>
													</fieldset>
												</form>
											</div>
										</div>
									</div>
									<div class="col-md-12 col-xs-12">
										<div class="tg-widget widget-categories">
										<div class="tg-widget-holder">
											<h3>Categories</h3>
											<ul>
												<li>
													<a href="#">
														<em>Web Design</em>
														<i>389</i>
													</a>
												</li>
												<li>
													<a href="#">
														<em>Marketing</em>
														<i>256</i>
													</a>
												</li>
												<li>
													<a href="#">
														<em>Wordpress</em>
														<i>56</i>
													</a>
												</li>
												<li>
													<a href="#">
														<em>Graphic Design</em>
														<i>43</i>
													</a>
												</li>
												<li>
													<a href="#">
														<em>Photography</em>
														<i>38</i>
													</a>
												</li>
												<li>
													<a href="#">
														<em>eCommerce</em>
														<i>26</i>
													</a>
												</li>
												<li>
													<a href="#">
														<em>Html</em>
														<i>3</i>
													</a>
												</li>
											</ul>
										</div>
									</div>
									</div>
									<div class="col-md-12 col-xs-12">
										<div class="tg-widget widget-recent-post">
											<div class="tg-widget-holder">
												<h3>Recent Posts</h3>
												<ul>
													<li>
														<p>Claritas est etiam processus dynamicus, qui sequitur...</p>
														<time datetime="2008-02-14 20:00" class="tg-post-date">04 February 2015</time>
													</li>
													<li>
														<p>Duis aytem eum iriure dolor...</p>
														<time datetime="2008-02-14 20:00" class="tg-post-date">04 February 2015</time>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-12 col-xs-12">
										<div class="tg-widget widget-accordions">
										<div class="tg-widget-holder">
											<h3>Accordions Widget</h3>
											<ul class="tg-haslayout accordion" id="accordion" role="tablist" aria-multiselectable="true">
												<li class="tg-panel panel">
													<div class="tg-panel-heading actives" role="tab" id="headingOne">
														<h4 class="actives">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Our Solution</a>
														</h4>
													</div>
													<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
														<div class="tg-body">
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
														</div>
													</div>
												</li>
												<li class="tg-panel panel">
													<div class="tg-panel-heading" role="tab" id="headingTwo">
														<h4>
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Our Mission</a>
														</h4>
													</div>
													<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
														<div class="tg-body">
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
														</div>
													</div>
												</li>
												<li class="tg-panel panel">
													<div class="tg-panel-heading" role="tab" id="headingThree">
														<h4>
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Our Technology</a>
														</h4>
													</div>
													<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
														<div class="tg-body">
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
														</div>
													</div>
												</li>
												<li class="tg-panel panel">
													<div class="tg-panel-heading" role="tab" id="headingFour">
														<h4>
															<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">Our Specification</a>
														</h4>
													</div>
													<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
														<div class="tg-body">
															<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									</div>
									<div class="col-md-12 col-xs-12">
										<div class="tg-widget widget-flickr">
										<div class="tg-widget-holder">
											<h3>Flickr Widget</h3>
											<ul>
												<li>
													<div class="tg-post-img">
														<img src="images/thumbnail/img-25.jpg" alt="image description">
														<div class="tg-img-hover">
															<a href="#" class="flaticon-plus79"></a>
														</div>
													</div>
												</li>
												<li>
													<div class="tg-post-img">
														<img src="images/thumbnail/img-26.jpg" alt="image description">
														<div class="tg-img-hover">
															<a href="#" class="flaticon-plus79"></a>
														</div>
													</div>
												</li>
												<li>
													<div class="tg-post-img">
														<img src="images/thumbnail/img-27.jpg" alt="image description">
														<div class="tg-img-hover">
															<a href="#" class="flaticon-plus79"></a>
														</div>
													</div>
												</li>
												<li>
													<div class="tg-post-img">
														<img src="images/thumbnail/img-28.jpg" alt="image description">
														<div class="tg-img-hover">
															<a href="#" class="flaticon-plus79"></a>
														</div>
													</div>
												</li>
												<li>
													<div class="tg-post-img">
														<img src="images/thumbnail/img-29.jpg" alt="image description">
														<div class="tg-img-hover">
															<a href="#" class="flaticon-plus79"></a>
														</div>
													</div>
												</li>
												<li>
													<div class="tg-post-img">
														<img src="images/thumbnail/img-30.jpg" alt="image description">
														<div class="tg-img-hover">
															<a href="#" class="flaticon-plus79"></a>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
									</div>
								</div>
							</aside>
							<!--************************************
									Sidebar End
							*************************************-->
						</div>
					</div>
				</div>
			</div>
		</main>
@endsection