<body class="bg-white">
    <main>
        <div class="banner-plus-header-area">
            <div class="container-fluid">
                <div class="main-hd">
                    <div class="main-side-content">
                        <div class="banner-side-cont">
                            <a href="{{ route('index') }}">
                                <div class="circle-logo">
                                    <img src="assets/images/noon-o-kabab-logo.png" alt="">
                                </div>
                            </a>
                            <div class="side-cont-det">
                                <h1>NOON O KABAB</h1>
                                <span>Perfectly Persian</span>
                                <p>Casual eatery serving a Persian menu inspired by family recipes including grilled
                                    kebabs & wraps.</p>
                                <a class="primary-a start-order-btn" href="{{ route('menu.delivery') }}">START ORDER</a>
                            </div>
                        </div>
                    </div>
                    <div class="main-side-header">
                        <header id="header-one">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="mob-logo">
                                                <a href=".">
                                                    <img class="img-fluid header-logo"
                                                        src="./assets/images/noon-o-kabab-logo.png" alt="">
                                                </a>
                                            </div>
                                            <div class="">
                                                <ul class="header-nav">
                                                    <button class="hd-mob-close"><i
                                                            class="fa-solid fa-circle-xmark"></i></button>
                                                    <li><a href="index.php">Home</a></li>
                                                    <li><a href="{{ route('specials') }}">Specials</a></li>
                                                    <li><a href="{{ route('menu.delivery') }}">Order</a></li>
                                                    <li><a href="{{ route('dine') }}">Dine-In</a></li>
                                                    <li><a href="{{ route('catering') }}">Catering</a></li>
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
                                                                <a class="dropdown-item link-active"
                                                                    href="{{ route('careers') }}">Careers</a>
                                                            </li>
                                                            <li class="drop-li main-li">
                                                                <a class="dropdown-item link-active"
                                                                    href="{{ route('gallery') }}">Photo Gallery</a>
                                                            </li>
                                                            <li class="drop-li main-li">
                                                                <a class="dropdown-item link-active"
                                                                    href="{{ route('reviews.media') }}">Media
                                                                    Reviews</a>
                                                            </li>
                                                            <li class="drop-li main-li">
                                                                <a class="dropdown-item link-active"
                                                                    href="{{ route('reviews.guest') }}">Guest
                                                                    Reviews</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                                </ul>
                                            </div>
                                            <div class="">
                                                <div class="header-buttons">
                                                    <div class="header-links ">
                                                        <button type="button" class="head-location-btn">
                                                            <div class="">
                                                                <i class="fa-solid fa-location-dot"></i>
                                                            </div>
                                                            <div class="">
                                                                <span class="spn-1">Change Location</span>
                                                                <span class="spn-2 locate-value">Change Location</span>
                                                            </div>
                                                        </button>
                                                    </div>
                                                    @auth
                                                        <div class="header-links ">
                                                            <a href="#"><i
                                                                    class="fa-solid fa-user"></i>{{ auth()->user()->first_name }}</a>
                                                        </div>
                                                        <div class="header-links ">
                                                            <a href="{{ route('logout') }}">Logout</a>
                                                        </div>
                                                    @else
                                                        <div class="header-links ">
                                                            <a href="{{ route('login') }}"><i
                                                                    class="fa-solid fa-user"></i></a>
                                                        </div>
                                                    @endauth
                                                    <div class="header-links ">
                                                        <a href="{{ route('checkout') }}"><i
                                                                class="fa-solid fa-basket-shopping"></i></a>
                                                        <span>0</span>
                                                    </div>
                                                    <div class="header-links">
                                                        <button type="button" class="headtwo-menu-btn"><i
                                                                class="fa-solid fa-bars"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </header>
                        <!-- <div class="hero-banner"> -->
                        <!-- <div class="siderlayer">
                                <video id="myVideo" muted loop>
                                    <source src="./assets/images/banner-video.mov" type="video/quicktime">
                                    <source src="./assets/images/banner-video.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div> -->
                        <div class="siderlayer">
                            <img src="assets/images/hero-banner.png" alt="">
                        </div>
                        <!-- <div class="siderlayer">
                                <img src="assets/images/hero-banner.png" alt="">
                            </div>
                            <div class="siderlayer">
                                <img src="assets/images/hero-banner.png" alt="">
                            </div> -->

                    </div>
                </div>
            </div>
        </div>
        <div class="side-design">
            <img src="assets/images/main-side-design.png" alt="">
        </div>
        </div>
