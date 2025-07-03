@extends('layout.web.app')
@section('content')
    <main>
        <section class="bnner-section gallery-bnner">
            <div class="container-two">
                <div class="row">
                    <div class="col-12">
                        <div class="bnner-area">
                            <h1 class="bnner-title">Photo Gallery</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="photo-gallery-section">
            <div class="conainer-fluid">
                <div class="row">
                    <div class="col-12">
                        <h1 class="section-title">Photo Gallery of Our Restaurant</h1>
                    </div>
                    <div class="col-12">
                        <div class="gallery-tabs-area-main">
                            <ul class="gallery-tabs-area">
                                <li data-tab-target="#ALL" class="cat-ser-tabs-btn-area active">
                                    <button type="button" class="cat-ser-tabs-btn">ALL</button>
                                </li>
                                <li data-tab-target="#Tradition" class="cat-ser-tabs-btn-area ">
                                    <button type="button" class="cat-ser-tabs-btn">Tradition</button>
                                </li>
                                <li data-tab-target="#FOOD" class="cat-ser-tabs-btn-area ">
                                    <button type="button" class="cat-ser-tabs-btn">FOOD</button>
                                </li>
                                <li data-tab-target="#RESTAURANT" class="cat-ser-tabs-btn-area ">
                                    <button type="button" class="cat-ser-tabs-btn">RESTAURANT</button>
                                </li>
                                <li data-tab-target="#CULINARY" class="cat-ser-tabs-btn-area ">
                                    <button type="button" class="cat-ser-tabs-btn">CULINARY</button>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="photo-gallery-tabs-main">

                        <div id="loader" style="display:none;"> <i class="fa-solid fa-arrows-spin fa-spin"></i></div>

                        <div data-tab-content id="ALL" class="gallery-img-area active">



                            <div class="gallery-img-inner card">
                                <a href="{{ asset("assets/images/photo-gallery-img-1.png") }}" data-fancybox="group" data-caption="">
                                    <img src="{{ asset("assets/images/photo-gallery-img-1.png") }}" />
                                </a>
                                <!-- <img class="img-fluid" src="./assets/images/photo-gallery-img-1.png" alt=""> -->
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-2.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-2.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-3.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-3.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-4.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-4.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-5.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-5.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-6.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-6.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-7.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-7.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-8.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-8.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-9.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-9.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-10.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-10.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-11.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-11.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-12.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-12.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-13.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-13.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-14.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-14.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-15.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-15.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-16.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-16.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-17.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-17.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-18.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-18.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-19.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-19.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-20.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-20.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-21.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-21.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-22.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-22.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-23.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-23.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-24.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-24.png" />
                                </a>
                            </div>

                        </div>

                        <div data-tab-content id="Tradition" class="gallery-img-area">

                            <div class="gallery-img-inner card">
                                <a href="./assets/images/photo-gallery-img-1.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-1.png" />
                                </a>
                                <!-- <img class="img-fluid" src="./assets/images/photo-gallery-img-1.png" alt=""> -->
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-2.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-2.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-3.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-3.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-4.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-4.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-5.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-5.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-6.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-6.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-7.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-7.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-8.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-8.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-9.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-9.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-10.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-10.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-11.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-11.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-12.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-12.png" />
                                </a>
                            </div>


                        </div>

                        <div data-tab-content id="FOOD" class="gallery-img-area">

                            <div class="gallery-img-inner card">
                                <a href="./assets/images/photo-gallery-img-1.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-1.png" />
                                </a>
                                <!-- <img class="img-fluid" src="./assets/images/photo-gallery-img-1.png" alt=""> -->
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-2.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-2.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-3.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-3.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-4.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-4.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-5.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-5.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-6.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-6.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-7.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-7.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-8.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-8.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-9.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-9.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-10.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-10.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-11.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-11.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-12.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-12.png" />
                                </a>
                            </div>


                        </div>

                        <div data-tab-content id="RESTAURANT" class="gallery-img-area">

                            <div class="gallery-img-inner card">
                                <a href="./assets/images/photo-gallery-img-1.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-1.png" />
                                </a>
                                <!-- <img class="img-fluid" src="./assets/images/photo-gallery-img-1.png" alt=""> -->
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-2.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-2.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-3.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-3.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-4.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-4.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-5.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-5.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-6.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-6.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-7.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-7.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-8.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-8.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-9.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-9.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-10.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-10.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-11.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-11.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-12.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-12.png" />
                                </a>
                            </div>

                        </div>

                        <div data-tab-content id="CULINARY" class="gallery-img-area">

                            <div class="gallery-img-inner card">
                                <a href="./assets/images/photo-gallery-img-1.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-1.png" />
                                </a>
                                <!-- <img class="img-fluid" src="./assets/images/photo-gallery-img-1.png" alt=""> -->
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-2.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-2.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-3.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-3.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-4.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-4.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-5.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-5.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-6.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-6.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-7.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-7.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-8.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-8.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-9.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-9.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-10.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-10.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-11.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-11.png" />
                                </a>
                            </div>
                            <div class="gallery-img-inner">
                                <a href="./assets/images/photo-gallery-img-12.png" data-fancybox="group" data-caption="">
                                    <img src="./assets/images/photo-gallery-img-12.png" />
                                </a>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection







@push('scripts')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <script>
        const shopTabs = document.querySelectorAll("[data-tab-target]");
        const shopTabContents = document.querySelectorAll("[data-tab-content]");
        const loader = document.getElementById("loader");

        shopTabs.forEach((tab) => {
            tab.addEventListener("click", () => {
                // Show loader
                loader.style.display = "block";

                // Hide tab contents
                shopTabContents.forEach((tabContent) => {
                    tabContent.classList.remove("active");
                });

                // Remove active class from tabs
                shopTabs.forEach((tab) => {
                    tab.classList.remove("active");
                });

                // Add active class to clicked tab
                tab.classList.add("active");

                // Hide loader after 2 seconds and show tab content
                setTimeout(() => {
                    // Find target content and add active class
                    const target = document.querySelector(tab.dataset.tabTarget);
                    target.classList.add("active");

                    // Hide loader
                    loader.style.display = "none";
                }, 1000); // Adjust timeout duration as needed
            });
        });


        $('[data-fancybox]').fancybox({
            // Options will go here
            buttons: [
                'close'
            ],
            wheel: false,
            transitionEffect: "slide",
            // thumbs          : false,
            // hash            : false,
            loop: true,
            // keyboard        : true,
            toolbar: true,
            // animationEffect : false,
            // arrows          : true,
            clickContent: false
        });
    </script>
@endpush

