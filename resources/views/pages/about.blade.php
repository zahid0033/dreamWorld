@extends('master')
@section('title','About')
@section('about','active_nav')
@section('content')
    <div class="mar-top-80">
        <img src="{{ asset('assets/images/random/banner-2.jpg') }}" height="350" alt="">
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="text-center title"> Mission</div>
                <p class="text-justify">It is a long established fact that a reader will be distracted by the readable content
                    of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                    distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
                    Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a
                    search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over
                    the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                </p>
            </div>
            <div class="col-md-6">
                <img class="mission" src="{{ asset('assets/images/random/mission.png') }}" alt="mission" style="width: 80%;margin-top: 5em;">
            </div>

            <div class="col-md-6">
                <img class="vision" src="{{ asset('assets/images/random/vision.png') }}" alt="vision" style="width: 80%;margin-top: 5em;">
            </div>
            <div class="col-md-6">
                <div class="text-center title">Vision</div>
                <p class="text-justify">It is a long established fact that a reader will be distracted by the readable content of a page when looking
                    at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
                    as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing
                    packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum'
                    will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                    accident, sometimes on purpose (injected humour and the like).
                </p>
            </div>
        </div>
    </div>

    @include('includes.footer')
@endsection
