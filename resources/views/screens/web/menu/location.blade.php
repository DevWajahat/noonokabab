@extends('layout.web.app')
@section('content')
    <main class="pickmain">
        <section class="">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-xxl-5 col-lg-7 col-12">
                        <div class="sign-board-area">
                            <div class="frame-border frame-t-left">
                                <img src="assets/images/frame-top-left.png" alt="">
                            </div>
                            <div class="frame-border frame-t-right">
                                <img src="assets/images/frame-top-right.png" alt="">
                            </div>
                            <div class="frame-border frame-b-left">
                                <img src="assets/images/frame-bottom-left.png" alt="">
                            </div>
                            <div class="frame-border frame-b-right">
                                <img src="assets/images/framer-bottom-right.png" alt="">
                            </div>
                            <div class="frame-logo circle-small-logo">
                                <img class="circle-logo" src="assets/images/circle-logo.png" alt="">
                                <a class="sign-back-btn" href="order.php"><i class="fa-solid fa-chevron-left"></i></a>
                                <div class="pick-tab-btn">
                                    <div class="mob-tab-btn">
                                        <div class="menu-btn"><i class="fa-solid fa-bars"></i></div>
                                    </div>
                                    <ul>
                                        <li class="locate-tab "><a href="delivery.php">DELIVERY</a></li>
                                        <li class=""><a href="takeout.php">TAKEOUT</a> </li>
                                        <li class=""><button type="button" class="order-via-btn">ORDER VIA</button>
                                        </li>
                                        <li class="locate-tab active">LOCATIONS</li>
                                        <li>
                                            <div class="mob-log color-gray"><a href="{{ route("login") }}">LOGIN/SIGNUP</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-main">
                                <div id="delivery" data-tab-content class="prod-slider ">
                                    <div class="location-title">
                                        <h2>Delivery:</h2>
                                    </div>
                                    <div class="pb-5">
                                        <div class="location-detail-box">
                                            <div class="locat-box">
                                                <div class="main-box-locate">
                                                    <div class="location-detail">
                                                        <h2>4701 N Kedzie Ave Chicago</h2>
                                                        <span><i class="fa-solid fa-location-dot"></i>4701 N Kedzie Ave
                                                            Chicago, IL 60625</span>
                                                        <span><i class="fa-solid fa-phone"></i> (773) 279-8899</span>
                                                        <p><i class="fa-solid fa-clock"></i> Open</p>
                                                    </div>
                                                    <div class="location-btn">
                                                        <a href="#"><i class="fa-solid fa-chevron-right"></i></a>
                                                    </div>
                                                </div>
                                                <!-- <div class="frame-btn odr-later">
                                                        <a href="pick-up.php">ORDER FOR LATER   </a>
                                                    </div> -->
                                            </div>
                                        </div>
                                        <div class="location-detail-box">
                                            <div class="locat-box">
                                                <div class="main-box-locate">
                                                    <div class="location-detail">
                                                        <h2>8821 W 87th St Hickory Hills</h2>
                                                        <span><i class="fa-solid fa-location-dot"></i> 8821 W 87th St
                                                            Hickory Hills, IL 60457</span>
                                                        <span><i class="fa-solid fa-phone"></i>(708) 741-7886</span>
                                                        <p><i class="fa-solid fa-clock"></i> Open</p>
                                                    </div>
                                                    <div class="location-btn">
                                                        <button><i class="fa-solid fa-chevron-right"></i></button>
                                                    </div>
                                                </div>
                                                <!-- <div class="frame-btn odr-later">
                                                        <a href="pick-up.php">ORDER FOR LATER   </a>
                                                    </div> -->
                                            </div>

                                        </div>
                                        <div class="location-detail-box">
                                            <div class="locat-box">
                                                <div class="main-box-locate">
                                                    <div class="location-detail">
                                                        <h2>244 Green Bay Rd Highwood</h2>
                                                        <span><i class="fa-solid fa-location-dot"></i> 244 Green Bay Rd
                                                            Highwood, IL 60040</span>
                                                        <span><i class="fa-solid fa-phone"></i>(630) 474-1420</span>
                                                        <p><i class="fa-solid fa-clock"></i> Closed</p>
                                                    </div>
                                                    <div class="location-btn">
                                                        <button><i class="fa-solid fa-chevron-right"></i></button>
                                                    </div>
                                                </div>
                                                <div class="frame-btn odr-later w-100">
                                                    <a href="pick-up.php">ORDER FOR LATER </a>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div id="location" data-tab-content class="prod-slider active">

                                    <div class="pb-5">
                                        <div class="location-detail-box">
                                            <div class="locat-box">
                                                <div class="main-box-locate">
                                                    <div class="location-detail">
                                                        <h2>Albany Park </h2>
                                                        <span><i class="fa-solid fa-location-dot"></i>4701 N Kedzie Ave
                                                            Chicago, IL 60625</span>
                                                        <span><i class="fa-solid fa-phone"></i>(773) 279-8899</span>
                                                        <p><i class="fa-solid fa-clock"></i>11:00 AM to 10:00 PM</p>
                                                    </div>
                                                    <div class="location-btn">
                                                        <!-- <a href="location-menu.php"><i class="fa-solid fa-chevron-right"></i></a> -->
                                                        <button><i class="fa-solid fa-chevron-right"></i></button>
                                                    </div>
                                                </div>
                                                <!-- <div class="frame-btn odr-later">
                                                        <a href="pick-up.php">ORDER FOR LATER   </a>
                                                    </div> -->
                                            </div>
                                        </div>
                                        <div class="location-detail-box">
                                            <div class="locat-box">
                                                <div class="main-box-locate">
                                                    <div class="location-detail">
                                                        <h2> Hickory Hills</h2>
                                                        <span><i class="fa-solid fa-location-dot"></i>8821 W 87th St Hickory
                                                            Hills, IL 60457</span>
                                                        <span><i class="fa-solid fa-phone"></i>(708) 741-7886</span>
                                                        <p><i class="fa-solid fa-clock"></i>11:00 AM to 10:00 PM</p>
                                                    </div>
                                                    <div class="location-btn">
                                                        <!-- <a href="location-menu.php"><i class="fa-solid fa-chevron-right"></i></a> -->
                                                        <button onclick="invoice()"><i
                                                                class="fa-solid fa-chevron-right"></i></button>
                                                    </div>
                                                </div>
                                                <!-- <div class="frame-btn odr-later">
                                                        <a href="pick-up.php">ORDER FOR LATER   </a>
                                                    </div> -->
                                            </div>
                                        </div>
                                        <div class="location-detail-box">
                                            <div class="locat-box">
                                                <div class="main-box-locate">
                                                    <div class="location-detail">
                                                        <h2>Highwood </h2>
                                                        <span><i class="fa-solid fa-location-dot"></i>244 Green Bay Rd
                                                            Highwood, IL 60040</span>
                                                        <span><i class="fa-solid fa-phone"></i>(630) 474-1420</span>
                                                        <p><i class="fa-solid fa-clock"></i>11:00 AM to 10:00 PM</p>
                                                    </div>
                                                    <div class="location-btn">
                                                        <!-- <a href="location-menu.php"><i class="fa-solid fa-chevron-right"></i></a> -->
                                                        <button><i class="fa-solid fa-chevron-right"></i></button>
                                                    </div>
                                                </div>
                                                <!-- <div class="frame-btn odr-later">
                                                        <a href="pick-up.php">ORDER FOR LATER   </a>
                                                    </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="mob-jus">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-lg-3 col-12 pos-res">
                        <div class="map-area">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2966.5462478097456!2d-87.71063812351261!3d41.96708035983784!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fcde54517898b%3A0xf4e2912d52f95446!2s4701%20N%20Kedzie%20Ave%2C%20Chicago%2C%20IL%2060625!5e0!3m2!1sen!2sus!4v1711993191701!5m2!1sen!2sus"
                                width="1000" height="750" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-3">
                        <div class="login-btn">
                            <a href="{{ route('login') }}">LOGIN/SIGNUP</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <div class="invoice-pop-up-back">
        <div class="invoice-popup">
            <div class="close-btn-reschdule" onclick="invoiceClose()">
                <i class="fa-solid fa-xmark"></i>
            </div>
            <div class="invoice-pop-heading">
                <h3>SELECT YOUR MENU</h3>
            </div>
            <div class="invoice-details-area">
                <div class="row">
                    <div class="col-12">
                        <div class="dinner-btn">
                            <div class="locat-box">
                                <div class="main-box-locate">
                                    <div class="location-detail">
                                        <h2>Lunch Special</h2>
                                    </div>
                                    <div class="location-btn">
                                        <a href="location-menu.php"><i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="locat-box">
                                <div class="main-box-locate">
                                    <div class="location-detail">
                                        <h2>Regular Menu</h2>
                                    </div>
                                    <div class="location-btn">
                                        <a href="javascript:void()"><i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>


                            <div class="third-party">
                                <a target="_blank"
                                    href="https://www.grubhub.com/restaurant/noon-o-kabab-8821-w-87th-st-suite-a-hickory-hills/6145136"><img
                                        class="img-fluid web-logo" src="assets/images/eats-logo-1.png" alt="">
                                </a>
                                <a target="_blank"
                                    href="https://www.order.store/store/noon-o-kabab-87th-street/Avfq_GmHU8S9sFzpSa1J2w"><img
                                        class="img-fluid web-logo" src="assets/images/eats-logo-2.png"
                                        alt=""></a>
                                <a target="_blank"
                                    href="https://www.doordash.com/store/noon-o-kabab-hickory-hills-24933435/"><img
                                        class="img-fluid web-logo" src="assets/images/eats-logo-3.png"
                                        alt=""></a>
                                <a target="_blank"
                                    href="https://order.toasttab.com/online/noon-o-kabab-hickory-hills-8821-west-87th-street"><img
                                        class="img-fluid web-logo" src="assets/images/tost.png" alt=""></a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('scripts')
    <script>
        const invoiceWrap = document.querySelector('.invoice-pop-up-back')

        function invoice() {
            invoiceWrap.classList.add('active')
        }

        function invoiceClose() {
            invoiceWrap.classList.remove('active')
        }
    </script>
@endpush
