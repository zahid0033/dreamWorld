@extends('master')
@section('title','Our Company')
@section('ourCompany','active_nav')
@section('content')
    <div class="mar-top-100">
        <img src="{{ asset('assets/images/random/banner-2.jpg') }}" height="400" alt="">
        <span class="top_banner_text">Our Companies</span>
    </div>


        <h1 class="title p-5 text-center">Sister Concern</h1>
        <div class="container">
            <div class="row companies">

                <div class="col-md-4">
                    <div class="mb-5" >
                        <div class="row">
                            <div class="col-4 col-md-4"><img src="{{ asset('assets/images/logo/logo2.png') }}" alt=""></div>
                            <div class="col-8 col-md-8">
                                <span class="title"><a href="http://dreamlpg.com/">Dream LPG BD.</a></span>
                                <p>Dream world corporation is the largest the company </p>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <div class="row">
                            <div class="col-4 col-md-4"><img src="{{ asset('assets/images/logo/Dream-Multi-fabs-ltd.png') }}" alt=""></div>
                            <div class="col-8 col-md-8">
                                <span class="title"><a href="{{ route('pages.dreamMultiFabs') }}">Dream Multi Fabs ltd.</a></span>
                                <p>Dream world corporation is the largest the company </p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="row">
                            <div class="col-4 col-md-4"><img src="{{ asset('assets/images/logo/company2.png') }}" alt=""></div>
                            <div class="col-8 col-md-8">
                                <span class="title"><a href="{{ route('pages.dreamSteel') }}">Dream Steel Bd.</a></span>
                                <p>Dream world corporation is the largest the company </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div>

                    </div>
                    <div class="text-center" style="margin-top: 6em">
                        <img src="{{ asset('assets/images/logo/Dream-world-corporation.png') }}" style="width: 50%;" alt="">
                        <div>
                            <span class="title">Dream World Corporation</span>
                            <p>Dream world corporation is the largest the company </p>
                        </div>
                    </div>
                    <div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-5" style="text-align: right">
                        <div class="row">
                            <div class="col-8 col-md-8">
                                <span class="title"><a href="{{ route('pages.dreamConversion') }}">Dream LPG & CNG Conversion Workshop</a></span>
                                <p>Dream world corporation is the largest the company </p>
                            </div>
                            <div class="col-4 col-md-4"><img src="{{ asset('assets/images/logo/Dream-world-corporation-1.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class="mb-5" style="text-align: right">
                        <div class="row">
                            <div class="col-8 col-md-8">
                                <span class="title"><a href="{{ route('pages.dreamEnergy') }}">Dream Energy</a></span>
                                <p>Dream world corporation is the largest the company </p>
                            </div>
                            <div class="col-4 col-md-4"><img src="{{ asset('assets/images/logo/company4.png') }}" alt=""></div>
                        </div>
                    </div>
                    <div class="mb-5" style="text-align: right">
                        <div class="row">
                            <div class="col-8 col-md-8">
                                <span class="title"><a href="{{ route('pages.pixelEngineering') }}">Pixel Engineering & Consultancy LTD.</a></span>
                                <p>Dream world corporation is the largest the company </p>
                            </div>
                            <div class="col-4 col-md-4">
                                <img src="{{ asset('assets/images/logo/company1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>








@include('includes.footer')
@endsection
