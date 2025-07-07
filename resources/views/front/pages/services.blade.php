@extends('front.layout.main-layout')

@section('content')


    <body data-mobile-nav-style="classic">

        <!-- start page title -->
        <section class="page-title-big-typography cover-background" style="background-image: url(picture/bg02.jpg)">
            <div class="container">
                <div class="row align-items-center small-screen">
                    <div class="col-10 col-sm-12 position-relative page-title-extra-large">
                        <h1 class="alt-font text-dark-gray mb-10px ls-minus-1px" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["Services"], "duration": 500, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1>
                        <h2 class="mb-0 xs-w-85 text-dark-gray"  data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 200, "easing": "easeOutQuad" }'>Every Dog Deserves a Chance to Shine!</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section --> 
        <section class="lg-pt-20px xs-pt-0">
        <div class="container">
        <div class="row align-items-center justify-content-center"> 
            
            <!-- Single Image on Left -->
            <div class="col-xl-7 col-lg-6 md-mb-12 xs-mb-30px text-center" 
                 data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1500, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <img src="picture/ab1.jpeg" alt="" class="img-fluid border-radius-6px" />
            </div>

            <!-- Text on Right -->
            <div class="col-xl-5 col-lg-6 ps-6 xl-ps-3 md-ps-15px" 
                 data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <h3 class="alt-font text-dark-gray">Obedience Training</h3> 
                <p class="mb-30px">
                    The organization’s programs are focused on direct interventions in the areas of healthcare, agecare, livelihoods, disaster response as well as advocacy and awareness on rights.
                </p> 

            </div> 

        </div> 
    </div>
    </section>

        <!-- end section --> 

@foreach(getServiceCategories() as $serviceCategory)
    @php
        $isEven = $loop->even;
        $bgStyle = $isEven
            ? "background-color: #f5f5f5;" // Light gray for even
            : "background-image: url('picture/servicebg.jpg'); background-size: cover; background-position: center;";
    @endphp

    <section class="background-position-left-top position-relative" style="{{ $bgStyle }}">
        <div class="container">
            <div class="row justify-content-center mb-5 sm-mb-30px">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-10 text-center last-paragraph-no-margin"
                    data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="alt-font text-dark-gray mb-10px">{{ $serviceCategory }}</h3>
                    <p class="w-60 mx-auto sm-w-100 text-dark-gray">
                        Enhances control and focus with complex commands, off-leash training, and advanced behavior shaping.
                    </p>
                </div>
            </div>

            <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 mb-3 xs-mb-35px"
                data-anime='{ "el": "childs", "translateX": [-20, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>

                @foreach(getServiceByCategory($serviceCategory) as $service)
                    <div class="col text-center team-style-05 mb-40px">
                        <div class="position-relative overflow-hidden border-radius-4px mb-25px last-paragraph-no-margin">
                            <img src="{{ asset('web/media/sm/' . $service->image) }}"
                                 alt="{{ $service->title }}"
                                 style="width: 100%; height: 300px; object-fit: cover; border-radius: 6px;" />
                        </div>
                        <div class="fs-18 lh-22 fw-500 text-dark-gray">{{ $service->name }}</div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
@endforeach

            

@endsection