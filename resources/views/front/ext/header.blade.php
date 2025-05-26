<header>
      <!-- header-area-start -->
      <div id="header-sticky" class="it-header-area z-index-5">
         <div class="it-header-top black-bg it-header-space-lr" 
         data-background="{{asset('frontend/img')}}/header/header-top-bg.png">
         
         <div class="container-fluid p-0">
               <div class="row g-0 align-items-center">
                  <div class="col-xl-8 col-lg-6 col-md-6 col-7">
                     <div class="it-header-top-info">
                        <ul>
                           <li class="d-none d-xl-inline-block">
                              <a href="tel:{{getWebsiteData()['primary_mail']}}">
                                 <i class="flaticon-phone-call"></i>
                                 {{getWebsiteData()['primary_phone']}}
                              </a>  
                           </li>
                           <li>
                              <a href="mailto:{{getWebsiteData()['primary_mail']}}">
                                 <i class="flaticon-mail"></i>
                                 {{getWebsiteData()['primary_mail']}}
                              </a>
                           </li>
                           <li class="d-none d-xl-inline-block">
                              <a target="_blank" href="https://maps.app.goo.gl/Pnq3CbC39oKuBDMj6">
                                 <i class="flaticon-location"></i>
                                 {{getWebsiteData()['address']}}
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-6 col-md-6 col-5">
                     <div class="it-header-top-right-wrap d-flex justify-content-end">
                        
                        <div class="it-header-top-right d-inline-flex">
                          
                        
                           <div class="it-header-top-social">
                              
                        
                        @if(isset(getSocialMedia()['facebook']))
                           <a href="{{getSocialMedia()['facebook']}}"><i class="fa-brands fa-facebook"></i></a>
                        @endif
                        
                        @if(isset(getSocialMedia()['twitter']))   
                        <a href="{{getSocialMedia()['twitter']}}"><i class="fa-brands flaticon-twitter-1"></i></a>
                        @endif
   
                        @if(isset(getSocialMedia()['instagram']))   
                        <a href="{{getSocialMedia()['instagram']}}"><i class="fa-brands fa-instagram"></i></a>
                         @endif
   
                        
                        @if(isset(getSocialMedia()['linkedin']))   
                        <a href="{{getSocialMedia()['linkedin']}}"><i class="fa-brands fa-linkedin"></i></a>
                        @endif
   
                        
                        @if(isset(getSocialMedia()['youtube']))   
                        <a href="{{getSocialMedia()['youtube']}}"><i class="fa-brands fa-youtube"></i></a>
                        @endif

                        
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="it-header-3-wrap p-relative">
            <div class="it-main-logo">
               
               @if(isset(getWebsiteData()['main_logo']))
                  <a href="{{route('index')}}">
                           <img class="d-lg-block blur-up lazyloaded"
                           src="{{asset('web/media/sm')}}/{{ getWebsiteData()['main_logo'] }}" alt="">
                  </a>
               @endif
            
               <div class="it-header-bar-wrap d-lg-none">
                  <button class="it-header-bar it-menu-bar"><i class="fa-sharp fa-regular fa-bars-staggered"></i>
                  </button>
               </div>
               
            </div>
            <div class="it-header-pl">
               <div class="it-header-bottom it-header-space-lr it-header-mob-space">
                  <div class="container-fluid">
                     <div class="row align-items-center">
                        <div class="col-xxl-12 col-xl-12 d-none d-lg-block">
                           <div class="it-main-menu" >
                              <nav class="it-menu-content">
                                 <ul>
                                    <li><a href="{{route('index')}}">Home</a></li>
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    
                                    <li class="has-dropdown">
                                       <a href="{{route('products')}}">Products</a>
                                       <!-- <ul class="it-submenu submenu"> -->
                                    </li>


                                    {{-- <li class="has-dropdown">
                                       <a href="{{route('services')}}">services</a>
                                       <ul class="it-submenu submenu">

                                    </li> --}}

                                    

                                    {{-- <li><a href="{{route('gallery')}}">Gallery</a></li> --}}
                                   
                                    <li>
                                       <a href="{{route('blog')}}">Blog</a>
                                    </li>

                                    <li><a href="{{route('contact')}}">Contact us</a></li>
                                    
                                    <li class='ml-4'> 
                                       <button data-bs-toggle="modal" data-bs-target="#contact-form2" class="btn-inquire-now2">Inquire Now</button>   
                                    </li>
                                 </ul>
                              
                              </nav>
                           </div>
                           
                        </div>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- header-area-end -->

</header>
