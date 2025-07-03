@include('includes.web.head')
<main>
    <section class="thankyou-sec">
        <div class="container-two">
            <div class="row align-items-center">
                <div class="col-12">
                    <a class="d-block thnks-logo-area text-center mb-5" href=".">
                        <img class="img-fluid" src="{{ asset("assets/images/noon-o-kabab-logo.png") }}" alt="">
                    </a>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="thank-left-area">
                        <h1 class="thankyou-title text-center">Thank you</h1>
                        <h3 class="thnk-sb-title text-center">Come back again</h3>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="thank-right-area text-center">
                        <img class="img-fluid thnks-img" src="{{ asset("assets/images/thank-img.png") }}" alt="">
                        <h4 class="thank-ordr-title">Thank you for ordering!</h4>
                        <p class="thnk-para">Sit back and relax, your order is <br> being prepared</p>
                        <div class="bg-white radius-6px pt-lg-4 pb-lg-4 px-lg-2 p-xl-4 py-3 px-sm-4 px-2">
                            <p class="thnk-sb-para">
                                We have assigned delivery executive to your order. It <br> takes 30 mins to deliver for the order to arrive.
                            </p>
                        </div>
                        <button class="track-order-btn" type="button">Track my Order</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('includes.web.footer-two')

