@extends('master')
@section('title','About')
@section('gallery','active_nav')
@section('content')
    <div class="mar-top-100 mb-5">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('assets/images/random/banner-2.jpg') }}" height="400" alt="">
                <span class="top_banner_text">Gallery</span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <a href="{{ asset('assets/images/random/banner2.png') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 mb-3">
                <img src="{{ asset('assets/images/random/banner2.png') }}" class="img-fluid rounded">
            </a>
            <a href="{{ asset('assets/images/random/banner3.jpg') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 mb-3">
                <img src="{{ asset('assets/images/random/banner3.jpg') }}" class="img-fluid rounded">
            </a>
            <a href="{{ asset('assets/images/random/banner1.jpg') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 mb-3">
                <img src="{{ asset('assets/images/random/banner1.jpg') }}" class="img-fluid rounded">
            </a>
        </div>
        <div class="row">
            <a href="{{ asset('assets/images/random/banner3.jpg') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 mb-3">
                <img src="{{ asset('assets/images/random/banner3.jpg') }}" class="img-fluid rounded">
            </a>
            <a href="{{ asset('assets/images/random/banner1.jpg') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 mb-3">
                <img src="{{ asset('assets/images/random/banner1.jpg') }}" class="img-fluid rounded">
            </a>
            <a href="{{ asset('assets/images/random/banner2.png') }}" data-toggle="lightbox" data-gallery="gallery" class="col-md-4 mb-3">
                <img src="{{ asset('assets/images/random/banner2.png') }}" class="img-fluid rounded">
            </a>
        </div>
    </div>
    @include('includes.footer')
    <script>
        $(document).on("click", '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
@endsection
