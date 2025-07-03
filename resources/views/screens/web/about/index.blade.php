@extends('layout.web.app')
@section('content')

    <main>
        <section class="bnner-section our-story-bnner">
            <div class="container-two">
                <div class="row">
                    <div class="col-12">
                        <div class="bnner-area">
                            <h1 class="bnner-title">Our Story</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="story-section">
            <div class="container-two">
                <img class="img-fluid story-left-img" src="{{ asset("assets/images/main-side-design.png") }}" alt="">

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="story-discrip-area drop-shadow bg-img">
                            <img class="img-fluid story-img-1" src= "{{ asset("assets/images/pot.png") }}" alt="">
                            <p class="story-discrip-para">
                                What once began as a dream to introduce authentic, nourishing Persian food to Chicagoland
                                has become a true success story. We started as a small, family-owned, 11 table restaurant in
                                1997 and have now tripled in size.
                            </p>
                            <p class="story-discrip-para">
                                What hasn't changed through the years, is our philosophy that visitors to our restaurant are
                                our guests and it is our pride and joy to create an atmosphere where people keep coming back
                                for more.
                            </p>
                            <p class="story-discrip-para mb-0">
                                We create authentic Persian food that reflects our heritage. Our ingredients are always
                                fresh, most of our spices come from Iran, and our menu is lovingly prepared using our
                                treasured family recipes. We are committed to creating healthy and nutritious meals and have
                                partnered with Healthydiningfinder.com as well.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-end">
                    <div class="col-12 col-lg-6">
                        <div class="story-discrip-area bg-color">
                            <img class="img-fluid story-img-2" src="{{ asset("assets/images/story-discrip-img-1.png") }}" alt="">
                            <p class="story-discrip-para">
                                Our restaurant ambiance is quiet, and softly lit, the walls and alcoves decorated with
                                exquisite Persian tiles depicting Sufi fables and tales. Melodious Persian music accompanies
                                patrons as they enjoy the food and each other's company. Our servers are gracious and exude
                                the warmth we feel for our patrons.
                            </p>
                            <p class="story-discrip-para">
                                In fact, many of our clientele are repeat customers who look forward to coming again and
                                again to Noon O Kabab.
                            </p>
                            <p class="story-discrip-para mb-0">
                                Apart from our restaurant, we also have a new Catering kitchen which is 2300 sqft and we are
                                equipped to cater for 600 to 700 people.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="story-discrip-area top bg-img">
                            <img class="img-fluid story-img-3" src="{{ asset("assets/images/story-discrip-img-3.png") }}" alt="">
                            <p class="story-discrip-para">
                                With every order we take, we bring the magic of Persia to corporate events, birthdays and
                                even weddings. We customise the festive experience from menu decisions, tastings to
                                providing servers so that your event is unforgettable and will be a source of beautiful
                                memories for years to come.
                            </p>
                            <p class="story-discrip-para">
                                Join us at Noon O Kabab and experience our fabulous food and hospitality. It would be our
                                pleasure to welcome you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <x-subscribe-email/>
    </main>
@endsection
