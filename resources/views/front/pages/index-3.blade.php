@extends('front.layout.main-layout')

@section('content')

   <main>

      @include('front.widget.index-3.slider-block')
      @include('front.widget.index-3.about-area-block')

      @include('front.widget.index.service-area')
      @include('front.widget.index.brand-area-block')
   
   </main>

@endsection