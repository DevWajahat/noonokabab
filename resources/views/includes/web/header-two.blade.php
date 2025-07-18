<header id="header-two">
    <div class="container-two">
        <div class="row justify-content-between align-items-center">
            <div class="col-3 col-xl-2 col-lg-2">
                <div class="logo-area">
                    <a href="{{ route('index') }}">
                        <img class="img-fluid header-logo" src="{{ asset('assets/web/images/noon-o-kabab-logo.png') }}"
                            alt="">
                    </a>
                </div>
            </div>
            <div class="col-12 col-xl-7 col-lg-7 ordr-1">
                <nav class="header-nav-area">
                    <ul class="header-two-nav">
                        <button class="hd-mob-close"><i class="fa-solid fa-circle-xmark"></i></button>
                        <li class="link-area">
                            <a class="link" href="{{ route('index') }}">
                                Home
                            </a>
                        </li>
                        <li class="link-area">
                            <a class="link" href="{{ route('specials') }}">
                                Specials
                            </a>
                        </li>


                            <li class="link-area"><a href="#" class="link orderRoute" style="color:#fff !important">Order</a></li>

                        <li class="link-area">
                            <a class="link" href="{{ route('dine') }}">
                                Dine-In
                            </a>
                        </li>
                        <li class="link-area">
                            <a class="link" href="{{ route('catering') }}">
                                Catering
                            </a>
                        </li>
                        <li class="link-area link-area-hover position-relative">
                            <div class="mob-link-dropdown">
                                <a class="link dropdown" href="{{ route('story') }}">
                                    Our Story
                                    <i class="fa-solid fa-angle-down"></i>
                                </a>
                                <button class="mob-dropdown-btn">
                                    <i class="fa-solid fa-angle-down"></i>
                                </button>
                            </div>
                            <ul class="header-hover-dropdown">
                                <li class="drop-li main-li">
                                    <a class="dropdown-item link-active" href="{{ route('careers') }}">Careers</a>
                                </li>
                                <li class="drop-li main-li">
                                    <a class="dropdown-item link-active" href="{{ route('gallery') }}">Photo Gallery</a>
                                </li>
                                <li class="drop-li main-li">
                                    <a class="dropdown-item link-active" href="{{ route('reviews.media') }}">Media
                                        Reviews</a>
                                </li>
                                <li class="drop-li main-li">
                                    <a class="dropdown-item link-active" href="{{ route('reviews.guest') }}">Guest
                                        Reviews</a>
                                </li>
                            </ul>
                        </li>
                        <li class="link-area">
                            <a class="link" href="{{ route('contact') }}">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-9 col-xl-3 col-lg-3">
                <div class="header-buttons">
                    <div class="header-links ">
                        <button type="button" class="head-location-btn">
                            <div class="">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="">
                                <span class="spn-1">Change Location</span>
                                @if (!empty(session('location')['branch']))
                                    <span
                                        class="spn-2 locate-value">{{ session('location')['branch']['0']['name'] }}</span>
                                @else
                                    <span class="spn-2 locate-value">Change
                                        Location</span>
                                @endif
                            </div>
                        </button>
                    </div>
                    @auth
                        <div class="header-links ">
                            <a href="#"><i class="fa-solid fa-user"></i>{{ auth()->user()->first_name }}</a>
                        </div>

                        <div class="header-links ">
                            <a href="{{ route('logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                        </div>
                    @else
                        <div class="header-links ">
                            <a href="{{ route('login') }}"><i class="fa-solid fa-user"></i></a>
                        </div>
                    @endauth
                    <div class="header-links ">
                        <a href="{{ route('checkout') }}"><i class="fa-solid fa-basket-shopping"></i></a>
                        <span id="cartItemValue">0</span>
                    </div>
                    <div class="header-links">
                        <button type="button" class="headtwo-menu-btn"><i class="fa-solid fa-bars"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var currentUrl = window.location.pathname;

        // Select all anchor elements inside list items in the header navigation
        var navLinks = document.querySelectorAll('.header-two-nav li a');

        // Loop through each anchor element
        navLinks.forEach(function(navLink) {
            var navHref = navLink.getAttribute('href');

            // Check if the current URL includes the anchor's href attribute
            if (currentUrl.includes(navHref)) {
                // Add 'active' class to the parent <li> of the anchor
                navLink.parentElement.classList.add('active');
            }
        });
    });
</script>


<script src="{{ asset('assets/web/js/jquery.js') }}"></script>


<script>
    $(".link-area-hover").mouseover(function() {
        $(this).find(".header-hover-dropdown").addClass("show");
    });

    $(".link-area-hover").mouseleave(function() {
        $(this).find(".header-hover-dropdown").removeClass("show");
    });


    $('.headtwo-menu-btn').click(function() {
        $('.header-two-nav').addClass('active')
    });
    $('.hd-mob-close').click(function() {
        $('.header-two-nav').removeClass('active')
    });
</script>
