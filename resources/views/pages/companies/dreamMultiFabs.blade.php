@extends('master')
@section('title','Dream Conversion')
@section('content')

    <div class="mar-top-100 mb-5">
        <div class="row">
            <div class="col-md-12">
                <img src="{{ asset('assets/images/random/banner-2.jpg') }}" height="400" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="text-center mb-5" style="color: #3c56a6">DREAM MULTI FABS LTD.</h1>
        <div class="row">
            <div class="col-md-8">
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,
                    a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage.and going through the cites of the word
                    in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/images/random/banner1.jpg') }}" alt="">
            </div>
        </div>
    </div>
    @include('includes.footer')
@endsection
