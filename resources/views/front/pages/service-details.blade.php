@extends('front.layout.main-layout')

@section('content')


      @include('front.widget.breadcrumb-block')
   
   <main>

   
       <!-- service details area start -->
         <div class="it-service-details__area pt-120 pb-100">
                  <div class="container">
                     <div class="row">
                        <div class="col-xl-3 col-lg-3 mb-50">
                           <div class="it-sv-details__wrapp">
                              <div class="sidebar-wrapp mb-60 p-relative">
                                 

                                 <div class="sidebar-widget mb-55">
                                    <h4 class="sidebar-widget-title mb-40">Our Services</h4>
                                    <div class="sidebar-widget-list">
                                       @foreach(getServices() as $serviceList)
                                          <a href="{{route('service-details', $serviceList->slug)}}">{{$serviceList->title}}<i class="fa-regular fa-angle-right"></i></a>
                                       @endforeach
   
                                       <a href="#">Turbines Services<i class="fa-regular fa-angle-right"></i></a>
                                       <a href="#">Hydropower Plants<i class="fa-regular fa-angle-right"></i></a>
                                       <a href="#">Fossil Resources<i class="fa-regular fa-angle-right"></i></a>
                                       <a href="#">Business solution<i class="fa-regular fa-angle-right"></i></a>
                                       <a href="#">Finance solution<i class="fa-regular fa-angle-right"></i></a>
                                    </div>
                                 </div>
                              </div>
                              
                           </div>
                        </div>
                        <div class="col-xl-9 col-lg-9">
                           <div class="it-sv-details__wrapp ml-40">
                              <div class="it-sv-details__main-thumb mb-35">
                                 <img src="{{asset('frontend/img')}}/service/service-details/service-details.jpg" alt="">
                              </div>
                              <h3 class="it-sv-details__title">{{ $service->title }}</h3>

                              <p class="mb-50">{{ $service->short_description }}</p>

                              <p>{!! html_entity_decode($service->full_description) !!}</p>

                        </div>
                     </div>
                  </div>
         </div>
         

    
   </main>

   

@endsection
