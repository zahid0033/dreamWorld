@extends('master')
@section('title','Home')
@section('home','active_nav')
@section('content')

    <main>
        <div class="vertical-slider">
            <div class="slide vertical-slide">

                <div class="slide-content">


                    <div class="banner">
                        <div class="owl-carousel owl-theme " id="carousel01">
                            <div class="item">
                                <div class="banner-img">
                                    <img src="{{asset('assets/images/random/banner1.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="banner-img">
                                    <img src="{{asset('assets/images/random/banner2.png')}}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="banner-img">
                                    <img src="{{asset('assets/images/random/banner3.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="banner-img">
                                    <img src="{{asset('assets/images/random/banner4.jpg')}}" alt="">
                                </div>
                            </div>
                            <div class="item">
                                <div class="banner-img">
                                    <img src="{{asset('assets/images/random/banner1.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="slide vertical-slide">
                <div class="slide-content" style="background: #3853a45e;height: 100vh">
                    <h1 class="title p-5 text-center white" style="margin-top: 35px">Welcome to <span style="color: #3853a4;text-shadow: 0px 1px 5px #fdfdfd;">Dream World</span></h1>

                    <div class="container owners">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8 mt-5">
                                <div class="text-center">
                                    {{--                                    <img src="{{ asset('assets/images/random/client.jpg') }}" alt="" style="height: 200px; width: 200px">--}}
                                    <h1 class="white"><b>Rifat Alam Chowdhury</b></h1>
                                    <h3 class="white"><b>Founder Chairman</b></h3>
                                </div>
                                <blockquote class="white">
                                    <p> offers great learning and insights to marketing professionals. Best of all is the team offers great learning and insights to marketing professionals.  at WARC Plus, who provide bespoke dossiers filled with the most relevant articles and case studies in response to our unique and specific questions and problems.</p>
                                </blockquote>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="slide vertical-slide">
                <div class="slide-content p-5">
                    <h1 class="aboutus-title p-5 title text-center">About Us</h1>
                    <div class="container p-5">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="aboutus">

                                    <p class="aboutus-text text-justify">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
                                    <p class="aboutus-text text-justify">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="aboutus-banner">
                                    <img src="{{ asset('assets/images/logo/Dream-world-corporation.png') }}" alt="" style="width: 100%">
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-6 col-xs-12">
                                <div class="feature">
                                    <div class="feature-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="fas fa-cog icon"></span>
                                            </div>
                                            <div class="feature-content">
                                                <h4>Work with heart</h4>
                                                <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="fas fa-cog icon"></span>
                                            </div>
                                            <div class="feature-content">
                                                <h4>Reliable services</h4>
                                                <p>Donec vitae sapien ut libero venenatis faucibu. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="feature-box">
                                        <div class="clearfix">
                                            <div class="iconset">
                                                <span class="fas fa-cog icon"></span>
                                            </div>
                                            <div class="feature-content">
                                                <h4>Great support</h4>
                                                <p>Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide vertical-slide">
                <div class="slide-content p-5">
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
                                        <span class="title" style="color: #4059a7">Dream World Corporation</span>
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
                </div>
            </div>
            <div class="slide vertical-slide">
                <div class="slide-content" style="background: #050608c4;height: 100vh;">

                    <div class="container history">
                        <div class="row">
                            <div class="col-md-8">
                                <h1 class="white">Our History</h1>
                                <p class="white text-justify">In olden times dating back to late sixties of the last century during the erstwhile Pakistan
                                    period the ancestors of the present Directors of the Group started trading & contractual business on a small
                                    scale at their native district Rajshahi situated at the northern part of Bangladesh</p>
                            </div>
                            <div class="col-md-4">
                                <img src="{{ asset('assets/images/logo/Dream-world-corporation.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide vertical-slide">
                <div class="slide-content" style="background: #005a759e;height: 100vh;">

                    <div class="container history">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/images/logo/Dream-world-corporation.png') }}" class="history-img" alt="">
                            </div>
                            <div class="col-md-8">
                                <h1 class="white text-right">Brands We Offer</h1>
                                <div class="banner">
                                    <div class="owl-carousel owl-theme " id="carousel02">
                                        <div class="item">

                                                <img src="{{asset('assets/images/logo/company1.png')}}" alt="">

                                        </div>
                                        <div class="item">

                                                <img src="{{asset('assets/images/logo/company4.png')}}" alt="">

                                        </div>
                                        <div class="item">

                                                <img src="{{asset('assets/images/logo/company1.png')}}" alt="">

                                        </div>
                                        <div class="item">

                                                <img src="{{asset('assets/images/logo/company4.png')}}" alt="">

                                        </div>
                                        <div class="item">

                                                <img src="{{asset('assets/images/logo/company1.png')}}" alt="">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide vertical-slide">
                <div class="slide-content">
                    <h1 class="title p-5 text-center" style="margin-top: 15px">Get in Touch</h1>
                    @include('includes.footer')
                </div>
            </div>
        </div>
    </main>

{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>


    <script>
        (function($) {
            $(function() {
                $('.horizontal-slider').slick({
                    arrows: true,
                    dots: true,
                    infinite: true,
                });

                $('.vertical-slider').slick({
                    arrows: false,
                    dots: true,
                    edgeFriction: .5,
                    infinite: false,
                    vertical: true,
                    verticalSwiping: true,
                });

                $('.vertical-slider').mousewheel(function(e) {
                    if (e.deltaY < 0) {
                        if($(this).slick('slickCurrentSlide') == $(this).find('.slide').length - 1) {
                            return
                        }

                        e.preventDefault()
                        $(this).slick('slickNext')
                    } else {
                        if($(this).slick('slickCurrentSlide') == 0) {
                            return
                        }

                        e.preventDefault()
                        $(this).slick('slickPrev')
                    }
                });


            });
        }(jQuery));

        $('#carousel01').owlCarousel({
            rtl:false,
            loop:true,
            autoplay: true,
            dots: false,
            autoPlay:100,
            margin:10,
            nav:true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            // navText:  ['<span class="fas fa-chevron-left fa-2x"></span>','<span class="fas fa-chevron-right fa-2x"></span>'],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
        $('#carousel02').owlCarousel({
            rtl:false,
            loop:true,
            autoplay: true,
            dots: false,
            autoPlay:100,
            margin:10,
            nav:false,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            // navText:  ['<span class="fas fa-chevron-left fa-2x"></span>','<span class="fas fa-chevron-right fa-2x"></span>'],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                1000:{
                    items:4
                }
            }
        });
    </script>
@endsection
