@extends('front.layout.main-layout')

@section('content')

   <main>

      <!-- Service-breadcrumb area-start -->
      <div class="it-breadcrumb-area fix p-relative" data-background="{{asset('frontend/img/website')}}/industrial-solar-solutions.jpg">
         <div class="it-breadcrumb-shape-1">
            <img src="{{asset('frontend')}}/img/breadcrumb/breadcrumb-shape.png" alt="">
         </div>
         
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="it-breadcrumb-content">
                     <div class="it-breadcrumb-title-box mb-25 z-index-3">
                        <h3 class="it-breadcrumb-title text-white">Industrial Solar Solutions</h3>
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
                     <h3 class="it-sv-details__title">Transforming Operations with Sustainable Energy Solutions with Industrial Solar</h3>
                     <p>In today's competitive industrial landscape, harnessing the power of solar energy through innovative industrial solar solutions has become a strategic imperative. At Ujval Projects, we specialize in delivering robust industrial solar solutions tailored to meet the unique energy demands and operational objectives of manufacturing facilities, warehouses, distribution centers, and other industrial complexes.</p>
                     <p>Our industrial solar solutions integrate state-of-the-art photovoltaic (PV) technology, engineered to optimize energy production and efficiency. Through high-performance solar panels, advanced inverters, and sophisticated monitoring systems, we empower industrial businesses to generate clean, renewable energy onsite. This not only reduces dependency on grid electricity but also enhances energy resilience and operational continuity, ensuring reliable power supply even in challenging conditions.</p>
                     
                  
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
                                          <h4 class="it-section-title">Why Choose Ujval Projects for <span>Industrial Solar Solutions</span>?</h4>
                                       </div>
                                       <div class="it-custom-accordion pb-50">
                                          <div class="accordion" id="accordionExample">
                                             <div class="accordion-items">
                                                <p>Choose Industrial Solar Solutions to optimize costs, boost sustainability efforts, and lead in environmental stewardship.</p>
                                                <h2 class="accordion-header" id="headingOne">
                                                   <button class="accordion-buttons " type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                      Cost Efficiency:
                                                   </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                   aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                   Dramatically reduce energy expenses and operational costs with highly efficient solar power solutions.
                                                   
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="accordion-items">
                                                <h2 class="accordion-header" id="headingTwo">
                                                   <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                      Environmental Responsibility:
                                                   </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                                   data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                      Mitigate carbon emissions and demonstrate a commitment to sustainable business practices.
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="accordion-items">
                                                <h2 class="accordion-header" id="headingThree">
                                                   <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                      Energy Security:
                                                   </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                                   data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                      Ensure uninterrupted power supply and minimize dependence on grid electricity, enhancing operational reliability.
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="accordion-items">
                                                <h2 class="accordion-header" id="headingFour">
                                                   <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse"
                                                      data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                      Scalability:  
                                                   </button>
                                                </h2>
                                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                                   data-bs-parent="#accordionExample">
                                                   <div class="accordion-body">
                                                      Our industrial solar solutions are scalable to accommodate the evolving energy demands of your expanding operations.
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
                                             <img src="{{asset('frontend/img/website')}}/industrial-solar-solutions22.jpg" alt="">
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