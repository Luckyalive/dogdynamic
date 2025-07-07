@extends('front.layout.main-layout')

@section('content')


<section class="top-space-padding position-relative cover-background background-position-center-bottom  round-cursor" style="background-image: url('picture/bg1005.jpg')"> 
            <div class="container">
                <div class="row align-items-center position-relative">
                    <div class="col-11 col-lg-6 col-sm-7 mt-14 mb-14 sm-mt-10 sm-mb-10" data-anime='{ "el": "childs", "translateX": [30, 1], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>  
                        <div class="vertical-title-center align-items-center position-absolute left-minus-80px xl-left-minus-60px lg-left-minus-20px top-0px d-none d-xl-flex">
                            <!-- <div class="title fs-15 text-dark-golden-yellow fw-700 text-uppercase ls-3px border-start border-color-dark-golden-yellow lh-10 pt-45px pb-45px">Help the poor children</div> -->
                        </div> 
                        <div class="alt-font fs-95 lh-85 lg-fs-80 xs-fs-70 xs-lh-65 lg-lh-70 mb-30px text-dark-gray ls-minus-3px ws-minus-10px">Train the Right Way-The TRAINLIKK9 Way</div> 
                        <div class="fs-19 lh-30 w-65 lg-w-80 md-w-90 sm-w-100 mb-30px">Customized Dog Training Programs in Vadodara for All Breeds & Behaviors</div>
                        <a href="{{route('services')}}" class="btn btn-large btn-round-edge with-rounded btn-gradient-green-goldenrod-yellow btn-box-shadow">Explore More<span class="bg-white"><i class="fa-solid fa-arrow-right text-dark-golden-yellow"></i></span></a>
                    </div>
                </div> 
            </div>
        </section>
        <!-- end banner --> 
        <!-- start section -->
        <section class="lg-pt-20px xs-pt-0">
        <div class="container">
               <div class="row align-items-center justify-content-center">
                  <!-- Text on Left -->
            <div class="col-xl-5 col-lg-6 ps-0 order-lg-1 order-1" 
               data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
               <h3 class="alt-font text-dark-gray">About Us</h3>
               <p class="mb-30px">
                  At <strong>TRAINLIKK9</strong>, we are passionate dog trainers dedicated to transforming the way dogs and their owners connect. Founded in 2015 as AapKa Dog and rebranded in 2025, TRAINLIKK9 is led by certified trainer <strong>Ritesh Rohit</strong>, who brings over a decade of hands-on experience working with dogs of all breeds and temperaments. From playful puppies to high-drive working dogs, we specialize in building calm, confident, and obedient companions through structured, balanced, and science-based training methods. Our mission is simple: to help you understand your dog better and lead with confidence.
               </p>
            </div>


                <!-- Image on Right -->
                <div class="col-xl-7 col-lg-6 text-center order-lg-2 order-2" 
                    data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1500, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
                    <img src="picture/d01.png" alt="" class="img-fluid border-radius-6px" />
                </div>
            </div>
        </div>
        </section>

            

        <!-- end section -->

        <!-- start section -->
        <section class="background-position-left-top position-relative"style="background-image: url('{{ asset('images/demo-charity-home-bg-05.jpg') }}')">
            <div class="position-absolute left-0px top-minus-50px lg-top-minus-25px sm-top-minus-20px xs-top-minus-15px background-position-left-top w-100 h-100px lg-h-60px md-h-50px background-size-100 background-no-repeat" style="background-image: url('{{asset('images/demo-charity-home-bg-03.jpg')}}')"></div>
            <div class="position-absolute left-0px bottom-minus-50px lg-bottom-minus-50px md-bottom-minus-60px sm-bottom-minus-40px background-position-left-top w-100 h-100px lg-h-70px sm-h-50px background-size-100 background-no-repeat" style="background-image: url('{{asset('images/demo-charity-home-bg-04.jpg')}}')"></div>
            <div class="container">
                <div class="row justify-content-center mb-5 sm-mb-30px">
                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-10 text-center last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h3 class="alt-font text-white mb-0">How We Works</h3>
                    </div>
                </div> 
                <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 mb-4 ms-2 me-2 sm-mb-40px" data-anime='{ "el": "childs", "translateY": [0, 0], "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
                    <!-- start process step item -->
                    <div class="col text-center last-paragraph-no-margin hover-box process-step-style-09 md-mb-50px">
                        <div class="process-step-icon-box position-relative mb-25px"> 
                            <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-90px w-90px fs-28 bg-base-color text-dark-gray alt-font">
                                {{-- <span class="number position-relative z-index-1">01</span> --}}
                                <img src="{{ asset('picture/icon1.jpg') }}" alt="i 1" class="position-relative z-index-1 rounded-circle w-90px h-90px object-fit-cover">
                                <div class="box-overlay bg-white rounded-circle"></div>
                            </div>
                            <span class="progress-right-icon d-none d-sm-inline-block">
                                <i class="feather icon-feather-chevron-right icon-very-medium text-base-color d-flex"></i>
                            </span>
                        </div>
                        <span class="d-inline-block fw-500 text-white fs-18">Tailored Training Plans</span>
                        <p class="w-75 lg-w-100 sm-w-90 d-inline-block text-white opacity-4">Custom programs based on your dog’s needs and behavior.</p>
                    </div>
                    <!-- end process step item --> 
                    <!-- start process step item -->
                    <div class="col text-center last-paragraph-no-margin hover-box process-step-style-09 md-mb-50px">
                        <div class="process-step-icon-box position-relative mb-25px"> 
                            <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-90px w-90px fs-28 bg-base-color text-dark-gray alt-font">
                                <img src="{{ asset('picture/icone3.jpg') }}" alt="i 2" class="position-relative z-index-1 rounded-circle w-90px h-90px object-fit-cover">
                                
                                {{-- <span class="number position-relative z-index-1">02</span> --}}
                                <div class="box-overlay bg-white rounded-circle"></div>
                            </div>
                            <span class="progress-right-icon d-none d-lg-inline-block">
                                <i class="feather icon-feather-chevron-right icon-very-medium text-base-color d-flex"></i>
                            </span>
                        </div>
                        <span class="d-inline-block fw-500 text-white fs-18">Balanced Real-World Methods</span>
                        <p class="w-75 lg-w-100 sm-w-90 d-inline-block text-white opacity-4">Proven techniques blending structure, rewards, and corrections.</p>
                    </div>
                    <!-- end process step item --> 
                    <!-- start process step item -->
                    <div class="col text-center last-paragraph-no-margin hover-box process-step-style-09 xs-mb-50px">
                        <div class="process-step-icon-box position-relative mb-25px"> 
                            <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-90px w-90px fs-28 bg-base-color text-dark-gray alt-font">
                                <img src="{{ asset('picture/icon2.jpg') }}" alt="i 3" class="position-relative z-index-1 rounded-circle w-90px h-90px object-fit-cover">
                                
                                {{-- <span class="number position-relative z-index-1">03</span> --}}
                                <div class="box-overlay bg-white rounded-circle"></div>
                            </div>
                            <span class="progress-right-icon d-none d-sm-inline-block">
                                <i class="feather icon-feather-chevron-right icon-very-medium text-base-color d-flex"></i>
                            </span>
                        </div>
                        <span class="d-inline-block fw-500 text-white fs-18">Owner Involvement</span>
                        <p class="w-75 lg-w-100 sm-w-90 d-inline-block text-white opacity-4">Hands-on guidance to help owners lead with confidence.</p>
                    </div>
                    <!-- end process step item --> 
                    <!-- start process step item -->
                    <div class="col text-center last-paragraph-no-margin hover-box process-step-style-09">
                        <div class="process-step-icon-box position-relative mb-25px"> 
                            <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-90px w-90px fs-28 bg-base-color text-dark-gray alt-font">
                                <img src="{{ asset('picture/icon4.jpg') }}" alt="i 4" class="position-relative z-index-1 rounded-circle w-90px h-90px object-fit-cover">
                                
                                {{-- <span class="number position-relative z-index-1">04</span> --}}
                                <div class="box-overlay bg-white rounded-circle"></div>
                            </div> 
                        </div>
                        <span class="d-inline-block fw-500 text-white fs-18">Board & Train Facility</span>
                        <p class="w-75 lg-w-100 sm-w-90 d-inline-block text-white opacity-4">Safe, on-site programs with daily professional training.</p>
                    </div>
                    <!-- end process step item --> 
                </div>
                {{-- <div class="row">
                    <div class="col-12 text-center">
                        <div class="fs-15 text-uppercase text-base-color fw-600">Fight for right cause for save the world. <a href="#" class="text-decoration-line-bottom text-base-color text-white-hover">Donate now</a></div>
                    </div>
                </div> --}}
            </div>
        </section>
        <!-- end section -->




         <section lass="mb-100px">
                <div class="row justify-content-center mb-5 sm-mb-30px">
                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-10 text-center last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h3 class="alt-font text-dark-gray mb-10px">Obedience Training</h3>
                        <p class="w-60 md-w-70 mx-auto sm-w-80 xs-w-100">Helping dogs become well-behaved, responsive, and confident companions through structured training programs.</p>
                    </div>
                </div> 

                <div class="container"> 
                    <div class="row mb-4">
                        <div class="col-12 position-relative" data-anime='{ "el": "childs", "translateX": [150, 0], "opacity": [0,1], "duration": 1500, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <div class="outside-box-right-35 sm-outside-box-right-0">
                                <div class="swiper" data-slider-options='{
                                    "slidesPerView": 1,
                                    "spaceBetween": 30,
                                    "loop": true,
                                    "autoplay": { 
                                        "delay": 3000,
                                        "disableOnInteraction": false 
                                    },
                                    "pagination": {
                                        "el": ".slider-three-slide-pagination",
                                        "clickable": true,
                                        "dynamicBullets": false
                                    },
                                    "keyboard": {
                                        "enabled": true,
                                        "onlyInViewport": true
                                    },
                                    "breakpoints": {
                                        "1200": { "slidesPerView": 3 },
                                        "992": { "slidesPerView": 2 },
                                        "768": { "slidesPerView": 2 },
                                        "320": { "slidesPerView": 1 }
                                    },
                                    "effect": "slide"
                                }'>
                                    <div class="swiper-wrapper pt-20px pb-20px">
                                        <!-- start slider item --> 
                                        <div class="swiper-slide blog-side-image img-fluid"> 
                                            <div class="blog-box d-sm-flex d-block flex-row h-100 border-radius-6px overflow-hidden box-shadow-extra-large">
                                                <div class="blog-image w-50 xs-w-100 cover-background" style="background-image: url('picture/d01.png')">
                                                    <!-- <a href="service-details.html" class="blog-post-image-overlay"></a> -->
                                                </div>
                                                <div class="blog-content w-50 xs-w-100 pt-50px pb-40px ps-40px pe-40px xl-p-20px md-p-20px bg-white d-flex flex-column justify-content-center align-items-start last-paragraph-no-margin">
                                                    <a  class="card-title text-dark-gray text-dark-gray-hover fw-500 mb-10px fs-19 md-fs-18 alt-font ws-minus-3px">Pet Dog Training</a>
                                                    <p>Focuses on building manners, social behavior, and responding to everyday commands like sit, stay, and come.</p> 
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Add other slides below this -->
                                    

                                        <!-- start slider item --> 
                                                    <div class="swiper-slide blog-side-image"> 
                                                        <!-- start blog item -->
                                                        <div class="blog-box d-sm-flex d-block flex-row h-100 border-radius-6px overflow-hidden box-shadow-extra-large">
                                                            <div class="blog-image w-50 xs-w-100 cover-background" style="background-image: url('picture/dog1.jpg')">
                                                                <!-- <a href="service-details.html" class="blog-post-image-overlay"></a> -->
                                                            </div>
                                                            <div class="blog-content w-50 xs-w-100 pt-50px pb-40px ps-40px pe-40px xl-p-20px md-p-20px bg-white d-flex flex-column justify-content-center align-items-start last-paragraph-no-margin">
                                                                <!-- <a href="blog.html" class="btn btn-very-small btn-rounded btn-gradient-green-goldenrod-yellow ls-0px mb-65px xs-mb-40px"></a> -->
                                                                <a  class="card-title text-dark-gray text-dark-gray-hover fw-500 mb-10px fs-19 md-fs-18 alt-font ws-minus-3px">Puppy Training</a>
                                                                <p>Early-stage behavior shaping—covering housebreaking, leash walking, biting control, and socialization.</p> 
                                                            </div>
                                                        </div>
                                                        <!-- end blog item --> 
                                                    </div>
                                                    <!-- end slider item --> 
                                                    <!-- start slider item --> 
                                                    <div class="swiper-slide blog-side-image"> 
                                                        <!-- start blog item -->
                                                        <div class="blog-box d-sm-flex d-block flex-row h-100 border-radius-6px overflow-hidden box-shadow-extra-large">
                                                            <div class="blog-image w-50 xs-w-100 cover-background" style="background-image: url('picture/dog2.jpg')">
                                                                <!-- <a href="service-details.html" class="blog-post-image-overlay"></a> -->
                                                            </div>
                                                            <div class="blog-content w-50 xs-w-100 pt-50px pb-40px ps-40px pe-40px xl-p-20px md-p-20px bg-white d-flex flex-column justify-content-center align-items-start last-paragraph-no-margin">
                                                                <!-- <a href="blog.html" class="btn btn-very-small btn-rounded btn-gradient-green-goldenrod-yellow ls-0px mb-65px xs-mb-40px">Environment</a> -->
                                                                <a  class="card-title text-dark-gray text-dark-gray-hover fw-500 mb-10px fs-19 md-fs-18 alt-font ws-minus-3px">Adult Training</a>
                                                                <p>For older dogs needing structure, behavior correction, or reinforcement of basic skills.</p> 
                                                            </div>
                                                        </div>
                                                        <!-- end blog item --> 
                                                    </div>
                                                    <!-- end slider item --> 
                                                    <!-- start slider item --> 
                                                    <div class="swiper-slide blog-side-image"> 
                                                        <!-- start blog item -->
                                                        <div class="blog-box d-sm-flex d-block flex-row h-100 border-radius-6px overflow-hidden box-shadow-extra-large">
                                                            <div class="blog-image w-50 xs-w-100 cover-background" style="background-image: url('picture/dog4.webp')">
                                                                <a  class="blog-post-image-overlay"></a>
                                                            </div>
                                                            <div class="blog-content w-50 xs-w-100 pt-50px pb-40px ps-40px pe-40px xl-p-20px md-p-20px bg-white d-flex flex-column justify-content-center align-items-start last-paragraph-no-margin">
                                                                <!-- <a href="blog.html" class="btn btn-very-small btn-rounded btn-gradient-green-goldenrod-yellow ls-0px mb-65px xs-mb-40px">Education</a> -->
                                                                <a  class="card-title text-dark-gray text-dark-gray-hover fw-500 mb-10px fs-19 md-fs-18 alt-font ws-minus-3px">Working Dog Training</a>
                                                                <p>Builds focus, stamina, and response for roles like police, guard, or assistance dogs..</p> 
                                                            </div>
                                                        </div>
                                                        <!-- end blog item --> 
                                                    </div>
                                                    <!-- end slider item --> 
                                                    <!-- start slider item --> 
                                                    <div class="swiper-slide blog-side-image"> 
                                                        <!-- start blog item -->
                                                        <div class="blog-box d-sm-flex d-block flex-row h-100 border-radius-6px overflow-hidden box-shadow-extra-large">
                                                            <div class="blog-image w-50 xs-w-100 cover-background" style="background-image: url('picture/dog6.jpg')">
                                                                <a  class="blog-post-image-overlay"></a>
                                                            </div>
                                                            <div class="blog-content w-50 xs-w-100 pt-50px pb-40px ps-40px pe-40px xl-p-20px md-p-20px bg-white d-flex flex-column justify-content-center align-items-start last-paragraph-no-margin">
                                                                <!-- <a href="blog.html" class="btn btn-very-small btn-rounded btn-gradient-green-goldenrod-yellow ls-0px mb-65px xs-mb-40px">Education</a> -->
                                                                <a  class="card-title text-dark-gray text-dark-gray-hover fw-500 mb-10px fs-19 md-fs-18 alt-font ws-minus-3px">Protection Work Training</a>
                                                                <p>Teaches controlled aggression, guarding techniques, and responding to threats on command.</p> 
                                                            </div>
                                                        </div>
                                                        <!-- end blog item --> 
                                                    </div>
                                                    <!-- end slider item --> 
                                                    <!-- start slider item --> 
                                                    <div class="swiper-slide blog-side-image"> 
                                                        <!-- start blog item -->
                                                        <div class="blog-box d-sm-flex d-block flex-row h-100 border-radius-6px overflow-hidden box-shadow-extra-large">
                                                            <div class="blog-image w-50 xs-w-100 cover-background" style="background-image: url('picture/dog7.jpg')">
                                                                <a  class="blog-post-image-overlay"></a>
                                                            </div>
                                                            <div class="blog-content w-50 xs-w-100 pt-50px pb-40px ps-40px pe-40px xl-p-20px md-p-20px bg-white d-flex flex-column justify-content-center align-items-start last-paragraph-no-margin">
                                                                <!-- <a href="blog.html" class="btn btn-very-small btn-rounded btn-gradient-green-goldenrod-yellow ls-0px mb-65px xs-mb-40px">Health</a> -->
                                                                <a  class="card-title text-dark-gray text-dark-gray-hover fw-500 mb-10px fs-19 md-fs-18 alt-font ws-minus-3px">Service Work Training</a>
                                                                <p>Trains dogs to assist people with disabilities — including mobility support, alerting, or emotional assistance.</p> 
                                                            </div>
                                                        </div>
                                                        <!-- end blog item --> 
                                                    </div>
                                                    <!-- end slider item --> 


                                                    <!-- start slider item --> 
                                                    <div class="swiper-slide blog-side-image"> 
                                                        <!-- start blog item -->
                                                        <div class="blog-box d-sm-flex d-block flex-row h-100 border-radius-6px overflow-hidden box-shadow-extra-large">
                                                            <div class="blog-image w-50 xs-w-100 cover-background" style="background-image: url('picture/dog8.jpg')">
                                                                <a  class="blog-post-image-overlay"></a>
                                                            </div>
                                                            <div class="blog-content w-50 xs-w-100 pt-50px pb-40px ps-40px pe-40px xl-p-20px md-p-20px bg-white d-flex flex-column justify-content-center align-items-start last-paragraph-no-margin">
                                                                <!-- <a href="blog.html" class="btn btn-very-small btn-rounded btn-gradient-green-goldenrod-yellow ls-0px mb-65px xs-mb-40px">Health</a> -->
                                                                <a  class="card-title text-dark-gray text-dark-gray-hover fw-500 mb-10px fs-19 md-fs-18 alt-font ws-minus-3px">Show Dog Training</a>
                                                                <p>Prepares dogs for the competitive ring — includes gaiting, posing, discipline, and handling practice.</p> 
                                                            </div>
                                                        </div>
                                                        <!-- end blog item --> 
                                                    </div>
                                                    <!-- end slider item --> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


         </section>

        <!-- start section -->
        <section class="position-relative overlap-height">
            {{-- <div class="container overlap-gap-section">
                <div class="row justify-content-center mb-5 sm-mb-30px">
                    <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-10 text-center last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                        <h3 class="alt-font text-dark-gray mb-10px">Achievements</h3>
                        <p class="w-60 md-w-70 mx-auto sm-w-80 xs-w-100">Received many awards in recognition of our work towards enabling better futures.</p>
                    </div>
                </div> 
                <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center align-items-center mb-5 sm-mb-30px" data-anime='{ "el": "childs", "perspective": [1200,1200], "scale": [1.1, 1], "rotateX": [50, 0], "opacity": [0,1], "duration": 600, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="col md-mb-30px">
                        <div class="border border-color-extra-medium-gray border-radius-6px text-center box-shadow-quadruple-large">
                            <div class="pt-10 pb-10">
                                <img src="https://placehold.co/225x80" class="h-80px" alt="">
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-15px ps-10px pe-10px last-paragraph-no-margin">
                                <p>Social media brand of the year</p>
                            </div>
                        </div>
                    </div> 
                    <div class="col md-mb-30px">
                        <div class="border border-color-extra-medium-gray border-radius-6px text-center box-shadow-quadruple-large">
                            <div class="pt-10 pb-10">
                                <img src="https://placehold.co/225x80" class="h-80px" alt="">
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-15px ps-10px pe-10px last-paragraph-no-margin">
                                <p>Best campaign in communication</p>
                            </div>
                        </div>
                    </div> 
                    <div class="col">
                        <div class="border border-color-extra-medium-gray border-radius-6px text-center box-shadow-quadruple-large">
                            <div class="pt-10 pb-10">
                                <img src="https://placehold.co/225x80" class="h-80px" alt="">
                            </div>
                            <div class="border-top border-color-extra-medium-gray pt-15px pb-15px ps-10px pe-10px last-paragraph-no-margin">
                                <p>Worlds most trusted organization</p>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 text-center last-paragraph-no-margin">
                        <div class="d-inline-block align-middle bg-dark-gray fw-700 text-white text-uppercase border-radius-4px ps-15px pe-15px fs-11 me-10px md-m-5px ls-05px">Recognition</div>
                        <div class="d-inline-block align-middle fs-14 lh-normal text-uppercase text-dark-gray fw-600">We are thankful for their faith in our services by giving us such an honour.</div>
                    </div>
                </div>
            </div> --}}
        </section>
        <!-- end section -->
        <!-- start section -->
        <section class="background-position-left-top position-relative" style="background-image: url('{{asset('images/demo-charity-home-bg-01.jpg')}}')">
            <div class="position-absolute left-0px top-minus-50px md-top-minus-40px sm-top-minus-30px xs-top-minus-15px background-position-left-top w-100 h-100px xs-h-50px background-size-100 background-no-repeat" style="background-image: url('{{asset('images/demo-charity-home-bg-02.jpg')}}')"></div>
            <div class="container">
                <div class="row g-0 border-radius-4px mb-7 overflow-hidden overlap-section sm-mb-60px xs-mb-40px">
                    <div class="col-lg-6 col-md-7 p-8 lg-p-4 sm-p-25px background-position-left-top position-relative text-center text-md-start" style="background-image: url('{{asset('images/demo-charity-home-bg-06.jpg')}}')">
                        <div class="position-absolute right-minus-100px top-0px cover-background w-100px h-100 z-index-9 d-none d-md-block" style="background-image: url('{{asset('images/demo-charity-home-bg-07.png')}}')"></div>
                        <h3 class="alt-font text-dark-gray w-95 xl-w-100 mb-20px">Join TRAINLIKK9 Today</h3>
                        <p class="text-dark-gray opacity-8 w-95 lg-w-100 mb-30px md-mb-25px">Empower your dog with expert training, care, and confidence-building—led by professionals who understand every paw.</p>
                        <a href="contact.html" class="btn btn-large btn-round-edge with-rounded btn-gradient-green-goldenrod-yellow">Enroll<span class="bg-white"><i class="fa-solid fa-arrow-right text-dark-golden-yellow"></i></span></a>
                    </div>
                    <div class="col-lg-6 col-md-5 cover-background position-relative sm-h-350px" style="background-image: url(picture/dog6.jpg)"> 
                        <!-- <div class="blur-box bg-white-transparent ps-30px pe-30px pt-25px pb-25px border-radius-4px d-inline-block position-absolute right-50px bottom-50px sm-right-20px sm-bottom-25px animation-float text-center">
                            <h1 class="mb-0 text-dark-gray fw-400 alt-font">2K</h1>
                            <span class="fs-14 fw-700 text-uppercase text-dark-gray">Volunteers</span>
                        </div> -->
                    </div>
                </div>
            </div>




        </section>


        {{-- testimonial --}}
<section class="mb-100px">
    <div class="row justify-content-center mb-5 sm-mb-30px">
        <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 col-sm-10 text-center last-paragraph-no-margin"
            data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <h3 class="alt-font text-dark-gray mb-10px">Testimonials</h3>
            {{-- <p class="w-70 sm-w-100 mx-auto">Stories of transformation from our happy clients.</p> --}}
        </div>
    </div>

    <div class="container">
        <div class="row mb-4">
            <div class="col-12 position-relative"
                data-anime='{ "el": "childs", "translateX": [150, 0], "opacity": [0,1], "duration": 1500, "delay": 100, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <div class="outside-box-right-35 sm-outside-box-right-0">
                    <div class="swiper" data-slider-options='{
                        "slidesPerView": 1,
                        "spaceBetween": 30,
                        "loop": true,
                        "autoplay": {
                            "delay": 3000,
                            "disableOnInteraction": false
                        },
                        "pagination": {
                            "el": ".slider-three-slide-pagination",
                            "clickable": true,
                            "dynamicBullets": false
                        },
                        "keyboard": {
                            "enabled": true,
                            "onlyInViewport": true
                        },
                        "breakpoints": {
                            "1200": { "slidesPerView": 3 },
                            "992": { "slidesPerView": 2 },
                            "768": { "slidesPerView": 2 },
                            "320": { "slidesPerView": 1 }
                        },
                        "effect": "slide"
                    }'>
                        <div class="swiper-wrapper pt-20px pb-20px">
                            @php
                                $testimonials = getTestimonials();
                            @endphp
                            
                            @foreach ($testimonials as $testimonial)
                                <div class="swiper-slide blog-side-image">
                                    <div
                                        class="blog-box d-sm-flex d-block flex-row h-100 border-radius-6px overflow-hidden box-shadow-extra-large">
                                        <!-- Image Side -->
                                        <div class="blog-image w-50 xs-w-100 cover-background"
                                            style="background-image: url('{{ asset('web/media/sm/' . $testimonial->image) }}')">
                                            <a href="#" class="blog-post-image-overlay"></a>
                                        </div>

                                        <!-- Content Side -->
                                        <div
                                            class="blog-content w-50 xs-w-100 pt-50px pb-40px ps-40px pe-40px xl-p-20px md-p-20px bg-white d-flex flex-column justify-content-start align-items-start last-paragraph-no-margin"
                                            style="height: 300px;">
                                            <span
                                                class="btn btn-very-small btn-rounded btn-gradient-green-goldenrod-yellow ls-0px mb-20px fs-13">
                                                {{ $testimonial->title }}
                                            </span>
                                            <h5
                                                class="card-title text-dark-gray fw-500 mb-10px fs-16 md-fs-15 alt-font ws-minus-1px">
                                                {{ $testimonial->name }}
                                            </h5>
                                            <div
                                                style="overflow-y: auto; max-height: 150px; font-size: 14px; line-height: 1.5;">
                                                {{ $testimonial->description }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Optional pagination dots (can add below if needed) -->
                        {{-- <div class="slider-three-slide-pagination swiper-pagination"></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


        @endsection