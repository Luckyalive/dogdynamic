<!-- about area start  -->
<div class="it-about-area it-about-style-3 it-about-style-4 p-relative pt-130">
         <div class="it-about-2-shape-2 d-none d-xxl-block">
            <img src="frontend/img/about/about-2-shape-3.png" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-6 col-lg-6">
                  <div class="it-about-2-thumb-box pr-20 p-relative wow itfadeLeft" data-wow-duration=".9s"
                     data-wow-delay=".5s">
                     <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8">
                           <div class="it-about-2-thumb-box-left p-relative">
                              <div class="it-about-2-thumb-shape">
                                 <img src="{{asset('frontend/img')}}/about/Fully Automatic.png" alt="">
                              </div>
                              <div class="it-about-2-thumb-item text-end mb-20">
                                 <img src="{{asset('frontend/img')}}/website/Fully Automatic.png" alt="Fully automatic">
                              </div>
                              <div class="it-about-2-thumb-item">
                                 <img class="w-100" src="{{asset('frontend/img')}}/website/Semi Automatic.png" alt="semi automatic">
                              </div>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                           <div class="it-about-2-thumb-box-right mt-95">
                              <div class="it-about-2-thumb-item mb-30">
                                 <img src="{{asset('frontend/img')}}/website/FK Series.png" alt="flour make">
                              </div>
                              <div class="it-about-2-exp theme-bg p-relative">
                                 <span class="it-about-2-exp-number">20 +</span>
                                 <div class="it-about-2-exp-icon">
                                    <a href="{{route('about')}}"><i class="flaticon-up-right-arrow"></i></a>
                                 </div>
                                 <div class="it-about-2-exp-title">
                                    <i>years of experience.</i>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="it-about-content-wrapp wow itfadeRight" data-wow-duration=".9s" data-wow-delay=".9s">
                     <div class="it-about-title-box mb-20">
                        <span class="it-subtitle">about us</span>
                        <h3 class="it-section-title">Trusted Chapati Machine Manufacturer with 20+ Years of Industry Experience
                        </h3>
                     </div>
                     <div class="it-about-dsc mb-30">
                        <p>Terratech Machines is a trusted name in the field of food machinery solutions, proudly based in Vadodara, Gujarat. With over 20 years of industry expertise, we specialize in both manufacturing high-quality food processing machines and providing reliable machinery services to a wide range of clients across India.</p>
                     </div>
                     <div class="it-about-2-item mb-15">
                        <div class="row">
                           <div class="col-xl-6">
                              <div class="it-about-item-text">
                                 <h3 class="it-section-title-sm mb-5">OUR MISSION:</h3>
                                 <div class="it-about-2-dsc">
                                    <p>To deliver cost-effective, durable, and high-performance machines that meet the evolving needs of the food industry. We understand the importance of efficiency and reliability in food production, which is why our machines are designed with low maintenance requirements, helping businesses reduce downtime and operational costs.</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-6">
                              <div class="it-about-item-text">
                                 <h3 class="it-section-title-sm mb-5">OUR VISSION:</h3>
                                 <div class="it-about-item-2-dsc">
                                    <p>To be a leading name in food processing technology by delivering reliable, affordable, and innovative machinery that empowers food businesses across India and beyond.</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="it-about-info d-flex align-items-center">
                        <div class="it-about-btn mr-25">
                           <a href="{{route('services')}}" class="it-btn-green yellow-bg text-white text-light">Our Services</a>
                        </div>
                        <div class="it-about-info-content d-flex align-items-center">
                           <div class="it-about-info__icon mr-10">
                              <i class="flaticon-message"></i>
                           </div>
                           <div class="it-about-info__text">
                              <span class="it-about-info__title">Call Us Now</span>
                              @if(getWebsiteData()['primary_phone'])
                                 <a href="tel:{{getWebsiteData()['primary_phone']}}">{{getWebsiteData()['primary_phone']}}</a>
                              @endif
                              </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
</div>

      <!-- about area end  -->


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
                        <h3 class="it-section-title mb-20">Why Choose <span>Terratech Machines</span></h3>
                        <p>
                        With over two decades of experience, Terratech Machines stands out for delivering high-quality, low-maintenance food processing equipment tailored to your needs. Our commitment to customer satisfaction, reliable after-sales service, and cost-effective solutions makes us the trusted choice for businesses seeking performance, durability, and long-term support.
                        </p>

                     </div>

                     <div class="it-sv-details__banner-list">
                           <ul>
                              <li><i class="fa-regular fa-circle-check"></i>20+ Years of Experience in food machinery manufacturing</li>
                              <li><i class="fa-regular fa-circle-check"></i>High-Quality, Durable Machines with low maintenance</li>
                              <li><i class="fa-regular fa-circle-check"></i>Customized Solutions tailored to your business needs</li>
                              <li><i class="fa-regular fa-circle-check"></i>Reliable After-Sales Support and quick service response</li>
                              <li><i class="fa-regular fa-circle-check"></i>Cost-Effective Products that reduce downtime and boost efficiency</li>
                           </ul>
                     </div>

                     <div class="it-coverage-button">
                        <a href="{{route('about')}}" class="it-btn-green">About Us</a>
                     </div>
                  </div>
               </div>
               <div class="col-xl-7 col-lg-7">
                  <div class="it-coverage-map">
                     <img src="{{asset('frontend/img')}}/website/Fully Automatic.png" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
      