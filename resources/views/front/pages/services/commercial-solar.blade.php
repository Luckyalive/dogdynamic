@extends('front.layout.main-layout')

@section('content')

   <main>

      <!-- Service-breadcrumb area-start -->
      <div class="it-breadcrumb-area fix p-relative" data-background="{{asset('frontend/img/website')}}/Commercial-Rooftop2.jpg">
         <div class="it-breadcrumb-shape-1">
            <img src="{{asset('frontend')}}/img/breadcrumb/breadcrumb-shape.png" alt="">
         </div>
         
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="it-breadcrumb-content">
                     <div class="it-breadcrumb-title-box mb-25 z-index-3">
                        <h3 class="it-breadcrumb-title text-white">Commercial Solar Solutions</h3>
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
                     <h3 class="it-sv-details__title">Enhance Your Business with Commercial Solar Solutions.</h3>
                     <p>In today's dynamic business landscape, commercial solar solutions represent a strategic investment towards sustainability, cost efficiency, and environmental leadership. At Ujval Projects, we specialize in empowering businesses with comprehensive commercial solar solutions that harness the power of renewable energy to drive operational excellence and long-term financial benefits.</p>
                     <p>Our commercial solar solutions leverage cutting-edge photovoltaic (PV) technology, meticulously designed to maximize energy generation efficiency. Through high-performance solar panels, intelligent inverters, and sophisticated monitoring systems, businesses can optimize energy production across diverse operational environments. This technology not only reduces reliance on grid-supplied electricity but also enhances energy resilience and stability for uninterrupted business operations.</p>
                     
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
                                          <h4 class="it-section-title">Why Choose Ujval Projects for <span>Commercial Solar Solutions</span>?</h4>
                                       </div>
                                       <div class="it-custom-accordion pb-50">
                                          <div class="accordion" id="accordionExample">
                                             <div class="accordion-items">
                                                <p>Choose Commercial Solar Solutions for your business to reduce costs, enhance sustainability, and demonstrate environmental leadership.</p>
                                                <h2 class="accordion-header" id="headingOne">
                                                   <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                      Expertise and Experience:
                                                   </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                   aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                   Our team of professionals brings years of experience and expertise in commercial solar installations.
   
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="accordion-items">
                                                <h2 class="accordion-header" id="headingTwo">
                                                   <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                      Quality and Reliability:
                                                   </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                                   data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                      We use high-quality materials and technology to ensure durability and long-lasting performance.
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="accordion-items">
                                                <h2 class="accordion-header" id="headingThree">
                                                   <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                      Comprehensive Service:
                                                   </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                                   data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                      From initial consultation to installation and maintenance, we provide end-to-end service.

                                                   </div>
                                                </div>
                                             </div>
                                             <div class="accordion-items">
                                                <h2 class="accordion-header" id="headingFour">
                                                   <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                      Sustainability Commitment:  
                                                   </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                                   data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                      Partner with us to make a positive environmental impact while achieving your business goals.
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
                                             <img src="{{asset('frontend/img/website')}}/commercial-rooftop22.jpg" alt="">
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