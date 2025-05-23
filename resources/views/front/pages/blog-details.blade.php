@extends('front.layout.main-layout')

@section('content')


   <main>

      @include('front.widget.breadcrumb-block')

      <!-- blog-details area start  -->
      <div class="postbox-area pt-120 pb-120">
         <div class="container">
            <div class="row">
               <div class="col-xl-8 col-lg-8">
                  <div class="postbox-wrapp pr-40">
                     <article class="postbox-item">
                        <div class="postbox-thumb mb-35">
                           <img src="frontend/img/blog/blog-details/details-banner.jpg" alt="">
                        </div>
                        
                        <div class="postbox-meta mb-30">
                           <span><i class="fa-solid fa-calendar-days"></i> {{$blog->created_at}}</span>
                           
                        </div>
                        <div class="postbox-content">
                           <h3 class="postbox-title mb-15">{{$blog->title}}</h3>

                           <p>{{$blog->heading}}</p>
                           
                             <p>{!! html_entity_decode($blog->description) !!}</p>

                           
                        </div>

                     </article>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4">
                  <div class="sidebar-wrapp">
                     
                     <div class="sidebar-widget mb-55">
                        <h4 class="sidebar-widget-title mb-40">Recent post:</h4>
                        <div class="sidebar-widget-content">
                           <div class="sidebar-widget-post">

                              @foreach($blogs as $blog1)
                                 <div class="rc-post d-flex align-items-center">
                                    <div class="rc-post-thumb mr-20">
                                       <a href="{{route('blogDetail', $blog1->slug)}}">
                                          <img src="{{asset('web/media/xs')}}/{{$blog1->image}}" Style="width:100%" alt="">
                                       </a>
                                    </div>

                                    <div class="rc-post-content">
                                       <div class="rc-meta d-flex mb-20">
                                          <i class="fa-solid fa-calendar-days"></i>
                                          <span>{{$blog1->created_at}}</span>
                                       </div>
                                       <h3 class="rc-post-title mb-5">
                                          <a href="{{route('blogDetail', $blog1->slug)}}">{{$blog1->title}}</a>
                                       </h3>
                                    </div>
                                 </div>
                              @endforeach
                              
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      


   </main>


@endsection