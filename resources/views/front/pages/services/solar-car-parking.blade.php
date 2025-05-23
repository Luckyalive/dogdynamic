@extends('front.layout.main-layout')

@section('content')

   <main>

      <!-- Service-breadcrumb area-start -->
      <div class="it-breadcrumb-area fix p-relative" data-background="{{asset('frontend/img/website')}}/solar-car-parking.jpg">
         <div class="it-breadcrumb-shape-1">
            <img src="{{asset('frontend')}}/img/breadcrumb/breadcrumb-shape.png" alt="">
         </div>
         
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="it-breadcrumb-content">
                     <div class="it-breadcrumb-title-box mb-25 z-index-3">
                        <h3 class="it-breadcrumb-title text-white">Solar Car Parking</h3>
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
                     <h3 class="it-sv-details__title">Transforming Urban Mobility with Street Car Parking Solutions</h3>
                     <p>In today's rapidly growing urban landscapes, efficient management of parking spaces is crucial for ensuring smooth mobility, reducing congestion, and enhancing overall urban livability. At Ujval Projects, we specialize in providing innovative Street Car Parking solutions that address the evolving challenges of urban development.</p>
                     <p>We are proud to present our innovative solution for urban mobility challenges: Street Car Parking. Designed to optimize space efficiency and enhance convenience, our Street Car Parking solutions cater to the evolving needs of modern cities.</p>
                     <p>Our Street Car Parking systems utilize cutting-edge technology to optimize the utilization of available space in urban environments. By employing automated stacking mechanisms, vertical car parking solutions, and smart retrieval systems, we maximize the number of vehicles that can be accommodated within a compact footprint.</p>
                     
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
                                          <h4 class="it-section-title">Why Solar Car Parking?</h4>
                                       </div>
                                       <div class="it-custom-accordion pb-50">
                                          <div class="accordion" id="accordionExample">
                                             <div class="accordion-items">
                                                <p>Car parking is essential for urban mobility, optimizing space and convenience for residents, businesses, and visitors alike in bustling city environments.</p>
                                                <h2 class="accordion-header" id="headingOne">
                                                   <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                      Space Optimization:                                                   </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                   aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                      Our Street Car Parking systems utilize vertical stacking and smart automation to maximize the number of vehicles parked within a limited urban footprint. This allows us to make the most efficient use of available space, reducing congestion and optimizing urban planning.
                                                </div>
                                                </div>
                                             </div>
                                             <div class="accordion-items">
                                                <h2 class="accordion-header" id="headingTwo">
                                                   <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                      User-Friendly Design:
                                                   </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                                   data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                      With user experience in mind, our systems are equipped with intuitive interfaces and convenient access mechanisms. Drivers can effortlessly park and retrieve their vehicles with minimal waiting times, enhancing overall convenience.
                                                   </div>
                                             </div>
                                             </div>
                                             
                                             
                                             <div class="accordion-items">
                                                <h2 class="accordion-header" id="headingThree">
                                                   <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                      Environmental Sustainability:
                                                   </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                                   data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                      Committed to sustainability, our systems are designed to be energy-efficient, utilizing eco-friendly materials and energy-saving technologies wherever possible. By reducing the need for sprawling surface parking lots, we contribute to a cleaner and greener urban environment.
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="accordion-items">
                                                <h2 class="accordion-header" id="headingFour">
                                                   <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                      Safety and Security: 
                                                   </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                                   data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                   We prioritize the safety and security of vehicles and users alike. Our Street Car Parking systems incorporate robust security features, including CCTV surveillance, secure access controls, and reliable mechanical safeguards.
                                                </div>
                                             </div>
                                             </div>
                                             <div class="accordion-items">
                                                <h2 class="accordion-header" id="headingFive">
                                                   <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                      Customization Options: 
                                                   </button>
                                                </h2>
                                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                                   data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                   Every project is unique, and we offer customizable solutions to meet specific site requirements and aesthetic preferences. Whether integrating into a bustling city center or enhancing a commercial complex, our Street Car Parking systems seamlessly blend functionality with architectural harmony.
                                                
                                                
                                                </div>
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
                                             <img src="{{asset('frontend/img/website')}}/solar-car-parking.jpg" alt="">
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