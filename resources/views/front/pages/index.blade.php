@extends('front.layout.main-layout')

@section('content')

   <main>

      @include('front.widget.index-3.slider-block')
      @include('front.widget.index-3.about-area-block')

      <div class="it-coverage-area grey-bg p-relative pt-120 pb-120">
         <div class="it-coverage-shape-1 d-none d-xl-block">
            <img src="assets/img/coverage/coverage-shape.png" alt="">
         </div>
         <div class="it-coverage-shape-2 d-none d-xl-block">
            <img src="assets/img/coverage/covaregage-shape-2.png" alt="">
         </div>
         <div class="container">
            <div class="row align-items-center gx-0">
               <div class="col-xl-5 col-lg-5">
                  <div class="it-coverage-title-wrap z-index-5">
                     <div class="it-coverage-title-box mb-35">
                        <span class="it-subtitle">Why us?</span>
                        <h3 class="it-section-title mb-20">Why Choose <span>TransPumpServ Global</span></h3>
                        <p>
                           From initial consultation to ongoing maintenance, TransPumpServ Global—also operating as TransFluid—is your one-stop partner for all things pump and valve related. We help your operations run smarter, faster, and longer.
                        </p>

                     </div>

                     <div class="it-sv-details__banner-list">
                           <ul>

                              <li><i class="fa-regular fa-circle-check"></i>Reliable and responsive support</li>
                              <li><i class="fa-regular fa-circle-check"></i>Cost-effective service plans</li>
                              <li><i class="fa-regular fa-circle-check"></i>Minimized downtime</li>
                              <li><i class="fa-regular fa-circle-check"></i>Extended equipment lifespan</li>
                              <li><i class="fa-regular fa-circle-check"></i>End-to-end pump management solutions</li>
                           </ul>
                     </div>

                     <div class="it-coverage-button">
                        <a href="{{route('about')}}" class="it-btn-green">About Us</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7">
                  <div class="it-coverage-map">
                     <img src="{{asset('frontend/img')}}/website/pump/pump3.jpeg" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
      
     
      @include('front.widget.index-3.industry-we-serve')
      @include('front.widget.index.brand-area-block')
   
   </main>

@endsection