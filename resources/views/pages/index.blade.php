@extends('master')
@section('title','Home')
@section('home','active_nav')
@section('content')

    <main>
        <div class="vertical-slider">
            <div class="slide vertical-slide">

                <div class="slide-content">
{{--                    <div class="horizontal-slider">--}}
{{--                        <div class="slide">--}}
{{--                            <div class="slide-content">--}}
{{--                                <h1>Vertical Slide #1</h1>--}}
{{--                                <h1>Horizontal Slide #1</h1>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="slide">--}}
{{--                            <div class="slide-content">--}}
{{--                                <h1>Vertical Slide #1</h1>--}}
{{--                                <h1>Horizontal Slide #2</h1>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="slide">--}}
{{--                            <div class="slide-content">--}}
{{--                                <h1>Vertical Slide #1</h1>--}}
{{--                                <h1>Horizontal Slide #3</h1>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="slide">--}}
{{--                            <div class="slide-content">--}}
{{--                                <h1>Vertical Slide #1</h1>--}}
{{--                                <h1>Horizontal Slide #4</h1>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                <div class="container">
                    <div class="row">
                        <div class="col-md-6"><h2>Hello World</h2></div>
                        <div class="col-md-6"><h2>Hello World</h2></div>
                    </div>
                </div>


                </div>
            </div>
            <div class="slide vertical-slide">
                <div class="slide-content p-5">
                    <h1 class="aboutus-title p-5 text-center">About Us</h1>
                    <div class="container p-5">
                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="aboutus mt-5">

                                    <p class="aboutus-text">Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in.</p>
                                    <p class="aboutus-text">This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem</p>

                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="aboutus-banner">
                                    <img src="{{ asset('assets/images/logo/dreamworld-logo.png') }}" alt="" style="width: 100%">
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
                                <div class="mb-5">
                                    <div class="row">
                                        <div class="col-3 col-md-3"><img src="{{ asset('assets/images/logo/company1.png') }}" alt=""></div>
                                        <div class="col-9 col-md-9">
                                            <span class="title">Pixel Engineering & Consultancy LTD.</span>
                                            <p>Dream world corporation is the largest the company </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-5">
                                    <div class="row">
                                        <div class="col-3 col-md-3"><img src="{{ asset('assets/images/logo/company3.png') }}" alt=""></div>
                                        <div class="col-9 col-md-9">
                                            <span class="title">Dream Multi Fabs ltd.</span>
                                            <p>Dream world corporation is the largest the company </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-5">
                                    <div class="row">
                                        <div class="col-3 col-md-3"><img src="{{ asset('assets/images/logo/company2.png') }}" alt=""></div>
                                        <div class="col-9 col-md-9">
                                            <span class="title">Dream Steel Bd.</span>
                                            <p>Dream world corporation is the largest the company </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div>

                                </div>
                                <div class="text-center" style="margin-top: 6em">
                                    <img src="{{ asset('assets/images/logo/dreamworld-logo.png') }}" style="width: 20%;" alt="">
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
                                        <div class="col-9 col-md-9">
                                            <span class="title">Pixel Engineering & Consultancy LTD.</span>
                                            <p>Dream world corporation is the largest the company </p>
                                        </div>
                                        <div class="col-3 col-md-3"><img src="{{ asset('assets/images/logo/company3.png') }}" alt=""></div>
                                    </div>
                                </div>
                                <div class="mb-5" style="text-align: right">
                                    <div class="row">
                                        <div class="col-9 col-md-9">
                                            <span class="title">Dream Energy</span>
                                            <p>Dream world corporation is the largest the company </p>
                                        </div>
                                        <div class="col-3 col-md-3"><img src="{{ asset('assets/images/logo/company4.png') }}" alt=""></div>
                                    </div>
                                </div>
                                <div class="mb-5" style="text-align: right">
                                    <div class="row">
                                        <div class="col-9 col-md-9">
                                            <span class="title">Dream LPG & CNG Conversion Workshop</span>
                                            <p>Dream world corporation is the largest the company </p>
                                        </div>
                                        <div class="col-3 col-md-3"><img src="{{ asset('assets/images/logo/company3.png') }}" alt=""></div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="slide vertical-slide">
                <div class="slide-content">
                    <h1 class="p-5">Vertical Slide #3</h1>
                </div>
            </div>
            <div class="slide vertical-slide">
                <div class="slide-content">
                    <h1 class="p-5">Vertical Slide #5</h1>
{{--                    @include('includes.footer')--}}
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
    </script>
@endsection
