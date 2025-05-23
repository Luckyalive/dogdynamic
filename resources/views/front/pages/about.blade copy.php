@extends('front.layout.main-layout')

@section('content')



   <main>

      @include('front.widget.breadcrumb-block')


      @include('front.widget.index-3.about-area-block')

      
      @include('front.widget.index.gov-logos')

      @include('front.widget.index.working-process-block')
      
      
      
      @include('front.widget.index.brand-area-block2')
      @include('front.widget.index.sector-we-serve')
      
      @include('front.widget.index-3.call-to-action')



   </main>

  

@endsection