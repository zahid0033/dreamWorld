
    <nav class="navbar fixed navbar-expand-lg navbar-light nav-bar bg-nav" style="height: 70px">
        <a href="{{ route('pages.index') }}" ><img class="logo" src="{{ asset('assets/images/logo/dreamworld-logo.png') }}" alt="logo"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 nav-style">
                <li class="nav-item @yield('home')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.index') }}">Home</a>
                </li>
                <li class="nav-item  @yield('about')">
                    <a class="nav-link nav_item_design" href="">About Us</a>
                </li>
                <li class="nav-item  @yield('lpg_station')">
                    <a class="nav-link nav_item_design" href="">Our Companies</a>
                </li>
                <li class="nav-item  @yield('lpg_station')">
                    <a class="nav-link nav_item_design" href="">Gallery</a>
                </li>
                <li class="nav-item  @yield('lpg_station')">
                    <a class="nav-link nav_item_design" href="">Career</a>
                </li>
                <li class="nav-item  @yield('contact')">
                    <a class="nav-link nav_item_design" href="">Contact Us</a>
                </li>




            </ul>
            <ul class="navbar-nav navbar-right">

            </ul>

        </div>
    </nav>
