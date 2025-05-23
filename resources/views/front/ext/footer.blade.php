<footer>

      <!-- footer-area-start -->
      <div class="it-footer-area p-relative pt-130 pb-35 black-bg fix">
         <div class="it-footer-shape-1">
            <img src="{{asset('frontend/img')}}/footer/shape-1.png" alt="">
         </div>
         <div class="it-footer-shape-2">
            <img src="{{asset('frontend/img')}}/footer/shape-2.png" alt="">
         </div>
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-4 col-md-6 mb-60">
                  <div class="it-footer-widget footer-col-1">
                     <div class="it-footer-logo mb-25">
                        @if(isset(getWebsiteData()['light_logo']))
                           <a href="{{route('index')}}">
                              <img src="{{asset('web/media/sm')}}/{{getWebsiteData()['light_logo']}}" alt="{{getWebsiteData()['name']}}">
                           </a>
                        @endif
                     </div>
                     <div class="it-footer-content">
                        <p>Some links on this website PureProposals.
                           com contain affiliate links. These links provide
                           a commission to PureProposals for products
                           or software purchased. Note that</p>
                        <div class="it-footer-social">
                           <a href="#"><i class="fa-brands fa-facebook"></i></a>
                           <a href="#"><i class="flaticon-twitter-1"></i></a>
                           <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                           <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 mb-60">
                  <div class="it-footer-widget footer-col-2">
                     <h3 class="it-footer-widget-title mb-35">Useful Links</h3>
                     <div class="it-footer-list">
                        <ul>
                           <li><a href="#{{route('avout')}}">About Us</a></li>
                           <li><a href="#">Project Gallery</a></li>
                           <li><a href="#">Our Services</a></li>
                           <li><a href="#">Our Blog</a></li>
                           <li><a href="#">Our Team</a></li>
                           <li><a href="#">Contact</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 mb-60">
                  <div class="it-footer-widget footer-col-3">
                     <h3 class="it-footer-widget-title mb-35">Products & Services</h3>
                     <div class="it-footer-list">
                        <ul>
                           
                           <li><a href="#">Chapati Maker</a></li>
                        
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-4 col-md-6 mb-60">
                  <div class="it-footer-widget p-relative footer-col-4">
                     <h3 class="it-footer-widget-title mb-35">Contact</h3>
                     <div class="it-footer-contact">
                        <div class="it-footer-info d-flex align-items-center">
                           <i class="flaticon-map"></i>
                           <a href="#">569 Cost AvenueSilver Spring,
                              MD 20910.New york</a>
                        </div>
                        <div class="it-footer-info d-flex align-items-center">
                           <i class="flaticon-phone-call"></i>
                           <a href="tel:890301-415-5058">(+890)301-415-5058</a>
                        </div>
                        <div class="it-footer-info d-flex align-items-center">
                           <i class="flaticon-email"></i>
                           <a href="mailto:ekomfy@gmail.com">ekomfy@gmail.com</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer-area-end -->

      <!-- copyright area start -->
      <div class="it-copyright-area pt-15 pb-15 theme-bg">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-xl-6 col-lg-6">
                  <div class="it-copyright-content text-center text-lg-start">
                     <p>Copyright © 2023 <span><a href="{{route('index')}}">Solvra</a></span>. All Rights Reserved Crated by
                        <span><a href="#">ordianit</a></span></p>
                  </div>
               </div>
               <div class="col-xl-6 col-lg-6">
                  <div class="it-copyright-privacy text-center text-lg-end">
                     <a href="#">Terms & Conditions - Privacy Policy - Sitemap</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright area end -->

</footer>