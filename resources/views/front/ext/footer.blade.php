
        <footer class="cover-background background-position-center-top pb-0" style="background-image: url('picture/bg700.jpg')">
            <div class="border-bottom border-color-transparent-white-light pb-3 lg-pb-5 sm-pb-45px">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col text-center">
                            <h4 class="mb-0 text-white alt-font fw-400">Your dog deserves expert care and proven results.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center pt-5 pb-5 md-pt-45px md-pb-50px text-center text-sm-start">
                    <!-- start footer column -->
                    <div class="col-lg-3 col-md-12 col-sm-6 d-flex flex-column flex-md-row flex-lg-column align-items-md-center align-items-lg-start last-paragraph-no-margin md-mb-35px">
                        {{-- <a href="home.html" class=" d-inline-block xs-mb-15px"><img src="picture/trainlikek9-logo.png" data-at2x="picture/trainlikek9-logo.png" alt=""></a> --}}
                               <div class="it-footer-logo mb-25">
                        @if(isset(getWebsiteData()['light_logo']))
                           <a href="{{route('index')}}">
                              <img src="{{asset('web/media/sm')}}/{{getWebsiteData()['light_logo']}}" alt="{{getWebsiteData()['name']}}">
                           </a>
                        @endif
                     </div>              
                        <!-- <div class="mt-auto ms-md-auto ms-lg-0 ms-0">
                            <span class="fs-14 text-uppercase text-white fw-500 ls-1px">Rising money</span>
                            <h5 class="alt-font fw-400 text-base-color mb-0">$90,320</h5>
                        </div> -->
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-lg-3 col-md-4 col-sm-6 sm-mb-35px">
                        <span class="d-block text-white mb-5px fs-14 text-uppercase fw-500 ls-1px">Get in touch</span>
                        <p class="w-70 text-dark-gray mb-10px xl-w-80 lg-w-100">{{getWebsiteData()['address']}}</p>
                        <div class="text-white"><i class="feather icon-feather-phone-call fs-16 me-10px text-base-color"></i><a href="tel:{{getWebsiteData()['primary_phone']}}">{{getWebsiteData()['primary_phone']}}</a>
                            <i class="feather fs-16 me-10px text-base-color"></i><a href="tel:{{getWebsiteData()['secondary_phone']}}">{{getWebsiteData()['secondary_phone']}}</a></div>

                        <div><i class="feather icon-feather-mail fs-16 me-10px text-base-color"></i><a href="mailto:{{getWebsiteData()['primary_mail']}}" class="text-white text-decoration-line-bottom">{{getWebsiteData()['primary_mail']}}</a>
                            <i class="feather  fs-16 me-10px text-base-color"></i><a href="mailto:{{getWebsiteData()['secondary_mail']}}" class="text-white text-decoration-line-bottom">{{getWebsiteData()['secondary_mail']}}</a></div>

                    </div>
                    <!-- end footer column --> 
                    <!-- start footer column -->
                    <div class="col-xxl-4 col-lg-3 col-md-4 col-sm-6 last-paragraph-no-margin xs-mb-35px">
                        <span class="d-block text-white mb-5px fs-14 text-uppercase fw-500 ls-1px">About TRAINLIKK9</span>
                        <p class="w-70 text-dark-gray xl-w-100">{{getWebsiteData()['description']}}</p> 
                    </div>
                    <!-- end footer column -->
                    <!-- start footer column -->
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6 last-paragraph-no-margin">
                        <span class="d-block text-white mb-15px fs-14 text-uppercase fw-500 ls-1px">Social connect</span>
                        <div class="elements-social social-icon-style-09">
                            <ul class="medium-icon light">
                                <li><a class="facebook" href= "{{getSocialMedia()['facebook']}}" target="_blank"><i class="fa-brands fa-facebook-f"></i><span></span></a></li>
                                <li><a class="instagram" href="{{getSocialMedia()['instagram']}}" target="_blank"><i class="fa-brands fa-instagram"></i><span></span></a></li>
                                <li><a class="twitter" href="{{getSocialMedia()['linkedin']}}" target="_blank"><i class="fa-brands fa-linkedin-in"></i><span></span></a></li>  
                            </ul>
                        </div>
                    </div>
                    <!-- end footer column -->
                </div>
            </div>
<div class="pt-15px pb-15px bg-racing-green">
    <div class="container">
        <div class="row align-items-center"> 

            <!-- Navigation -->
            <div class="col-lg-7 text-center text-lg-start md-mb-5px"> 
                <ul class="footer-navbar"> 
                    <li class="nav-item"><a href="{{ route('index') }}" class="nav-link text-dark">Home</a></li>
                    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link text-dark">About</a></li>
                    <li class="nav-item"><a href="{{ route('services') }}" class="nav-link text-dark">Services</a></li>
                    <li class="nav-item"><a href="{{ route('gallery') }}" class="nav-link text-dark">Gallery</a></li>
                    <li class="nav-item"><a href="{{ route('blog') }}" class="nav-link text-dark">Blog</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link text-dark">Contact</a></li>
                </ul>
            </div> 

            <!-- Copyright -->
            <div class="col-lg-5 text-center text-lg-end">
                <span class="fs-15 text-dark">
                    &copy; 2025 Crafto is Proudly Powered by 
                    <a href="https://www.alivecreate.com/" target="_blank" class="text-decoration-line-bottom text-dark"><strong>Alive Create</strong></a>
                </span>
            </div> 

        </div>
    </div>
</div>

        </footer>



        <a href="https://wa.me/917477264469?text=Hi%2C%20I%E2%80%99m%20interested%20in%20learning%20more%20about%20your%20dog%20training%20services.%20Please%20share%20details%20about%20the%20programs%2C%20pricing%2C%20and%20how%20I%20can%20enroll%20my%20dog.%20Thank%20you!" target="_blank" class="whatsapp-float">
            <i class="fab fa-whatsapp"></i>
        </a>


        <a href="tel:+9510256344" class="float-btn call">
            <i class="fas fa-phone-alt"></i>
        </a>
          
          <style>
            .float-btn {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 20px;
            z-index: 1000;
            border-radius: 50%;
            text-align: center;
            font-size: 22px;
            color: white;
            line-height: 50px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            transition: 0.3s;
            }


            .whatsapp-float {
                position: fixed;
                bottom: 54px;
                right: 20px;
                color: white;
                background-color: #10a347;
                border-radius: 50%;
                padding: 15px;
                font-size: 24px;
                z-index: 1000;
                box-shadow: 0 4px 10px rgba(0,0,0,0.2);
                text-align: center;
                height: 50px;
                width: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
          .whatsapp-float:hover {
            background-color: #0e7636;
            color: white;
          }

          .call {
            bottom: 120px;
            right: 20px;
            background-color: #0a66c2;
            }

          .call:hover {
            bottom: 120px;
            right: 20px;
            background-color: #0c5299;
            color: white;
            }
          </style>
        