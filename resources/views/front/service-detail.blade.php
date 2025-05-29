@extends('front.layout.main-layout')

@section('content')

<main>

   {{-- Breadcrumb --}}
   @include('front.widget.breadcrumb-block')

   {{-- Service Detail Area --}}
   <div class="it-service-details__area pt-120 pb-100">
      <div class="container">
         <div class="row">

            {{-- Sidebar --}}
            <div class="col-xl-3 col-lg-3 mb-50">
               <div class="it-sv-details__wrapp">
                  <div class="sidebar-wrapp mb-60 p-relative">

                     {{-- Search Box --}}
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

                     {{-- Service Categories --}}
                     <div class="sidebar-widget mb-55">
                        <h4 class="sidebar-widget-title mb-40">Service Category</h4>
                        <div class="sidebar-widget-list">
                           @foreach($services as $serviceArr)
                              <a href="{{ route('serviceDetail', $serviceArr->slug) }}">
                                 {{ $serviceArr->name }}
                                 <i class="fa-regular fa-angle-right"></i>
                              </a>
                           @endforeach
                        </div>
                     </div>

                  </div>
               </div>
            </div>

            {{-- Main Content --}}
            <div class="col-xl-9 col-lg-9">
               <div class="it-sv-details__wrapp ml-40">
                  @if($service->image)
                     <div class="it-sv-details__main-thumb mb-35">
                        <img src="{{ asset('web/media/sm/' . $service->image) }}" alt="{{ $service->name }}">
                     </div>
                  @endif

                  <h3 class="it-sv-details__title">{{ $service->name }}</h3>

                  @if($service->description)
                     <p class="mb-50">{!! html_entity_decode($service->description) !!}</p>
                  @endif

               </div>
            </div>

         </div>
      </div>
   </div>

</main>

@endsection
