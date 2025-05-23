<!-- service area start  -->
<div class="it-service-area p-relative pt-120 pb-50">
         <div class="container">
            <div class="row">

            @foreach($services as $service)

               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="it-service-item">
                     
                     <h3 class="it-section-title-sm">{{$service->title}}</h3>
                     <p>{{$service->short_description}}</p>
                     
                           @if($service->image)
                              <div class="it-service-item-thumb mt-25">
                                 <img src="{{asset('web/media/sm')}}/{{$service->image}}" alt="">

                              </div>
                              @else
                                 <div class="it-service-item-thumb mt-25">                                 
                                    <img src="frontend/img/service/service-1-1.jpg" alt="">
                                 </div>
                              @endif
                           
                        <div class="row">
                           <div class="col-sm-6 mt-25">
                              <a href="{{route('services')}}/{{$service->slug}}" class="it-btn-green btn-inquire-now2 sm">Read More</a>
                           </div>

                              
                        </div>

                  </div>
               </div>
               @endforeach

        
            </div>
         </div>
</div>
      <!-- service area end  -->