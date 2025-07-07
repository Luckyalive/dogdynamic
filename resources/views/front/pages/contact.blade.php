@extends('front.layout.main-layout')

@section('content')

    <body data-mobile-nav-style="classic">
        <!-- start page title -->
        <section class="page-title-big-typography cover-background" style="background-image: url(picture/WhatsApp\ Image\ 2025-07-01\ at\ 17.28.31_0ba0e9ac.jpg)">
            <div class="container">
                <div class="row align-items-center small-screen">
                    <div class="col-10 col-sm-12 position-relative page-title-extra-large">
                        <h1 class="alt-font text-dark-gray mb-10px ls-minus-1px" data-fancy-text='{ "opacity": [0, 1], "translateY": [50, 0], "filter": ["blur(20px)", "blur(0px)"], "string": ["Contact us"], "duration": 500, "delay": 0, "speed": 50, "easing": "easeOutQuad" }'></h1>
                        <h2 class="mb-0 xs-w-85 text-dark-gray" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 200, "easing": "easeOutQuad" }'>Let’s Start Your Dog’s Transformation Today</h2>
                    </div>
                </div>
            </div>
        </section>
        <!-- end page title -->
        <!-- start section -->  
        <section class="position-relative z-index-1 pt-50px lg-pt-30px md-pt-0 pb-0">
            <div class="container">
                <div class="row justify-content-center"> 
                    <div class="col-lg-5 pb-5 sm-pb-50px" data-anime='{"el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'> 
                        <span class="fs-15 fw-600 ls-05px text-uppercase text-dark-golden-yellow d-block mb-10px">Keep in touch with us</span>
                        <h3 class="alt-font text-dark-gray">Looking for help? Ready to help!</h3>
                        <div class="mt-9 w-80 lg-w-100" data-anime='{"el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                            <div class="col icon-with-text-style-08 mb-25px">
                                <div class="feature-box feature-box-left-icon-middle border-bottom pb-25px border-color-extra-medium-gray">
                                    <div class="feature-box-icon me-20px">
                                        <i class="bi bi-telephone-outbound icon-medium text-dark-gray"></i> 
                                    </div>
                                    <div class="feature-box-content">
                                        {{-- <span>Feel free to get in touch?</span> --}}
                                        <span class="d-block fw-500 fs-19"><a href="tel:{{getWebsiteData()['primary_phone']}}" class="text-dark-gray text-dark-gray-hover">{{getWebsiteData()['primary_phone']}}</a></span>
                                        <span class="d-block fw-500 fs-19"><a href="tel:{{getWebsiteData()['secondary_phone']}}" class="text-dark-gray text-dark-gray-hover">{{getWebsiteData()['secondary_phone']}}</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col icon-with-text-style-08 mb-25px">
                                <div class="feature-box feature-box-left-icon-middle border-bottom pb-25px border-color-extra-medium-gray">
                                    <div class="feature-box-icon me-20px">
                                        <i class="bi bi-envelope icon-medium text-dark-gray"></i> 
                                    </div>
                                    <div class="feature-box-content">
                                        {{-- <span>How can we help you?</span> --}}
                                        <span class="d-block fw-500 fs-19"><a href="mailto:{{getWebsiteData()['primary_mail']}}" class="text-dark-gray text-dark-gray-hover">{{getWebsiteData()['primary_mail']}}</a></span>
                                        <span class="d-block fw-500 fs-19"><a href="mailto:{{getWebsiteData()['secondary_mail']}}" class="text-dark-gray text-dark-gray-hover">{{getWebsiteData()['secondary_mail']}}</a></span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col icon-with-text-style-08">
                                <div class="feature-box feature-box-left-icon-middle">
                                    <div class="feature-box-icon me-20px">
                                        <i class="bi bi-geo-alt icon-medium text-dark-gray"></i> 
                                    </div>
                                    <div class="feature-box-content"> 
                                        {{-- <span>Are you ready for volunteer?</span> --}}
                                        <span class="text-dark-gray d-block fw-500 fs-19">{{getWebsiteData()['address']}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 align-self-end contact-form-style-03" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'> 
                        <div class="bg-dark-gray box-shadow-double-large p-14 lg-p-10 border-radius-10px position-relative overflow-hidden">
                            <h3 class="alt-font text-white">Ready to Train the Right Way? Let's Talk</h3>
                            
                            <form onsubmit="sendToWhatsApp(event)" >
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-person icon-extra-medium"></i></span>
                                    <input class="ps-0 border-radius-0px fs-17 px-4 bg-white placeholder-medium-gray form-control required" type="text" id="name"  name="name" placeholder="Enter your name*">
                                </div>
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-envelope icon-extra-medium"></i></span>
                                    <input class="ps-0 border-radius-0px fs-17 px-4 bg-white placeholder-medium-gray form-control required" type="email" id="email" name="email" placeholder="Enter your email address*">
                                </div>
                                <div class="position-relative form-group mb-20px">
                                    <span class="form-icon"><i class="bi bi-phone icon-extra-medium"></i></span>
                                    <input class="ps-0 border-radius-0px fs-17 px-4 bg-white placeholder-medium-gray form-control required" type="number" id="phone"  name="phone" placeholder="Enter your phone number*">
                                </div>
                                <div class="position-relative form-group form-textarea mt-15px mb-12"> 
                                    <textarea class="ps-0 border-radius-0px fs-17 px-4 bg-white placeholder-medium-gray form-control" id="message" name="message" placeholder="Enter your message" rows="4"></textarea>
                                    <span class="form-icon"><i class="bi bi-chat-square-dots icon-extra-medium"></i></span>
                                    <input type="hidden" name="redirect" value="">
                                    <button class="btn btn-medium btn-white btn-box-shadow mt-30px fw-700" type="submit">Send on WhatsApp</button>
                                    <div class="form-results mt-20px d-none"></div>
                                </div>
                            </form>

    
                            <script>
                            function sendToWhatsApp(event) {
                            event.preventDefault();
                            const name = document.getElementById('name').value;
                            const phone = document.getElementById('phone').value;
                            const email = document.getElementById('email').value;
                            const message = document.getElementById('message').value;
                            
                            const text = `Hi, I am *${name}*. Please provide more info.\n\nHere are my details:\nName: ${name}\nPhone: ${phone}\nEmail: ${email}\nMessage: ${message}`;
                            
                            const encodedText = encodeURIComponent(text);

                            // Replace with your WhatsApp number
                            const whatsappNumber = "9316873400"; // use country code (e.g., +91 for India)

                            window.open(`https://wa.me/${whatsappNumber}?text=${encodedText}`, '_blank');
                            }
                        </script>


                        </div>
                    </div>
                </div> 
            </div>
        </section>
        <!-- end section --> 
        <!-- start section --> 
<section class="p-0">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-12"> 
                <div class="map" style="height: 500px;">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.8921825819507!2d73.2770276!3d22.319917!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fcf8e00c44c89%3A0x1fc0763e37c9c171!2sAapka%20Dog%20-%20Dog%20Training%20Academy!5e0!3m2!1sen!2sin!4v1751533219546!5m2!1sen!2sin" 
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection