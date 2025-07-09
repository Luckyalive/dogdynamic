@extends('front.layout.main-layout')

@section('content')

<section class="page-title-big-typography cover-background" style="background-image: url('/picture/bg4.jpg')">
    <div class="container">
        <div class="row align-items-center small-screen">
            <div class="col-10 col-sm-12 position-relative page-title-extra-large">
                <h1 class="alt-font text-dark-gray mb-10px ls-minus-1px">{{ $video->title }}</h1>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container text-center">
        @php
            preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $video->link, $matches);
            $videoId = $matches[1] ?? '';
        @endphp

        @if($videoId)
            <div class="ratio ratio-16x9 mb-4">
                <iframe src="https://www.youtube.com/embed/{{ $videoId }}" frameborder="0" allowfullscreen></iframe>
            </div>
        @else
            <p class="text-danger">Invalid YouTube Link</p>
        @endif

        <p>{{ $video->title }}</p>
        <a href="{{ route('youtubelink') }}" class="btn btn-dark mt-3">← Back to all videos</a>
    </div>
</section>

@endsection
