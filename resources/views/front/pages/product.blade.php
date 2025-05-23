@extends('front.layout.main-layout')

@section('content')


   <main>

      @include('front.widget.breadcrumb-block')


      <!-- Product area start  -->
      <div class="it-product-area p-relative pt-100 pb-90">
         <div class="container">
            <div class="row">
            @foreach($products as $productArr)
               <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                  <div class="it-product-item">
                     <div class="it-product-thumb mb-40 grey-bg p-relative">
                     <img src="{{ asset('web/media/md') }}/{{ optional(getProductImage($productArr->id))->image ?? 'default.jpg' }}" alt="">

                       <div class="it-product-icon">
                           <a href="#"><i class="fa-solid fa-heart"></i></a>
                        </div>
                     </div>
                     <div class="it-product-content d-flex align-items-center justify-content-between">
                     
                        <div class="it-product-action">
                           <a href="{{route('productDetails', $productArr->slug)}}">{{$productArr->name}}<i class="fa-solid fa-plus"></i></a>  
                        </div>
                     </div>
                  </div>
               </div>
                                     
               @endforeach
            </div>
         </div>
      </div>
      <!-- Product area end  -->


   </main>

  

@endsection