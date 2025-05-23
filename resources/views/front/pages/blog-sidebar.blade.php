@extends('front.layout.main-layout')

@section('content')



   <main>

      @include('front.widget.breadcrumb-block')


      <!-- blog-details area start  -->
      <div class="postbox-area pt-120 pb-120">
         <div class="container">
            <div class="row">
               <div class="col-xl-8 col-lg-8 mb-40">
                  <div class="postbox-details-wrapper">
                     <div class="postbox-thumb-box mb-80">
                        <div class="postbox-main-thumb mb-30">
                           <img src="frontend/img/blog/blog-details/details-banner.jpg" alt="">
                        </div>
                        <div class="postbox-content-box">
                           <div class="postbox-meta mb-30">
                              <span><i class="fa-light fa-calendar-days"></i>April 21, 2023</span>
                              <span><i class="fal fa-user"></i>Alamgir Chowdhuri</span>
                           </div>
                           <h4 class="postbox-title">
                              <a href="{{route('blog-details')}}">Curabitur at fermentum purus. Interdum et malesuada fames ac ante ipsum</a>
                           </h4>
                           <a class="it-btn-green mt-15" href="{{route('blog-details')}}"><span>Read more</span></a>
                        </div>
                     </div>
                     <div class="postbox-thumb-box mb-80">
                        <div class="it-postbox-wrapper p-relative mb-30">
                           <div class="swiper-container postbox-thumb-slider-active">
                              <div class="swiper-wrapper">
                                 <div class="swiper-slide">
                                    <div class="postbox-main-thumb">
                                       <img src="frontend/img/blog/blog-details/details-banner.jpg" alt="">
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="postbox-main-thumb">
                                       <img src="frontend/img/blog/blog-details/details-banner.jpg" alt="">
                                    </div>
                                 </div>
                                 <div class="swiper-slide">
                                    <div class="postbox-main-thumb">
                                       <img src="frontend/img/blog/blog-details/details-banner.jpg" alt="">
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="postbox-slider-arrow-wrap">
                              <button class="postbox-arrow-prev">
                                 <i class="fa-solid fa-arrow-left"></i>
                              </button>
                              <button class="postbox-arrow-next">
                                 <i class="fa-solid fa-arrow-right"></i>
                              </button>
                           </div>
                        </div>
                        <div class="postbox-content-box">
                           <div class="postbox-meta mb-30">
                              <span><i class="fa-light fa-calendar-days"></i>April 21, 2023</span>
                              <span><i class="fal fa-user"></i>Alamgir Chowdhuri</span>
                           </div>
                           <h4 class="postbox-title">
                              <a href="{{route('blog-details')}}">Aenean nec aliquet enim. Donec at dapibus enim. Integer et tur is vel turpis</a>
                           </h4>
                           <a class="it-btn-green mt-15" href="{{route('blog-details')}}">
                              <span>Read more</span>
                           </a>
                        </div>
                     </div>
                     <div class="postbox-thumb-box">
                        <div class="postbox-main-thumb p-relative mb-30">
                           <img src="frontend/img/blog/blog-details/details-banner.jpg" alt="">
                           <div class="postbox-play-icon">
                              <a href="https://www.youtube.com/watch?v=lcZTcfdZ3Ow" class="popup-video">
                                 <i class="fa-solid fa-play"></i>
                              </a>
                           </div>
                        </div>
                        <div class="postbox-content-box">
                           <div class="postbox-meta mb-30">
                              <span><i class="fa-light fa-calendar-days"></i>April 21, 2023</span>
                              <span><i class="fal fa-user"></i>Alamgir Chowdhuri</span>
                           </div>
                           <h4 class="postbox-title">
                              <a href="{{route('blog-details')}}">Curabitur at fermentum purus. Interdum et malesuada fames ac ante ipsum</a>
                              </h4>
                           <a class="it-btn-green mt-15" href="{{route('blog-details')}}"><span>Read more</span></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 order-lg-0 order-md-1">
                  <div class="sidebar-wrapp">
                     <div class="sidebar-widget mb-55">
                        <div class="sidebar-search-box p-relative">
                           <div class="sidebar-search-input">
                              <input type="text" placeholder="Search here">
                           </div>
                           <div class="sidebar-search-button">
                              <button type="submit">
                                 <i class="flaticon-magnifying-glass"></i>
                              </button>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar-widget mb-55">
                        <h4 class="sidebar-widget-title mb-40">Category</h4>
                        <div class="sidebar-widget-list">
                           <a href="{{route('blog-details')}}">Solar Panel Services<i class="fa-regular fa-angle-right"></i></a>
                           <a href="{{route('blog-details')}}">Turbines Services<i class="fa-regular fa-angle-right"></i></a>
                           <a href="{{route('blog-details')}}">Hydropower Plants<i class="fa-regular fa-angle-right"></i></a>
                           <a href="{{route('blog-details')}}">Fossil Resources<i class="fa-regular fa-angle-right"></i></a>
                           <a href="{{route('blog-details')}}">Business solution<i class="fa-regular fa-angle-right"></i></a>
                           <a href="{{route('blog-details')}}">Finance solution<i class="fa-regular fa-angle-right"></i></a>
                        </div>
                     </div>
                     <div class="sidebar-widget mb-55">
                        <h4 class="sidebar-widget-title mb-40">Recent post:</h4>
                        <div class="sidebar-widget-content">
                           <div class="sidebar-widget-post">
                              <div class="rc-post d-flex align-items-center">
                                 <div class="rc-post-thumb mr-20">
                                    <a href="{{route('blog-details')}}">
                                       <img src="frontend/img/blog/blog-details/blog-d-3.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="rc-post-content">
                                    <div class="rc-meta d-flex mb-20">
                                       <i class="fa-solid fa-calendar-days"></i>
                                       <span>02 Jan, 2024</span>
                                    </div>
                                    <h3 class="rc-post-title mb-5">
                                       <a href="{{route('blog-details')}}">We would love to share a similar experience</a>
                                    </h3>
                                 </div>
                              </div>
                              <div class="rc-post d-flex align-items-center">
                                 <div class="rc-post-thumb mr-20">
                                    <a href="{{route('blog-details')}}">
                                       <img src="frontend/img/blog/blog-details/blog-d-4.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="rc-post-content">
                                    <div class="rc-meta d-flex mb-20">
                                       <i class="fa-solid fa-calendar-days"></i>
                                       <span>02 Jan, 2024</span>
                                    </div>
                                    <h3 class="rc-post-title mb-5">
                                       <a href="{{route('blog-details')}}">We would love to share a similar experience</a>
                                    </h3>
                                 </div>
                              </div>
                              <div class="rc-post d-flex align-items-center">
                                 <div class="rc-post-thumb mr-20">
                                    <a href="{{route('blog-details')}}">
                                       <img src="frontend/img/blog/blog-details/blog-d-5.jpg" alt="">
                                    </a>
                                 </div>
                                 <div class="rc-post-content">
                                    <div class="rc-meta d-flex mb-20">
                                       <i class="fa-solid fa-calendar-days"></i>
                                       <span>02 Jan, 2024</span>
                                    </div>
                                    <h3 class="rc-post-title mb-5">
                                       <a href="{{route('blog-details')}}">We would love to share a similar experience</a>
                                    </h3>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="sidebar-widget mb-40">
                        <div class="sideba-widge-title-box">
                           <h3 class="sidebar-widget-title sm-border mb-35">Popular Tag</h3>
                        </div>
                        <div class="sidebar-widget-content">
                           <div class="tagcloud">
                              <a href="#">Riding</a>
                              <a href="#">Delivery</a>
                              <a href="#">Transportation</a>
                              <a href="#">Commute</a>
                              <a href="#">CarPooling</a>
                              <a href="#">OnDemand</a>
                              <a href="#">EcoFriendly</a>
                              <a href="#">Travel</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-12">
                  <div class="it-pagination mt-10">
                     <nav>
                        <ul>
                           <li>
                              <a href="{{route('blog-sidebar')}}">1</a>
                           </li>
                           <li>
                              <a href="{{route('blog-sidebar')}}">2</a>
                           </li>
                           <li>
                              <a href="{{route('blog-sidebar')}}">3</a>
                           </li>
                           <li>
                              <a class="color" href="{{route('blog-sidebar')}}">
                                 <i class="fa-solid fa-arrow-right-long"></i>
                              </a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog-details area end  -->


   </main>

 

@endsection