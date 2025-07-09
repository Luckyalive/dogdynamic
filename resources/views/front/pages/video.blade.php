@extends('front.layout.main-layout')

@section('content')

<!-- start page title -->
<section class="page-title-big-typography cover-background" style="background-image: url(picture/bg4.jpg)">
    <div class="container">
        <div class="row align-items-center small-screen">
            <div class="col-10 col-sm-12 position-relative page-title-extra-large">
                <h1 class="alt-font text-dark-gray mb-10px ls-minus-1px">Video Gallery</h1>
                <h2 class="mb-0 xs-w-85 text-dark-gray">Watch training moments and transformations.</h2>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->

<!-- start video gallery section -->
<section class="pt-5">
    <div class="container">
        <div class="row">
        @forelse($youtubeLinks as $link)
            @php
                preg_match('/(?:v=|\/)([0-9A-Za-z_-]{11}).*/', $link->link, $matches);
                $videoId = $matches[1] ?? null;
            @endphp

            @if($videoId)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="ratio ratio-16x9">
                        <iframe
                            src="https://www.youtube.com/embed/{{ $videoId }}"
                            title="{{ $link->title ?? 'Video' }}"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div> 
                    <h6 class="text-center mt-2">{{ $link->title }}</h6>
                </div>
            @else
                <div class="col-12 text-danger">Invalid YouTube Link</div>
            @endif
        @empty
            <div class="col-12 text-center">
                <p>No videos available right now.</p>
            </div>
        @endforelse
        </div>
    </div>
</section>
<!-- end video gallery section -->

@endsection
