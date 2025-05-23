@extends('front.layout.main-layout')

@section('content')




   <main>

      @include('front.widget.breadcrumb-block')


      
      <div class="it-service-details__area pt-120 pb-100">
         <div class="container">
            <div class="row">
               <div class="col-xl-3 col-lg-3 mb-50">
                  <div class="it-sv-details__wrapp">
                     <div class="sidebar-wrapp mb-60 p-relative">
                        <div class="sidebar-widget mb-55">
                           <div class="sidebar-search-box p-relative">
                              <div class="sidebar-search-input">
                                 <input type="text" placeholder="Search here">
                              </div>
                              <div class="sidebar-search-button">
                                 <button type="submit">
                                    <i class="flaticon-magnifying-glass"></i>
                                 </button>
                              </div>
                           </div>
                        </div>

                        <div class="sidebar-widget mb-55">
                           <h4 class="sidebar-widget-title mb-40">Service category</h4>
                           <div class="sidebar-widget-list">
                              @foreach($services as $serviceArr)
                                 <a href="{{route('serviceDetail', $serviceArr->slug)}}">{{$serviceArr->name}}<i class="fa-regular fa-angle-right"></i></a>
                              @endforeach
                              
                           </div>
                        </div>

                     </div>
                     
                  </div>
               </div>
               <div class="col-xl-9 col-lg-9">
                  <div class="it-sv-details__wrapp ml-40">
                     <div class="it-sv-details__main-thumb mb-35">
                        <img src="{{asset('frontend')}}/img/service/service-details/service-details.jpg" alt="">
                     </div>
                     <h3 class="it-sv-details__title">{{$service->name}}</h3>

                     <p class="mb-50">{!! html_entity_decode($service->description) !!}</p>


                  </div>
                  
               </div>
            </div>
         </div>
      </div>

   </main>

   

@endsection