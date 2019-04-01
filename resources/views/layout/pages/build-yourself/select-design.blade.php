@extends('layout.master')
@section('banner')
		 <div class="tg-banner tg-haslayout parallax-window" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/page-banner-img/img-01.jpg">
                <div class="tg-banner-holder">
                    <div class="container">
                        <div class="tg-displaytable">
                            <div class="tg-displaytablecell">
                                <div class="banner-content tg-haslayout">
                                    <h1>virtual construct</h1>
                                    <ol class="tg-breadcrumb">
                                        <li><a href="#">Home</a></li>
                                        <li class="active">Virtual Construct</li>
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
                    <div class="tg-main-section row">
                        <div class="col-sm-8 col-xs-12">
                            <div class="houses-portfolio tg-haslayout">
                                <div class="tg-theme-heading">
                                    <span>wide range of</span>
                                    <h2>pre-design houses</h2>
                                </div>
                                <div id="tg-predesign-gallery" class="tg-predesign-gallery tg-haslayout">
                                    <div class="row">
                                        @forelse($designs as $design)
                                        <div class="col-md-3 col-sm-4 col-xs-4 width-500">
                                            <div class="tg-predesign-img">
                                                <a href="images/large/predesigned/img-01.jpg" data-rel="prettyPhoto[gallery3]">
                                                    <figure>
                                                        <img src="{{asset($design->image)}}" alt="image description" style="max-height: 100px;min-height: 100px">
                                                    </figure>
                                                    <div class="tg-img-hover">
                                                        <i class="flaticon-plus79"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        @empty
                                         <div class="col-md-3 col-sm-4 col-xs-4 width-500">
                                            <div class="tg-predesign-img">
                                                <a href="images/large/predesigned/img-01.jpg" data-rel="prettyPhoto[gallery3]">
                                                    <figure>
                                                        <img src="" alt="No Design">
                                                    </figure>
                                                    <div class="tg-img-hover">
                                                        <i class="flaticon-plus79"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                       @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-xs-12">
                            <div class="tg-blueprint-area">
                                <div class="tg-theme-heading">
                                    <span>you can upload</span>
                                    <h2>your blueprint</h2>
                                </div>
                                <div class="tg-upload-area tg-haslayout">
                                    <h3>Upload Image</h3>
                                    @include('layouts.includes.message')
<form method="post" action="{{route('design.upload')}}" enctype="multipart/form-data">
    @csrf

                                    <div class="upload-file">
                                        <strong>Upload image here</strong>
                                        <input type="file" name="image[]" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" multiple required/>
                                       
                                    </div>
                                     <button type="submit" class="tg-theme-btn" for="file-1">Upload now</button>
</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
@endsection