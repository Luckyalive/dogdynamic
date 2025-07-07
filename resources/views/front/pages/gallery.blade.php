@extends('front.layout.main-layout')

@section('content')

    <body data-mobile-nav-style="classic">
        <!-- start page title -->
        <section class="page-title-big-typography cover-background" style="background-image: url(picture/bg4.jpg)">
            <div class="container">
                <div class="row align-items-center small-screen">
                    <div class="col-10 col-sm-12 position-relative page-title-extra-large">
                        <h1 class="alt-font text-dark-gray mb-10px ls-minus-1px" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["Gallery"], "duration": 500, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1>
                        <h2 class="mb-0 xs-w-85 text-dark-gray"  data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 200, "easing": "easeOutQuad" }'> Explore moments of transformation and training success from the journey.</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section --> 
        <section class="background-position-left-top background-no-repeat-y background-size-auto-100 pt-5 md-pt-0" style="background-image: url('images/demo-charity-causes-bg.jpg')">
            <div class="container">  
                <div class="row mb-60px md-mb-40px">
                    <div class="col">
                        <ul class="image-gallery-style-02 gallery-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <li class="grid-sizer"></li>
                            <!-- end gallery item -->

                            <!-- start gallery item -->
                        <section class="py-5">
                            <div class="container">
                                <ul class="image-gallery-style-02 gallery-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large"
                                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                                    <li class="grid-sizer"></li>

                                    @forelse($items as $gallery)
                                        <li class="grid-item transition-inner-all z-index-1">
                                            <div class="atropos" data-atropos data-atropos-perspective="1150">
                                                <div class="atropos-scale">
                                                    <div class="atropos-rotate">
                                                        <div class="atropos-inner" data-atropos-offset="3">
                                                            <div class="gallery-box">
                                                                <a href="{{ asset('web/media/sm/' . $gallery->image) }}" data-group="lightbox" title="{{ $gallery->name }}">
                                                                    <div class="position-relative gallery-image gallery-image-fixed bg-dark-gray border-radius-6px overflow-hidden">
                                                                        <img src="{{ asset('web/media/sm/' . $gallery->image) }}" alt="{{ $gallery->name }}" class="img-fixed" />
                                                                        <div class="d-flex align-items-center justify-content-center position-absolute top-0 left-0 w-100 h-100 gallery-hover move-bottom-top">
                                                                            <i class="bi icon-medium text-white"></i>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                                <div class="text-center pt-2">
                                                                    <h6 class="mb-0">{{ $gallery->name }}</h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @empty
                                        <li class="grid-item col-12 text-center">
                                            <p>No gallery items found.</p>
                                        </li>
                                    @endforelse
                                </ul>
                            </div>
                        </section>
                        <!-- Style for consistent image sizing -->
                        <style>
                            .gallery-image-fixed {
                                width: 100%;
                                height: 300px;
                                position: relative;
                            }

                            .gallery-image-fixed .img-fixed {
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                                object-position: center;
                                display: block;
                            }
                        </style>
                            <!-- end gallery item -->
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section --> 


        @endsection