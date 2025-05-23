@extends('front.layout.blank-layout')

@section('content')


   <header class="header-height">
      <!-- header-area-start -->
      <div class="it-header-area-2 it-header-style-4 it-header-transparent">
         <div id="header-sticky" class="it-header-bottom-4 it-header-mob-space z-index-5">
            <div class="container">
               <div class="it-header-2-menu-wrapp p-relative">
                  <div class="row align-items-center">
                     <div class="col-xl-2 col-lg-6 col-md-6 col-6">
                        <div class="it-main-logo-2">
                           <a href="{{route('index')}}">
                              <img src="frontend/img/logo/dark-logo.png" alt="">
                           </a>
                        </div>
                     </div>
                     <div class="col-xl-8 d-none d-xl-block">
                        <div class="it-main-menu it-main-menu-2 text-center">
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
                                       <li><a href="#">Service Details</a></li>
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
                     <div class="col-xl-2 col-lg-6 col-md-6 col-6">
                        <div class="it-header-2-right-box d-flex align-items-center justify-content-end">
                           <div class="it-header-2-right-btn d-none d-md-block">
                              <a href="{{route('contact')}}" class="it-btn-green">GET A QUOTE</a>
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

   <main>

      @include('front.widget.index-4.text-slider-banner')

      @include('front.widget.index-4.about-us-area-block')

      @include('front.widget.index-4.our-service-area-block')

      @include('front.widget.index-4.funfact-area-block')

      @include('front.widget.index-2.service-2-area-block')

      @include('front.widget.index-4.video-block')

      @include('front.widget.index-2.coverage-area-block')

      @include('front.widget.index-4.pricing-plan-block')

      @include('front.widget.index-4.our-team-block')

      @include('front.widget.index-4.testimonial-slider-2-block')

      @include('front.widget.index-4.our-blog-area')


   </main>

   @include('front.ext.footer-2')


@endsection