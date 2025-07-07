@extends('front.layout.main-layout')


@section('content')

    <body data-mobile-nav-style="classic">
        <!-- start page title -->
        <section class="page-title-big-typography cover-background" style="background-image: url(picture/bg640.jpg)">
            <div class="container">
                <div class="row align-items-center small-screen">
                    <div class="col-10 col-sm-12 position-relative page-title-extra-large">
                        <h1 class="alt-font text-dark-gray mb-10px ls-minus-1px" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["About-us"], "duration": 500, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1>
                        {{-- <h2 class="mb-0 text-dark-gray xs-w-85"  data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 200, "easing": "easeOutQuad" }'>Dedicated to transforming dogs into disciplined companions through expert training and genuine care.</h2> --}}
                        <h2 class="mb-0 text-dark-gray xs-w-85" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            Dedicated to transforming dogs into disciplined companions<br>
                            through expert training and genuine care.
                        </h2>

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
                            <img src="picture/d03.png" alt="Dog training services" class="img-fluid border-radius-6px" />
                        </div>

                        <!-- Text on Right -->
                        <div class="col-xl-5 col-lg-6 ps-6 xl-ps-3 md-ps-15px" 
                            data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <h2 class="alt-font text-dark-gray"><b>Ritesh Rohit</b></h2>
                            <h3 class="alt-font text-dark-gray">Founder and Head Dog Trainer at TrainLikeK9</h3>
                            <p class="mb-30px">
                            Ritesh Rohit is the Founder and Head Dog Trainer at TRAINLIKEK9, with over 10 years of hands-on experience in transforming dog behavior through structured, positive-reinforcement methods. Certified by WolfMasterK9 (Delhi), he specializes in obedience training, behavior correction, and working dog development. Based in Vadodara, Ritesh is trusted by hundreds of dog owners for his calm approach, deep expertise, and genuine care for every dog he trains.
                            </p> 
                        </div> 

                    </div> 
                </div>
            </section>
        <!-- end section -->




        <!-- start section --> 
        {{-- <section class="lg-pt-20px xs-pt-0">
            <div class="container">
                <div class="row align-items-center justify-content-center"> 

                    <!-- Text on Left -->
                    <div class="col-xl-5 col-lg-6 ps-6 xl-ps-3 md-ps-15px order-1 order-lg-0" 
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h3 class="alt-font text-dark-gray">From AapKa Dog to TRAINLIKK9 — A Decade of Trusted Canine Training</h3> 
                        <p class="mb-30px">
                            At <strong>TRAINLIKK9</strong>, we deliver structured and effective <strong>dog training programs</strong> tailored to all breeds and temperaments. From <strong>puppy socialization</strong> to <strong>obedience correction</strong> and <strong>working dog training</strong>, our services ensure behavioral improvement, better focus, and a stronger bond between you and your dog. Led by a <strong>certified dog trainer</strong> with over 10 years of experience, we use proven techniques rooted in positive reinforcement, structure, and real-world results.
                        </p> 
                    </div> 

                    <!-- Image on Right -->
                    <div class="col-xl-7 col-lg-6 md-mb-12 xs-mb-30px text-center order-0 order-lg-1" 
                        data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1500, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <img src="picture/d03.png" alt="Dog training services" class="img-fluid border-radius-6px" />
                    </div>

                </div> 
            </div>
        </section> --}}
        <!-- end section -->





        <!-- start section --> 
<section class="background-position-left-top position-relative" style="background-image: url('images/demo-charity-home-bg-01.jpg')">
    <div class="position-absolute left-0px top-minus-70px xl-top-minus-50px lg-top-minus-30px sm-top-minus-20px xs-top-minus-15px background-position-left-top w-100 h-100px lg-h-50px background-size-100 background-no-repeat" style="background-image: url('images/demo-charity-home-bg-02.jpg')"></div>
    <div class="container">
        <div class="row justify-content-center mb-5 sm-mb-30px">
            <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-10 text-center last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="alt-font text-dark-gray mb-10px">What we Offers</h3>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 mb-3 xs-mb-35px" data-anime='{ "el": "childs", "translateX": [-20, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            
            @php
                $services = [
                    ['img' => 'o4.png', 'title' => 'Basic to Advanced Obedience Training'],
                    ['img' => 'o3.png', 'title' => 'Puppy Training & Socialization Programs'],
                    ['img' => 'dog6.jpg', 'title' => 'Behavior Correction (leash pulling, barking, aggression, etc.)'],
                    ['img' => 'o7.png', 'title' => 'Scent Work & Protection Training'],
                    ['img' => 'dog7.jpg', 'title' => 'Board & Train Programs (stay with daily training)'],
                    ['img' => 'dog3.jpg', 'title' => 'Safe, Comfortable Boarding for Normal Stays'],
                    ['img' => 'dog8.jpg', 'title' => 'Group Training Sessions - Learn in a real-world environment'],
                    ['img' => 'dog1.jpg', 'title' => 'Puppy School – Structured early learning for young dogs and owners'],
                ];
            @endphp

            @foreach($services as $service)
            <div class="col text-center team-style-05 mb-40px">
                <div class="position-relative overflow-hidden border-radius-4px mb-25px last-paragraph-no-margin">
                    <img src="{{ asset('picture/' . $service['img']) }}" alt="{{ $service['title'] }}" style="width: 100%; height: 300px; object-fit: cover; border-radius: 6px;" />
                </div>
                <div class="fs-18 lh-22 fw-500 text-dark-gray">{{ $service['title'] }}</div>
            </div>
            @endforeach

        </div>
    </div>
</section>

        <!-- end section --> 


        <!-- start section -->
        <section class="lg-pt-20px xs-pt-0">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <!-- Text on Left -->
                    <div class="col-xl-5 col-lg-6 ps-6 xl-ps-3 md-ps-15px order-lg-1 order-1"
                        data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h3 class="alt-font text-dark-gray mb-25px">Why Choose US?</h3>
                        <ul class="ps-3 mb-30px list-style-icon list-style-check text-start">
                            <li class="mb-2"><strong>10+ years of proven experience</strong> since 2015</li>
                            <li class="mb-2"><strong>Certified by WolfMasterK9 – Delhi</strong></li>
                            <li class="mb-2"><strong>Specialized in working breeds</strong> and high-energy dogs</li>
                            <li class="mb-2"><strong>Balanced training methods</strong> based on real behavior science</li>
                            <li class="mb-2"><strong>Trusted by hundreds</strong> of dog owners for training and boarding</li>
                            <li class="mb-2"><strong>Clean, structured, and safe environment</strong> for all dogs</li>
                        </ul>
                    </div>

                    <!-- Image on Right -->
                    <div class="col-xl-7 col-lg-6 text-center order-lg-2 order-2"
                        data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1500, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <img src="picture/d01.png" alt="Why Choose Us - Dog Training" class="img-fluid border-radius-6px" style="max-width: 72%;" />
                    </div>
                </div>
            </div>
        </section>

@endsection
