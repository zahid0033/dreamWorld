@extends('master')
@section('title','Career')
@section('career','active_nav')
@section('content')
    <div class="mar-top-80 mb-5">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('assets/images/random/whyus.jpg') }}" height="400" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb-3">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/random/banner2.png') }}" alt="">
            </div>
            <div class="col-md-8">
                <h4>Provide service so fast</h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,</p>
                <a href="#" class="btn btn-info">Get your service</a>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/random/banner2.png') }}" alt="">
            </div>
            <div class="col-md-8">
                <h4>Provide service so fast</h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,</p>
                <a href="#" class="btn btn-info">Get your service</a>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/random/banner2.png') }}" alt="">
            </div>
            <div class="col-md-8">
                <h4>Provide service so fast</h4>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                    Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,</p>
                <a href="#" class="btn btn-info">Get your service</a>
            </div>
        </div>
    </div>

    @include('includes.footer')
@endsection
