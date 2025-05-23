@extends('front.layout.main-layout')

@section('content')




   <main>

      @include('front.widget.breadcrumb-block')

      <!-- blog area start  -->
      <div class="it-blog-area pt-115 pb-90">
         <div class="container">
            <div class="row">
            
            @foreach($blogs as $blog)
               <div class="col-xl-4 col-lg-6 col-md-6 mb-30">
                     <div class="it-blog-item">
                        <div class="it-blog-thumb fix">
                           <img src="{{asset('web/media/sm')}}/{{$blog->image}}" alt="">
                        </div>
                        <div class="it-blog-content">
                         
                           <h3 class="it-section-title-sm">
                              <a href="{{route('blogDetail', $blog->slug)}}">{{$blog->title}}</a>
                           </h3>
                           <div class="it-blog-button mt-25">
                              <a href="{{route('blogDetail', $blog->slug)}}" class="it-btn-green sm">Read More</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  
            @endforeach
            
         </div>
         </div>
      </div>
      <!-- blog area End  -->


   </main>
   
  

@endsection