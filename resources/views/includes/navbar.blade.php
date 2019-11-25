
    <nav class="navbar fixed navbar-expand-lg navbar-light nav-bar bg-nav" style="height: 100px">
        <a href="{{ route('pages.index') }}">
            <img class="logo" src="{{ asset('assets/images/logo/dreamSmall.png') }}" alt="logo"/>
            <span style="font-size: 20px;font-weight: 800;text-decoration: none;color: #1c4cda;font-family: cursive;">Dream World Corporation</span>
        </a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 nav-style">
                <li class="nav-item @yield('home')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.index') }}">Home</a>
                </li>
                <li class="nav-item  @yield('about')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.about') }}">About Us</a>
                </li>
                <li class="nav-item  @yield('ourCompany')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.ourCompany') }}">Our Companies</a>
                </li>
                <li class="nav-item  @yield('ourProducts')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.ourProducts') }}">Our Products</a>
                </li>
                <li class="nav-item  @yield('gallery')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.gallery') }}">Gallery</a>
                </li>
                <li class="nav-item  @yield('career')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.career') }}">Career</a>
                </li>
                <li class="nav-item  @yield('contact')">
                    <a class="nav-link nav_item_design" href="{{ route('pages.contact') }}">Contact Us</a>
                </li>




            </ul>
            <ul class="navbar-nav navbar-right">

            </ul>

        </div>
    </nav>
