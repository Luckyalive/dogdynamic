@extends('front.layout.main-layout')

@section('content')




   <main>

      @include('front.widget.breadcrumb-block')


      <div class="it-error-area pt-120 pb-115">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="it-error-thumb text-center">
                     <img src="frontend/img/error/404.png" alt="">
                  </div>
               </div>
            </div>
            <div class="it-error-content-wrapp mt-50">
               <div class="row align-items-center justify-content-between">
                  <div class="col-xl-8 col-lg-8 col-md-8 col-sm-7">
                     <div class="it-error-content">
                        <h3 class="it-section-title">
                           <span>Lost in the fields?</span> Let us help you find your way back.
                        </h3>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-5">
                     <div class="it-error-button d-flex justify-content-sm-end">
                        <a href="{{route('index')}}" class="it-btn-green">Back to Homepage</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>


   </main>

 


@endsection