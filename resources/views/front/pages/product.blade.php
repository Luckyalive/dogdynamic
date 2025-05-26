@extends('front.layout.main-layout')

@section('content')


   <main>

      @include('front.widget.breadcrumb-block')


      <!-- Product area start  -->
      <div class="it-product-area p-relative pt-100 pb-90">


         <div class="container">
            <div class="row">
               
               <div class="col-xl-3 col-lg-3 mb-50">
                  <div class="it-sv-details__wrapp">
                     <div class="sidebar-wrapp mb-60 p-relative">
                   
                        <div class="sidebar-widget mb-55">
                           <h4 class="sidebar-widget-title mb-40">Our Products</h4>
                           <div class="sidebar-widget-list">
                              @foreach(getCategories() as $categoryArr)
                                 <a class='{{$categoryArr->slug}}@if($categoryArr->slug == $category->slug) active @endif' href="{{route('category',$categoryArr->slug)}}">{{$categoryArr->name}}<i class="fa-regular fa-angle-right"></i></a>
                              @endforeach

                           </div>
                        </div>
                     </div>

                  </div>
               </div>
               
               <div class="col-xl-9 col-lg-9">
               <div class="row">
                  @foreach($products as $productArr)
               
               <div class="col-xl-6 col-lg-6 col-md-6">
                           <div class="it-service-item">
                              <div class="img-container">
                                 <img src="{{ asset('web/media/md') }}/{{ optional(getProductImage($productArr->id))->image ?? 'default.jpg' }}" alt="">
                              </div>

                     <h3 class="it-section-title-sm">{{$productArr->name}}</h3>
                     
                    <p>{!! html_entity_decode($productArr->description) !!}</p>
                  </div>
               </div>
                                     
               @endforeach

            </div>

            </div>
         </div>
         </div>
      </div>


   </main>

  

@endsection