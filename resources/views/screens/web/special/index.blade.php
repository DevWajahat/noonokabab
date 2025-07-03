@extends('layout.web.app')
@section('content')
    <main>
        <section class="bnner-section catering-bnner">
            <div class="container-two">
                <div class="row">
                    <div class="col-12">
                        <div class="bnner-area">
                            <h1 class="bnner-title">Specials</h1>
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
                                <img class="img-fluid" src="{{ asset("assets/images/cate-ser-img.png") }}" alt="">
                            </div>
                            <div class="catering-services-inner mt-3">
                                <div class="catering-services-detail">
                                    <ul class="catering-services-tabs-area flex-column">
                                        <li data-tab-target="#Events" class="cat-ser-tabs-btn-area active w-100">
                                            <button type="button" class="cat-ser-tabs-btn w-100">
                                                We are proudly Zabih
                                            </button>
                                        </li>
                                        <li data-tab-target="#Weddings" class="cat-ser-tabs-btn-area w-100">
                                            <button type="button" class="cat-ser-tabs-btn w-100">
                                                We are proud to announce we are now Zabiha Halal
                                            </button>
                                        </li>
                                        <li data-tab-target="#Corporate" class="cat-ser-tabs-btn-area w-100">
                                            <button type="button" class="cat-ser-tabs-btn w-100">
                                                Everything is special at Noon O Kabab
                                            </button>
                                        </li>
                                    </ul>

                                    <div class="catering-tabs-main">
                                        <div data-tab-content id="Events" class="catering-ser-text-area active">
                                            <h2 class="cate-ser-title">Everything is special at Noon O Kabab</h2>
                                            <p class="cate-ser-text">Follow us on Social Media for daily specials</p>
                                        </div>
                                        <div data-tab-content id="Weddings" class="catering-ser-text-area active">

                                        </div>
                                        <div data-tab-content id="Corporate" class="catering-ser-text-area active">

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
