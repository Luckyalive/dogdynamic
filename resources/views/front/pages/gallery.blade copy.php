@extends('front.layout.main-layout')

@section('content')
<section class="page-title cover-background" style="background-image: url('{{ asset('picture/bg4.jpg') }}')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <h1 class="text-dark-gray">Gallery</h1>
                <h2 class="mb-0">Explore our image collections</h2>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
       <div class="row">
    @forelse($items as $gallery)
        <div class="col-md-4 mb-4">
            <div class="card">
                <a href="{{ asset('web/media/sm/' . $gallery->image) }}" data-group="lightbox" title="{{ $gallery->name }}">
                    <img src="{{ asset('web/media/sm/' . $gallery->image) }}" alt="{{ $gallery->name }}" class="card-img-top">
                </a>
                <div class="card-body">
                    <h5 class="card-title text-center">{{ $gallery->name }}</h5>
                </div>
            </div>
        </div>
    @empty
        <p class="text-center">No gallery items found.</p>
    @endforelse
</div>

    </div>
</section>
@endsection
