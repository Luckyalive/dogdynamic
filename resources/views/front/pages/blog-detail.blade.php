@extends('front.layout.main-layout')

@section('content')


        <section class="page-title-big-typography cover-background" style="background-image: url({{asset('picture/bg4.jpg')}})">
            <div class="container">
                <div class="row align-items-center small-screen">
                    <div class="col-10 col-sm-12 position-relative page-title-extra-large">
                        <h1 class="alt-font text-dark-gray mb-10px ls-minus-1px" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["Blog Detail"], "duration": 500, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1>
                        <!-- <h2 class="mb-0 xs-w-85"  data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 200, "easing": "easeOutQuad" }'>Fight for right cause for save the world.</h2> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end section --> 
        <!-- start section -->
        <section class="pb-0"> 
            <div class="container">
                <div class="row justify-content-center">
               {{-- Blog Heading --}}
            <div class="col-lg-10"> 
                <h4 class="alt-font text-dark-gray w-90 md-w-100">{{ $blog->heading }}</h4>
            </div> 
                {{-- Blog Intro - Single Paragraph --}}
                <div class="col-lg-10 mb-6 sm-mb-35px"> 
                    <p class="w-90 lg-w-100">{!! \Illuminate\Support\Str::limit(strip_tags($blog->description), 250) !!}</p>
                </div> 

                 {{-- Blog Main Image --}}
                <div class="col-lg-10 mb-6 sm-mb-35px last-paragraph-no-margin text-center">
                    <img src="{{ asset('web/media/sm/' . $blog->image) }}" class="mb-20px" alt="{{ $blog->image_title }}">
                    <p class="pb-20px text-dark-gray fw-600 text-uppercase fs-15 ls-1px">{{ $blog->image_title ?? 'Featured Image' }}</p>
                    <div class="h-1px w-100 bg-extra-medium-gray"></div>
                </div>

                    {{-- <div class="col-lg-10 mb-6 sm-mb-35px last-paragraph-no-margin"> 
                        <h5 class="alt-font text-dark-gray w-95 md-w-100">Providing a safe environment to child labourers and children of construction workers with an aim to connect them with schools.</h5>
                        <p class="w-90 lg-w-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non , sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error.</p>
                    </div> 
                    <div class="col-lg-10 mb-6 sm-mb-35px">
                        <div class="row">
                            <div class="col-md-6 sm-mb-30px">
                                <img src="https://placehold.co/800x1030" alt="">
                            </div>
                            <div class="col-md-6">
                                <img src="https://placehold.co/800x1030" alt="">
                            </div>
                        </div>
                    </div> 
                    <div class="col-lg-10 last-paragraph-no-margin">
                        <h5 class="text-dark-gray alt-font w-90 md-w-100">The children are in need of alternative spaces for quality education and learning.</h5>
                        <p class="mb-6 w-90 lg-w-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error.</p>
                        <h5 class="text-dark-gray alt-font w-90 md-w-100">Receives wide support from various Trusts & Foundations across the country.</h5>
                        <p class="w-90 lg-w-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.</p>
                    </div> --}}
                </div>
            </div>
        </section> 
@endsection
   
