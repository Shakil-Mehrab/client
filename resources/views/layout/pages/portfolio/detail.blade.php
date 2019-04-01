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
                    <div class="tg-main-section tg-project-detail tg-haslayout">
                        <div id="tg-project-gallery" class="tg-project-gallery tg-haslayout">
                            <figure class="grid-item">
                                <a href="images/project-gallery/img-01.jpg" data-rel="prettyPhoto[project]">
                                    <img src="{{asset('images/project-gallery/img-01.jpg')}}" alt="image description">
                                    <div class="tg-img-hover">
                                        <i class="flaticon-plus79"></i>
                                    </div>
                                </a>
                            </figure>
                            <figure class="grid-item grid-item--width2">
                                <a href="images/project-gallery/img-02.jpg" data-rel="prettyPhoto[project]">
                                    <img src="images/project-gallery/img-02.jpg" alt="image description">
                                    <div class="tg-img-hover">
                                        <i class="flaticon-plus79"></i>
                                    </div>
                                </a>
                            </figure>
                            <figure class="grid-item">
                                <a href="images/project-gallery/img-03.jpg" data-rel="prettyPhoto[project]">
                                    <img src="images/project-gallery/img-03.jpg" alt="image description">
                                    <div class="tg-img-hover">
                                        <i class="flaticon-plus79"></i>
                                    </div>
                                </a>
                            </figure>
                            <figure class="grid-item grid-item--width3">
                                <a href="images/project-gallery/img-04.jpg" data-rel="prettyPhoto[project]">
                                    <img src="images/project-gallery/img-04.jpg" alt="image description">
                                    <div class="tg-img-hover">
                                        <i class="flaticon-plus79"></i>
                                    </div>
                                </a>
                            </figure>
                            <figure class="grid-item">
                                <a href="images/project-gallery/img-05.jpg" data-rel="prettyPhoto[project]">
                                    <img src="images/project-gallery/img-05.jpg" alt="image description">
                                    <div class="tg-img-hover">
                                        <i class="flaticon-plus79"></i>
                                    </div>
                                </a>
                            </figure>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="tg-project-description">
                                    <div class="tg-theme-heading">
                                        <span>Prejects Detail</span>
                                        <h2>project Detail</h2>
                                    </div>
                                    <div class="tg-description">
                                        <p>Nam nec tellus a odio tincidunt auctor a mauris vitae erat consequat auctor eu in elit nostra, per inceptos himenaeos.</p>
                                    </div>
                                    <ul>
                                        <li>
                                            <strong>Client:</strong>
                                            <span>Smithson Doe</span>
                                        </li>
                                        <li>
                                            <strong>catagory:</strong>
                                            <span>Home Design</span>
                                        </li>
                                        <li>
                                            <strong>Value:</strong>
                                            <span>$ 150,0000</span>
                                        </li>
                                        <li>
                                            <strong>surface area:</strong>
                                            <span>920,000 / M2</span>
                                        </li>
                                        <li>
                                            <strong>location:</strong>
                                            <span>Wonderland, CA 94107, Australia</span>
                                        </li>
                                        <li>
                                            <strong>Shares:</strong>
                                            <ul class="tg-social-icon">
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="tg-haslayout tg-skills">
                                        <div class="tg-theme-heading">
                                            <span>Prejects Detail</span>
                                            <h2>owner’s review</h2>
                                        </div>
                                        <div class="tg-owner-comment">
                                            <figure class="tg-owner-pic tg-border">
                                                <img src="{{asset('images/thumbnail/img-33.jpg')}}" alt="image description">
                                            </figure>
                                            <div class="tg-reviewbox">
                                                <div class="tg-description">
                                                    <p>Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                                </div>
                                                <div class="tg-rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="our-skill1" class="skill-group">
                                            <div class="skill">
                                                <span class="skill-name">Photoshop</span>
                                                <div class="skill-holder" data-percent="95%">
                                                    <span>95%</span>
                                                    <div class="skill-bar" style="width: 95%;"></div>
                                                </div>
                                            </div>
                                            <div class="skill">
                                                <span class="skill-name">After Effect</span>
                                                <div class="skill-holder" data-percent="85%">
                                                    <span>85%</span>
                                                    <div class="skill-bar" style="width: 85%;"></div>
                                                </div>
                                            </div>
                                            <div class="skill">
                                                <span class="skill-name">Illustrator</span>
                                                <div class="skill-holder" data-percent="89%">
                                                    <span>89%</span>
                                                    <div class="skill-bar" style="width: 89%;"></div>
                                                </div>
                                            </div>
                                            <div class="skill">
                                                <span class="skill-name">Flash</span>
                                                <div class="skill-holder" data-percent="60%">
                                                    <span>60%</span>
                                                    <div class="skill-bar" style="width: 60%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="tg-project-description">
                                    <div class="tg-theme-heading">
                                        <span>Prejects Detail</span>
                                        <h2>description</h2>
                                    </div>
                                    <div class="tg-description">
                                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit hace aauctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipissum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit aasmet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti hacsociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.</p>
                                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit hace aauctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipissum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit aasmet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti hacsociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.</p>
                                        <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit hace aauctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipissum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit aasmet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti hacsociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--************************************
                                    Portfolio End
                    *************************************-->
                </div>
            </main>
@endsection