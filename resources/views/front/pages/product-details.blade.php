@extends('front.layout.main-layout')

@section('content')




   <main>

      @include('front.widget.breadcrumb-block')


      <!-- Product area start  -->
      <div class="it-shop-details__area pt-120 pb-120">
         <div class="container">
            <div class="it-shop-details__top-wrap">
               <div class="row">
                  <div class="col-xl-6 col-lg-6">
                     <div class="it-shop-details__thumb-box">
                     <img src="{{ asset('web/media/md') }}/{{ optional(getProductImage($product->id))->image ?? 'default.jpg' }}" alt="">

                     </div>
                  </div>
                  <div class="col-xl-6 col-lg-6">
                     <div class="it-shop-details__right-wrap">
                        <h3 class="it-shop-details__title-sm">{{($product->name)}}</h3>
                        <div class="it-shop-details__text pb-20">
                           <p>{{optional($product->seo)->meta_description}}
                           </p>
                        </div>
                        <div class="it-shop-details__quantity-wrap">
                           <div class="it-shop-details__quantity-box d-flex align-items-center">
                              <span>Quantity</span>
                              <div class="it-shop-details__quantity">
                                 <div class="cart-minus"><i class="fal fa-minus"></i></div>
                                 <input type="text" value="1">
                                 <div class="cart-plus"><i class="fal fa-plus"></i></div>
                              </div>
                              <div class="it-shop-details__btn">
                                 <a class="it-btn-green" href="cart.html">Add To Cart</a>
                              </div>
                           </div>
                           <div class="it-shop-details__text-2 pb-15">
                              <span><strong>SKU:</strong> 124224</span>
                              <span><strong>Category: </strong>Crux Indoor Fast and Easy</span>
                              <span><strong>Tag: </strong>accessories, business</span>
                           </div>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="row align-items-center">
               <div class="col-xl-12">
                  <div class="it-shop-details__text-box grey-bg mb-50">
                     <h5 class="it-section-title-sm">Our Description</h5>
                     <p class="pt-10 pb-20">{!! html_entity_decode($product->description) !!}</p>
                  </div>
               </div>

               <div class="col-xl-12">
                  <div class="it-shop-details-contact-wrap">

                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Product area end  -->


   </main>

   

@endsection