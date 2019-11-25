@extends('master')
@section('title','Our Products')
@section('ourProducts','active_nav')
@section('content')
    <div class="mar-top-100 mb-5">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('assets/images/random/our-products.png') }}" height="400" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/random/station.jpg') }}" alt="">
                <p>Gas Station</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/random/station.jpg') }}" alt="">
                <p>Gas Station</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/random/station.jpg') }}" alt="">
                <p>Gas Station</p>
            </div>

            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/random/station.jpg') }}" alt="">
                <p>Gas Station</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/random/station.jpg') }}" alt="">
                <p>Gas Station</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/random/station.jpg') }}" alt="">
                <p>Gas Station</p>
            </div>

            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/random/station.jpg') }}" alt="">
                <p>Gas Station</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/random/station.jpg') }}" alt="">
                <p>Gas Station</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="{{ asset('assets/images/random/station.jpg') }}" alt="">
                <p>Gas Station</p>
            </div>
        </div>
    </div>

@include('includes.footer')

@endsection
