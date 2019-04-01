@extends('layout.master')
@section('banner')
<div class="tg-banner tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/page-banner-img/img-01.jpg">
			<div class="tg-banner-holder">
				<div class="container">
					<div class="tg-displaytable">
						<div class="tg-displaytablecell">
							<div class="banner-content tg-haslayout">
								<h1>blog detail</h1>
								<ol class="tg-breadcrumb">
									<li><a href="#">Home</a></li>
									<li class="active">blog detail</li>
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
					Blog Detail Section Start
			*************************************-->
			<div class="tg-main-section tg-haslayout">
				<div class="container">
					<div class="row">
						<div id="content" class="col-md-9 col-sm-8 col-xs-12">
							<article class="blog-post blog-post-detail tg-haslayout">
								<figure>
									<img src="{{asset('images/blog-detail/img-01.jpg')}}" alt="image description">
									<div class="tg-img-hover">
										<div class="tg-displaytable">
											<div class="tg-displaytablecell">
												<h2>blog title here</h2>
												<ul class="tg-metadata">
													<li class="author"><a href="#">By Admin / </a></li>
													<li class="catagory"><a href="#">In Photography</a></li>
												</ul>
											</div>
										</div>
									</div>
								</figure>
								<div class="tg-post-detail">
										<div class="tg-description">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum.</p>
											<p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
											<blockquote>
												<q>“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh eismod tincidunt ut laoreet dolore magna.”</q>
												<span class="author"><a href="#">Frank Smith, Company Inc.</a></span>
										  </blockquote>
										</div>
									</div>
							</article>
							<div class="tags-social tg-haslayout">
								<div class="tags pull-left">
									<strong>tags:</strong>
									<ul class="tg-tags">
										<li><a href="#">Build</a></li>
										<li><a href="#">Construction</a></li>
										<li><a href="#">PSD</a></li>
										<li><a href="#">Themeforest</a></li>
									</ul>
								</div>
								<div class="social pull-right">
									<strong>share</strong>
									<ul class="tg-social-icon">
										<li class="facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
										<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="tg-about-author tg-haslayout">
								<figure class="tg-author-pic tg-img-border">
									<img src="{{asset('images/blog-detail/img-02.jpg')}}" alt="image description">
								</figure>
								<div class="tg-author-content">
									<div class="col-sm-4">
										<div class="author-detail row">
											<ul class="tg-social-icon">
												<li class="facebook"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
												<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
												<li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
											</ul>
											<div class="author-name">
												<h3>Author Name</h3>
												<span>Author Since: 26 / May / 2015</span>
											</div>
										</div>
									</div>
									<div class="col-sm-8">
										<div class="about-author row">
												<h3>about Author</h3>
												<div class="tg-description">
													<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque alias laudantium, totam rem aperiam perspiciatis unde omnis iste. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
												</div>
											</div>
									</div>
								</div>
							</div>
							<div id="comments" class="tg-haslayout">
								<h3>3 comments</h3>
								<ul>
									@forelse($comments as $comment)
									<li>
										<div class="comment">
											<figure class="tg-author-img">
												<a href="#"><img src="{{asset($comment->user->image)}}" alt="image description"></a>
											</figure>
											<div class="comment-box">
												<div class="text-box">
													<div class="comment-head">
														<div class="left">
															<h3>{{$comment->user->name}}</h3>
														</div>
														<div class="right">
															<a href="#" class="tg-theme-btn">reply</a>
														</div>
													</div>
													<span>Commented on {{$comment->created_at->diffForhumans()}}</span>
													<div class="tg-description">
														<p>{{$comment->message}}</p>
													</div>
												</div>
											</div>
										</div>
									</li>
									@empty
									<li>
										<div class="comment">
											<figure class="tg-author-img">
												<a href="#"><img src="" alt="No Commentator"></a>
											</figure>
											<div class="comment-box">
												<div class="text-box">
													<div class="comment-head">
														<div class="left">
															<h3></h3>
														</div>
														<div class="right">
															<a href="#" class="tg-theme-btn"></a>
														</div>
													</div>
													<span></span>
													<div class="tg-description">
														<p></p>
													</div>
												</div>
											</div>
										</div>
									</li>
									@endforelse
								</ul>
							</div>
							<div class="tg-comment-formarea tg-haslayout">
								<div class="leave-comment tg-haslayout">
									<div class="left">
										<h3>Leave a Comment</h3>
										@include('layouts.includes.message')
									</div>
								</div>
								<form class="form-comment tg-haslayout" method="post" action="{{route('comment.store')}}">
									@csrf
									<fieldset>
										<div class="form-group">
											<i class="fa fa-paper-plane"></i>
											<textarea name="message" placeholder="Message" class="theme-textarea" required></textarea>
										</div>
										<button type="submit" class="tg-theme-btn">Submit</button>
									</fieldset>
								</form>
							</div>
						</div>
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
			<!--************************************
					Blog Detail Section End
			*************************************-->
		</main> 		
@endsection		
		