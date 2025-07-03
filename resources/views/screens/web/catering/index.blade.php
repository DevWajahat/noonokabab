@extends('layout.web.app')
@section('content')
    <main>
        <section class="bnner-section catering-bnner">
            <div class="container-two">
                <div class="row">
                    <div class="col-12">
                        <div class="bnner-area">
                            <h1 class="bnner-title">Catering Services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="catering-services-section">
            <div class="container-two">
                <div class="row">
                    <div class="col-12">
                        <div class="catering-services-area">
                            <div class="catering-services-inner position-relative">
                                <div class="experience-tag">
                                    <h3 class="exp-year">10+</h3>
                                    <span class="exp-letter">Years Of <br> Experience</span>
                                </div>
                                <img class="img-fluid" src="./assets/images/cate-ser-img.png" alt="">
                            </div>
                            <div class="catering-services-inner mt-3">
                                <div class="catering-services-detail">
                                    <ul class="catering-services-tabs-area">
                                        <li data-tab-target="#Events" class="cat-ser-tabs-btn-area active">
                                            <button type="button" class="cat-ser-tabs-btn">
                                                Events
                                            </button>
                                        </li>
                                        <li data-tab-target="#Weddings" class="cat-ser-tabs-btn-area">
                                            <button type="button" class="cat-ser-tabs-btn">
                                                Weddings
                                            </button>
                                        </li>
                                        <li data-tab-target="#Corporate" class="cat-ser-tabs-btn-area">
                                            <button type="button" class="cat-ser-tabs-btn">
                                                Corporate
                                            </button>
                                        </li>
                                    </ul>

                                    <div class="catering-tabs-main">
                                        <div data-tab-content id="Events" class="catering-ser-text-area active">
                                            <h2 class="cate-ser-title">No celebration is complete without a sumptuous feast
                                                <br> for your guests.
                                            </h2>
                                            <p class="cate-ser-text">Catering is our passion at Noon O Kabab and we
                                                customize your menu according to your needs. We offer a delicious array of
                                                authentic Persian dishes, from the colorful vegetarian dishes like Shirin
                                                Polo to mouth-watering Salmon, Lamb, Chicken & Beef kababs, all presented
                                                beautifully.</p>
                                            <p class="cate-ser-text"> Our Catering kitchen is state of the art and we are
                                                dedicated to serving up a great experience in any location in Chicago.
                                                Enchant your guests with exotic dishes, cooked and garnished with fresh
                                                ingredients and Persian spices. The next time you want to cater for a
                                                special occasion, call us and we'll sweep you off your feet.</p>
                                            <p class="cate-ser-text">Your dress, your venue, your themes, and most
                                                importantly, a menu to knock everyone's socks off! Noon O Kabab customises
                                                the catering experience for every wedding with utmost care and joy. We
                                                discuss the menu with you, set up tastings, provide catering for up to 700
                                                guests and provide servers to wedding venues all over Chicagoland.</p>
                                            <p class="cate-ser-text">We bring the exotic flavors of Persia with our
                                                colorful, succulent dishes like the glamorous Shirin Polo, a gorgeous mix of
                                                Persian rice, pistachios, orange peel jam, raisins and other fabulous
                                                ingredients. Leave the stress to us and we will create a delectable feast so
                                                you can build memories of the most wonderful day of your life.</p>
                                            <p class="cate-ser-text">The next time you need a catered meal for your
                                                corporate event, conference or just a simple party at home for friends, give
                                                Noon O Kabab's to go catering a try. No event is too large or small for us
                                                and we cater all over Chicagoland.</p>
                                            <p class="cate-ser-text">Imagine enjoying a fresh, hot, gourmet Persian meal
                                                instead of cold sandwiches or the usual pizza. Our simplest combination
                                                offers a delicious, juicy kabab wrap, fresh Persian salad, hummus, warm pita
                                                bread and bottled water.
                                                We also do Corporate Lunch Boxes.</p>
                                        </div>


                                        <div data-tab-content id="Weddings" class="catering-ser-text-area">
                                            <h2 class="cate-ser-title">No celebration is complete without a sumptuous feast
                                                <br> for your guests.
                                            </h2>
                                        </div>


                                        <div data-tab-content id="Corporate" class="catering-ser-text-area">
                                            <h2 class="cate-ser-title">No celebration is complete without a sumptuous feast
                                                <br> for your guests.
                                            </h2>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <x-subscribe-email />
    </main>
@endsection


