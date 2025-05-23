<header class="header-height">
      <!-- header-area-start -->
      <div id="header-sticky" class="it-header-area z-index-5">
         <div class="it-main-logo">
         @if(isset(getWebsiteData()['main_logo']))
            <a href="{{route('admin.index')}}">
                     <img class="d-none d-lg-block blur-up lazyloaded"
                     src="{{asset('web/media/sm')}}/{{ getWebsiteData()['main_logo'] }}" alt="">
            </a>
            @endif
            
         </div>
         <div class="it-header-pl">
            <div class="it-header-top black-bg it-header-space-lr"
               data-background="{{asset('frontend/img')}}/header/header-top-bg.png">
               <div class="container-fluid">
                  <div class="row align-items-center">
                     <div class="col-xl-8 col-lg-6 col-md-6">
                        <div class="it-header-top-info">
                           <ul>
                              <li class="d-none d-xl-inline-block">
                                 <a href="tel:(00)8757845682">
                                    <i class="flaticon-phone-call"></i>
                                    (00) 875 784 5682
                                 </a>
                              </li>
                              <li class="d-none d-md-inline-block">
                                 <a href="mailto:Insurinfo@gmail.com">
                                    <i class="flaticon-mail"></i>
                                    Insurinfo@gmail.com
                                 </a>
                              </li>
                              <li class="d-none d-xl-inline-block">
                                 <a href="https://www.google.com/maps/@23.7912408,90.5848486,11.67z?entry=ttu" target="_blank">
                                    <i class="flaticon-location"></i>
                                    238, Arimantab, Moska - USA.
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="it-header-top-right d-flex justify-content-end">
                           <div class="it-header-lang-wrapper d-none d-md-block">
                              <div class="it-header-lang d-flex align-items-center">
                                 <img src="frontend/img/logo/logo-lang.png" alt="">
                                 <span class="it-header-lang-selected-lang it-lang-toggle"
                                    id="it-header-lang-toggle">English <i class="fa-solid fa-angle-down"></i></span>
                                 <ul class="it-header-lang-list it-lang-list">
                                    <li>Spanish</li>
                                    <li>English</li>
                                    <li>Canada</li>
                                 </ul>
                              </div>
                           </div>
                           <div class="it-header-top-social">
                              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                              <a href="#"><i class="fa-brands fa-skype"></i></a>
                              <a href="#"><i class="fa-brands fa-twitter"></i></a>
                              <a href="#"><i class="fa-brands fa-instagram"></i></a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="it-header-bottom it-header-space-lr it-header-mob-space">
               <div class="container-fluid">
                  <div class="row align-items-center">
                     <div class="col-xl-8 d-none d-xl-block">
                        <div class="it-main-menu">
                           <nav class="it-menu-content">
                              <ul>
                                 <li class="has-dropdown">
                                    <a href="{{route('index')}}">Home</a>
                                    <ul class="it-submenu submenu">
                                       <li><a href="{{route('index')}}">Home 01</a></li>
                                       <li><a href="{{route('index-2')}}">Home 02</a></li>
                                       <li><a href="{{route('index-3')}}">Home 03</a></li>
                                       <li><a href="{{route('index-4')}}">Home 04</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="{{route('about')}}">About Us</a></li>
                                 <li class="has-dropdown">
                                    <a href="{{route('services')}}">Services</a>
                                    <ul class="it-submenu submenu">
                                       <li><a href="{{route('services')}}">Service 01</a></li>
                                       <li><a href="{{route('service-2')}}">Service 02</a></li>
                                       <li><a href="{{route('service-3')}}">Service 03</a></li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="#">Pages</a>
                                    <ul class="it-submenu submenu">
                                       <li><a href="{{route('team')}}">Team 01</a></li>
                                       <li><a href="{{route('team-2')}}">Team 02</a></li>
                                       <li><a href="{{route('team-details')}}">Team Details</a></li>
                                       <li><a href="{{route('gallery')}}">Portfolio</a></li>
                                       <li><a href="{{route('product')}}">Shop</a></li>
                                       <li><a href="{{route('product-details')}}">Shop Details</a></li>
                                       <li><a href="{{route('cart')}}">Cart</a></li>
                                       <li><a href="{{route('checkout')}}">Checkout</a></li>
                                       <li><a href="{{route('pricing')}}">Pricing</a></li>
                                       <li><a href="{{route('404')}}">404</a></li>
                                    </ul>
                                 </li>
                                 <li class="has-dropdown">
                                    <a href="{{route('blog')}}">Blog</a>
                                    <ul class="it-submenu submenu">
                                       <li><a href="{{route('blog')}}">Blog 01</a></li>
                                       <li><a href="{{route('blog-2')}}">Blog 02</a></li>
                                       <li><a href="{{route('blog-sidebar')}}">Blog Sidebar</a></li>
                                       <li><a href="{{route('blog-details')}}">Blog Details</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="{{route('contact')}}">Contact us</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <div class="col-xl-4">
                        <div class="it-header-right-box d-flex align-items-center justify-content-end">
                           
                           <div class="it-header-right-user d-none d-md-block ml-25">
                              <a href="{{route('contact')}}">
                                 <i class="flaticon-user"></i>
                              </a>
                           </div>
                           <div class="it-header-right-btn d-none d-md-block ml-35">
                              <a href="{{route('services')}}" class="it-btn-green">Our Services</a>
                           </div>
                           <div class="it-header-bar-wrap d-xl-none">
                              <button class="it-header-bar it-menu-bar"><i class="fa-sharp fa-regular fa-bars-staggered"></i>
                              </button>
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