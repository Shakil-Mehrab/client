@extends('layout.master')
@section('banner')
 <div class="tg-banner tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/page-banner-img/img-01.jpg">
    <div class="tg-banner-holder">
      <div class="container">
        <div class="tg-displaytable">
          <div class="tg-displaytablecell">
            <div class="banner-content tg-haslayout">
              <h1>portfolio grid</h1>
              <ol class="tg-breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">portfolio grid</li>
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
    <div class="container"> 
      <!--************************************
						Portfolio Start
				*************************************-->
      <div class="tg-main-section tg-haslayout">
        <div class="tg-portfolio tg-portfolio-grid tg-haslayout">
          <div class="row">
            <div class="col-sm-4">
              <div class="tg-theme-heading"> <span>Some of our</span>
                <h2>Portfolio</h2>
              </div>
            </div>
            <div class="col-sm-8">
              <ul id="gallery-cats" class="gallery-cats option-set tg-haslayout">
                <li class="select"><a href="#" data-filter="*">All</a></li>
                <li><a href="#" data-filter=".contsruction">Contsruction</a></li>
                <li><a href="#" data-filter=".digging">Digging</a></li>
                <li><a href="#" data-filter=".renovation">Renovation</a></li>
                <li><a href="#" data-filter=".interior">Interior</a></li>
              </ul>
            </div>
          </div>
          <div class="tg-service-img tg-haslayout">
            <div class="tab-content tg-img-border">
              <div role="tabpanel" class="tab-pane fade in active" id="portfolio-item-one">
                <figure> <a href="images/portfolio/img-14.jpg" data-rel="prettyPhoto[gallery1]"> <img src="{{asset('images/portfolio/img-14.jpg')}}" alt="image description"> </a> </figure>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="portfolio-item-two">
                <figure> <a href="images/portfolio/img-15.jpg" data-rel="prettyPhoto[gallery1]"> <img src="{{asset('images/portfolio/img-15.jpg" alt="image description')}}"> </a> </figure>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="portfolio-item-three">
                <figure> <a href="images/portfolio/img-16.jpg" data-rel="prettyPhoto[gallery1]"> <img src="images/portfolio/img-16.jpg" alt="image description"> </a> </figure>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="portfolio-item-four">
                <figure> <a href="images/portfolio/img-17.jpg" data-rel="prettyPhoto[gallery1]"> <img src="images/portfolio/img-17.jpg" alt="image description"> </a> </figure>
              </div>
              <div role="tabpanel" class="tab-pane fade in" id="portfolio-item-five">
                <figure> <a href="images/portfolio/img-18.jpg" data-rel="prettyPhoto[gallery1]"> <img src="images/portfolio/img-18.jpg" alt="image description"> </a> </figure>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="portfolio-item-six">
                <figure> <a href="images/portfolio/img-19.jpg" data-rel="prettyPhoto[gallery1]"> <img src="images/portfolio/img-19.jpg" alt="image description"> </a> </figure>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="portfolio-item-seven">
                <figure> <a href="images/portfolio/img-20.jpg" data-rel="prettyPhoto[gallery1]"> <img src="images/portfolio/img-20.jpg" alt="image description"> </a> </figure>
              </div>
              <div role="tabpanel" class="tab-pane fade" id="portfolio-item-eight">
                <figure> <a href="images/portfolio/img-21.jpg" data-rel="prettyPhoto[gallery1]"> <img src="images/portfolio/img-21.jpg" alt="image description"> </a> </figure>
              </div>
            </div>
          </div>
          <div class="portfolio masnory tg-haslayout">
            <div class="row">
              <div class="portfolio-content tg-haslayout grid" role="tablist">
                <div role="presentation" class="active portfolio-item grid-item contsruction">
                  <div class="product-box"> <a href="#portfolio-item-one" aria-controls="portfolio-item-one" role="tab" data-toggle="tab">
                    <figure><img src="{{asset('images/thumbnail/img-01.jpg')}}" alt="image description"></figure>
                    <div class="tg-img-hover">
                      <div class="tg-displaytable">
                        <div class="tg-displaytablecell"> <i class="fa fa-picture-o"></i>
                          <h4>Exterior Project</h4>
                        </div>
                      </div>
                    </div>
                    </a> </div>
                </div>
                <div role="presentation" class="portfolio-item grid-item digging">
                  <div class="product-box"> <a href="#portfolio-item-two" aria-controls="portfolio-item-two" role="tab" data-toggle="tab">
                    <figure><img src="images/thumbnail/img-02.jpg" alt="image description"></figure>
                    <div class="tg-img-hover">
                      <div class="tg-displaytable">
                        <div class="tg-displaytablecell"> <i class="fa fa-picture-o"></i>
                          <h4>Exterior Project</h4>
                        </div>
                      </div>
                    </div>
                    </a> </div>
                </div>
                <div role="presentation" class="portfolio-item grid-item renovation">
                  <div class="product-box"> <a href="#portfolio-item-three" aria-controls="portfolio-item-three" role="tab" data-toggle="tab">
                    <figure><img src="{{asset('images/thumbnail/img-03.jpg')}}" alt="image description"></figure>
                    <div class="tg-img-hover">
                      <div class="tg-displaytable">
                        <div class="tg-displaytablecell"> <i class="fa fa-picture-o"></i>
                          <h4>Exterior Project</h4>
                        </div>
                      </div>
                    </div>
                    </a> </div>
                </div>
                <div role="presentation" class="portfolio-item grid-item interior">
                  <div class="product-box"> <a href="#portfolio-item-four" aria-controls="portfolio-item-four" role="tab" data-toggle="tab">
                    <figure><img src="images/thumbnail/img-04.jpg" alt="image description"></figure>
                    <div class="tg-img-hover">
                      <div class="tg-displaytable">
                        <div class="tg-displaytablecell"> <i class="fa fa-picture-o"></i>
                          <h4>Exterior Project</h4>
                        </div>
                      </div>
                    </div>
                    </a> </div>
                </div>
                <div role="presentation" class="portfolio-item grid-item interior">
                  <div class="product-box"> <a href="#portfolio-item-five" aria-controls="portfolio-item-five" role="tab" data-toggle="tab">
                    <figure><img src="images/thumbnail/img-05.jpg" alt="image description"></figure>
                    <div class="tg-img-hover">
                      <div class="tg-displaytable">
                        <div class="tg-displaytablecell"> <i class="fa fa-picture-o"></i>
                          <h4>Exterior Project</h4>
                        </div>
                      </div>
                    </div>
                    </a> </div>
                </div>
                <div role="presentation"  class="portfolio-item grid-item construction">
                  <div class="product-box"> <a href="#portfolio-item-six" aria-controls="portfolio-item-six" role="tab" data-toggle="tab">
                    <figure><img src="images/thumbnail/img-06.jpg" alt="image description"></figure>
                    <div class="tg-img-hover">
                      <div class="tg-displaytable">
                        <div class="tg-displaytablecell"> <i class="fa fa-picture-o"></i>
                          <h4>Exterior Project</h4>
                        </div>
                      </div>
                    </div>
                    </a> </div>
                </div>
                <div role="presentation"  class="portfolio-item grid-item digging">
                  <div class="product-box"> <a href="#portfolio-item-seven" aria-controls="portfolio-item-seven" role="tab" data-toggle="tab">
                    <figure><img src="images/thumbnail/img-07.jpg" alt="image description"></figure>
                    <div class="tg-img-hover">
                      <div class="tg-displaytable">
                        <div class="tg-displaytablecell"> <i class="fa fa-picture-o"></i>
                          <h4>Exterior Project</h4>
                        </div>
                      </div>
                    </div>
                    </a> </div>
                </div>
                <div role="presentation"  class="portfolio-item grid-item renovation">
                  <div class="product-box"> <a href="#portfolio-item-eight" aria-controls="portfolio-item-eight" role="tab" data-toggle="tab">
                    <figure><img src="images/thumbnail/img-08.jpg" alt="image description"></figure>
                    <div class="tg-img-hover">
                      <div class="tg-displaytable">
                        <div class="tg-displaytablecell"> <i class="fa fa-picture-o"></i>
                          <h4>Exterior Project</h4>
                        </div>
                      </div>
                    </div>
                    </a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--************************************
						Portfolio End
				*************************************--> 
    </div>
    <!--************************************
					Brands Start
			*************************************-->
    <section class="tg-main-section tg-haslayout">
      <div class="container">
        <div class="row">
          <div class="tg-brands tg-haslayout">
            <div class="col-sm-3 col-xs-3 width-360">
              <figure><a href="#"><img src="{{asset('images/brand-01.png')}}" alt="brand name"></a></figure>
            </div>
            <div class="col-sm-3 col-xs-3 width-360">
              <figure><a href="#"><img src="{{asset('images/brand-02.png')}}" alt="brand name"></a></figure>
            </div>
            <div class="col-sm-3 col-xs-3 width-360">
              <figure><a href="#"><img src="{{asset('images/brand-03.png')}}" alt="brand name"></a></figure>
            </div>
            <div class="col-sm-3 col-xs-3 width-360">
              <figure><a href="#"><img src="{{asset('images/brand-04.png')}}" alt="brand name"></a></figure>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--************************************
					Brands End
			*************************************--> 
  </main>
@endsection