@extends('layout.web.app')
@section('content')
    <section class="about-us-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="sing-img">
                    <img class="img-fluid" src="{{ asset('assets/web/images/sing.png') }}" alt="">
                </div>
                <div class="col-lg-5 col-12">
                    <div class="we-cater-box">
                        <div class="we-cater-title">
                            <h2>We Cater</h2>
                            <p>Bring the magic of Persia to your next event! <br>
                                We customise the festive experience from menu decisions to tastings. Call to inquire <br>
                                Call (773) 279 8899 to inquire.</p>
                        </div>
                        <div class="w-c-button ">
                            <a class="primary-a orderRoute" href="#">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-12">
                    <div class="our-story-box">
                        <div class="we-cater-title">
                            <h2 class="gold-c">Our Story</h2>
                            <p class="white-c">From grilled Tandoori chicken burgers to simple chicken burgers with garlic
                                rosemary mayonnaise, put a new twist on an old barbecue favourite with these unique and
                                chicken burger recipes. Do you see any Teletubbies in here? Do you see a slender plastic tag
                                clipped to my shirt with my name printed.</p>
                        </div>
                        <div class="o-story-button">
                            <a class="primary-a" href="our-stroy.php">FIND OUT MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dishes">
        <div class="container-fluid">
            <div class="row d-slider">

                @forelse ($categories as $category)
                    <div class="col-4">
                        <div class="dishes-order-box">
                            <div class="d-img">
                                <img class="img-fluid" src="{{ asset('assets/web/images/sec-dish-1.png') }}" alt="">
                            </div>
                            <div class="d-btn">
                                <p class="myDIV">{{ $category->name }}</p>
                                <a href="#" class="hide orderRoute">ORDER NOW</a>
                                <!-- <button class="hide primary-a"></button> -->
                            </div>
                        </div>
                    </div>

                @empty
                @endforelse


                {{-- <div class="col-4">
                        <div class="dishes-order-box">
                            <div class="d-img">
                                <img class="img-fluid" src="{{ asset("assets/images/sec-dish-2.png") }}" alt="">
                            </div>
                            <div class="d-btn">
                                <p class="myDIV">Main Course Deal</p>
                                <a href="order.php" class="hide">ORDER NOW</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="dishes-order-box">
                            <div class="d-img">
                                <img class="img-fluid" src="{{ asset("assets/images/sec-dish-3.png") }}" alt="">
                            </div>
                            <div class="d-btn">
                                <p class="myDIV">Dessert Package</p>
                                <a href="#" class="hide orderRoute">ORDER NOW</a>
                            </div>
                        </div>
                    </div> --}}
            </div>
        </div>
    </section>
    <section class="book-table">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-12">
                    <div class="b-tble-area">
                        <div class="b-tbl-detail">
                            <h2>Delivery & Order</h2>
                            <p>We are Serving Now!</p>
                            <strong>All orders will be ready for pick up from our Kedzie location. </strong>
                            <a class="order-nmb" href="tel:(773) 279-889">(773) 279-889</a>
                            <a href="mailto:info@yourwebadd.com"> info@yourwebadd.com </a>
                            <h1></h1>
                        </div>
                        <div class="b-tbl-form">
                            <div class="side-pot-img">
                                <img src="{{ asset('assets/web/images/pot.png') }}" alt="">
                            </div>
                            <form action="">
                                <div class="booktable-title">
                                    <h2>Book Table</h2>
                                </div>
                                <div class="bt-input-area">
                                    <div class="bt-in">
                                        <input type="text" placeholder="Name">
                                    </div>
                                    <div class="bt-in">
                                        <input type="number" placeholder="Phone Number">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>2 person </option>
                                            <option value="1">3 person</option>
                                            <option value="2">4 person</option>
                                            <option value="3">5 person</option>
                                        </select>
                                    </div>
                                    <div class="bt-in">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Venue </option>
                                            <option value="1">3 person</option>
                                            <option value="2">4 person</option>
                                            <option value="3">5 person</option>
                                        </select>
                                        <div class="form-group">
                                            <div class='input-group date' id='datetimepicker1'>
                                                <input type="datetime-local" class="" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="bt-in">
                                        <button class="primary-a">BOOK NOW</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-subscribe-email />
    </main>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var currentUrl = window.location.pathname;

            // Select all anchor elements inside list items in the header navigation
            var navLinks = document.querySelectorAll('.header-nav li a');

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

    <script>
        $(".link-area-hover").mouseover(function() {
            $(this).find(".header-hover-dropdown").addClass("show");
        });

        $(".link-area-hover").mouseleave(function() {
            $(this).find(".header-hover-dropdown").removeClass("show");
        });
    </script>
    <script>
        $('.headtwo-menu-btn').click(function() {
            $('.header-nav').addClass('active')
        });
        $('.hd-mob-close').click(function() {
            $('.header-nav').removeClass('active')
        });
    </script>
@endpush
