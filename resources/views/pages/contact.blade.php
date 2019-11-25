@extends('master')
@section('title','Contact')
@section('contact','active_nav')
@section('content')
    <div class="mar-top-100 mb-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d913.1102133249326!2d90.41066453487738!3d23.731653628290804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8f56eb9cebd%3A0xbf3f07c77382cb81!2sEnergy%2B%20Electric%20%26%20Electronics%20Pvt.%20Ltd.!5e0!3m2!1sen!2sbd!4v1574664368586!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>

    <div class="container text-center">
        <h1 class="heading mt-3 mb-5"></h1>
        <div class="row margin_top">

            <div class="col-md-6">
                <form>
                    <input name="name" type="text" class="feedback-input" placeholder="Name">
                    <input name="email" type="text" class="feedback-input" placeholder="Email">
                    <textarea name="text" class="feedback-input" placeholder="Message"></textarea>
                    <input type="submit" class="submit" value="SUBMIT">
                </form>
            </div>
            <div class="col-md-6">
                <div class="contact_list">
                    <ul>
                        <li>
                            <span><i class="fas fa-map-marked-alt"></i></span>
                            <span>: Israt Tower, 6 Purana Paltan, Lift-6, LEvel-6, Dhaka-1000</span>
                        </li>
                        <li>
                            <span><i class="fas fa-envelope-open-text"></i></span>
                            <span>: dreamworld@gmail.com</span>
                        </li>
                        <li>
                            <span><i class="fas fa-phone"></i></span>
                            <span>: 02-55110746</span>
                        </li>
                        <li>
                            <span><i class="fas fa-mobile-alt"></i></span>
                            <span>: 01715-731054</span>
                        </li>
                        <li>
                            <span><i class="fas fa-mobile-alt"></i></span>
                            <span>: 01978-665140-50</span>
                        </li>
                        <li>
                            <span><i class="fas fa-mobile-alt"></i></span>
                            <span>: 01978-665153-56</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    @include('includes.footer')
@endsection

