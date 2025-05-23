@extends('front.layout.main-layout')

@section('content')

   <main>

      <!-- Service-breadcrumb area-start -->
      <div class="it-breadcrumb-area fix p-relative" data-background="{{asset('frontend/img/website')}}/solar-gazebo.webp">
         <div class="it-breadcrumb-shape-1">
            <img src="{{asset('frontend')}}/img/breadcrumb/breadcrumb-shape.png" alt="">
         </div>
         
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="it-breadcrumb-content">
                     <div class="it-breadcrumb-title-box mb-25 z-index-3">
                        <h3 class="it-breadcrumb-title text-white">Solar Gazebo</h3>
                     </div>
                     <div class="it-breadcrumb-list-wrap">
                        <div class="it-breadcrumb-list z-index-3">
                           <span><a href="index.html">Home</a></span>
                           <span class="dvdr">/</span>
                           <span><b>Products & Services</b></span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Service-breadcrumb area-end -->

      <!-- service details area start -->
      <div class="it-service-details__area pb-100">
         <div class="container">
            <div class="row">
               
                  <div class="it-sv-details__wrapp ml-40">
                     <div class="it-sv-details__main-thumb mb-35">
                        <img src="{{asset('frontend')}}/img/service/service-details/service-details.jpg" alt="">
                     </div>
                     <h3 class="it-sv-details__title">Elevating Outdoor Spaces with Solar Gazebos</h3>
                     <p>Imagine a tranquil oasis where nature meets innovation — that's the essence of Solar Gazebos offered by Ujval Projects. Our solar gazebos combine the timeless charm of outdoor structures with the cutting-edge technology of solar energy, creating versatile spaces that are both functional and sustainable.</p>
                     <p>At the heart of our solar gazebos are advanced photovoltaic (PV) panels designed to harness sunlight and convert it into clean, renewable energy. These panels are integrated seamlessly into the gazebo's roof or structure, maximizing exposure to sunlight throughout the day. Coupled with efficient inverters and energy storage solutions, our solar gazebos provide reliable electricity for lighting, heating, cooling, and other electrical needs, even in off-grid locations.</p>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      

      <div class="it-faq-area pt-115" style="background:whitesmoke;">
                           <div class="container">
                              <div class="row">
                                 <div class="col-xl-6 col-lg-6">
                                    <div class="it-faq-wrapper">
                                       <div class="it-faq-title-box">
                                          <h4 class="it-section-title">Why Choose Solar Gazebo?</h4>
                                       </div>
                                       <div class="it-custom-accordion pb-50">
                                          <div class="accordion" id="accordionExample">
                                             <div class="accordion-items">
                                                <p>Choose our Solar Gazebos for stylish, sustainable outdoor spaces powered by renewable energy, enhancing comfort and reducing environmental impact.</p>
                                                <h2 class="accordion-header" id="headingOne">
                                                   <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                      Integrated Design:
                                                   </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                   aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                   Our solar gazebos seamlessly incorporate solar panels into the roof design, combining aesthetics with functionality.
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="accordion-items">
                                                <h2 class="accordion-header" id="headingTwo">
                                                   <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                      Custom Solutions:
                                                   </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                                   data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                   Tailored designs to match the specific style, size, and energy requirements of your outdoor space.
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="accordion-items">
                                                <h2 class="accordion-header" id="headingThree">
                                                   <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                      Durable Construction:
                                                   </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                                   data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                   Built with high-quality, weather-resistant materials to ensure long-lasting performance and minimal maintenance.
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="accordion-items">
                                                <h2 class="accordion-header" id="headingFour">
                                                   <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                      Enhanced Outdoor Experience: 
                                                   </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                                   data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                   Provide shaded, comfortable spaces for relaxation and gatherings while generating renewable energy.
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="accordion-items">
                                                <h2 class="accordion-header" id="headingFive">
                                                   <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                      Comprehensive Support: 
                                                   </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                                   data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                   From initial consultation and custom design to professional installation and ongoing maintenance, Ujval Projects ensures a hassle-free experience and optimal performance of your solar gazebo.                                                </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xl-6 col-lg-6 mb-60">
                                    <div class="it-faq-thumb-box d-flex justify-content-md-center p-relative">
                                       <div class="it-faq-thumb">
                                          <div class="it-faq-thumb-1">
                                             <img src="{{asset('frontend/img/website')}}/solar-gazebo2.jpg" alt="">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                  </div>

                  
      @include('front.widget.index.working-process-block')
      
      @include('front.widget.index-3.call-to-action')

   </main>
   
@endsection