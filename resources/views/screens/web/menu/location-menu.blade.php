@extends('layout.web.app')
@section('content')
    <main class="pickmain">
        <section class="">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="col-xxl-5 col-lg-7 col-12">
                        <div class="sign-board-area">
                            <div class="frame-border frame-t-left">
                                <img src="{{ asset("assets/images/frame-top-left.png") }}" alt="">
                            </div>
                            <div class="frame-border frame-t-right">
                                <img src="{{ asset("assets/images/frame-top-right.png") }}" alt="">
                            </div>
                            <div class="frame-border frame-b-left">
                                <img src="{{ asset("assets/images/frame-bottom-left.png") }}" alt="">
                            </div>
                            <div class="frame-border frame-b-right">
                                <img src="{{ asset("assets/images/framer-bottom-right.png") }}" alt="">
                            </div>
                            <div class="frame-logo circle-small-logo">
                                <img class="circle-logo" src="assets/images/circle-logo.png" alt="">
                                <a class="sign-back-btn" href="order.php"><i class="fa-solid fa-chevron-left"></i></a>
                                <div class="pick-tab-btn">
                                    <div class="mob-tab-btn">
                                        <div class="menu-btn"><i class="fa-solid fa-bars"></i></div>
                                    </div>
                                    <ul>
                                        <li data-tab-target="#location" class="locate-tab "><a
                                                href="">DELIVERY</a></li>
                                        <li class=""><a href="">TAKEOUT</a> </li>
                                        <li class=""><button type="button" class="order-via-btn">ORDER VIA</button>
                                        </li>
                                        <li class="locate-tab active">LOCATIONS</li>
                                        <li>
                                            <div class="mob-log color-gray"><a href="{{ route('login') }}">LOGIN/SIGNUP</a></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-main">
                                <div class="prod-slider active">
                                    <div class="location-title">
                                        <h2>8821 W 87th St Hickory Hills, IL 60457</h2>
                                    </div>
                                    <div class="pb-5 cart-select-overfl">
                                        <div class="no-select-cart-para">
                                            <p>Please select your desired dishes from the menu.</p>
                                        </div>
                                        <div id="cart-container">
                                            <div class="select-cart-area">
                                                <div class="select-img">
                                                    <img src="assets/images/history-hills-lunch-img-13.jpg" alt="">
                                                </div>
                                                <div class="select-cart-detail">
                                                    <div class="">
                                                        <h2 class="s-title">Joujeh Koubideh (L)</h2>
                                                        <p class="s-para">Ground Chicken</p>
                                                    </div>
                                                    <div class="sp-quantity">
                                                        <div class="sp-minus fff"><button class="ddd"
                                                                data-multi="-1">-</button></div>
                                                        <div class="sp-input">
                                                            <input type="text" class="quntity-input" value="1" />
                                                        </div>
                                                        <div class="sp-plus fff"><button class="ddd"
                                                                data-multi="1">+</button></div>
                                                    </div>
                                                </div>
                                                <button type="button" class="cart-s-close">
                                                    <i class="fa-solid fa-x"></i>
                                                </button>
                                            </div>
                                            <div class="select-cart-area">
                                                <div class="select-img">
                                                    <img src="assets/images/history-hills-lunch-img-16.jpg" alt="">
                                                </div>
                                                <div class="select-cart-detail">
                                                    <div class="">
                                                        <h2 class="s-title">Signature Salmon (L)</h2>
                                                        <p class="s-para">3 or 4 pieces of marinated Signature salmon</p>
                                                    </div>
                                                    <div class="sp-quantity">
                                                        <div class="sp-minus fff"><button class="ddd"
                                                                data-multi="-1">-</button></div>
                                                        <div class="sp-input">
                                                            <input type="text" class="quntity-input" value="1" />
                                                        </div>
                                                        <div class="sp-plus fff"><button class="ddd"
                                                                data-multi="1">+</button></div>
                                                    </div>
                                                </div>
                                                <button type="button" class="cart-s-close">
                                                    <i class="fa-solid fa-x"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="cart-select-checkout-btn">
                                            <a href="confirm-order.php">CHECK OUT</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-lg-3 col-12 pos-res">
                        <div class="menu-card-area" width="1000" height="750">
                            <div class="menu-card-logo">
                                <img src="assets/images/menu-card-logo.png" alt="">
                            </div>
                            <div class="menu-desc">
                                <p>This is our full menu from all of our restaurants*</p>
                            </div>
                            <div class="menu-card-d-area">
                                <div class="row">

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-1.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Hummus (L)</h2>
                                                <p class="dish-p">Chick peas blended with tahini, garlic & lemon juice;
                                                    topped with olive oil.</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$6.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-2.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Baba Ghanouj (L)</h2>
                                                <p class="dish-p">Roasted eggplant blended with tahini, fresh garlic,
                                                    parsley & lemon juice; topped with olive oil.</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$6.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-3.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Kashk-E-Bademjan (L)</h2>
                                                <p class="dish-p">Roasted eggplant pureed with onion, garlic, mint, and
                                                    kashk (aged dried yogurt); topped with caramelized onions and kashk.</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$8.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-4.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Lentil Saffron Soup (L)</h2>
                                                <p class="dish-p">Lentil saffron soup with Persian herbs.</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$5.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-5.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Persian Salad (L)</h2>
                                                <p class="dish-p">Freshly diced cucumbers, tomato, and red onions, tossed
                                                    with lemon juice and a touch of mint.</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$7.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-6.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Persian Garden Salad</h2>
                                                <p class="dish-p">Crispy romaine, mixed greens, red onion, cucumber,
                                                    tomato, and Bulgarian feta cheese. Dressings: balsamic.</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$10.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/no-image.png" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Joujeh in the Garden</h2>
                                                <p class="dish-p"></p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$12.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-8.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Lunch Special</h2>
                                                <p class="dish-p"></p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$12.95</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/no-image.png" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Joujeh Plate (L)</h2>
                                                <p class="dish-p"></p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$12.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-10.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Joujeh & Koubideh (L)</h2>
                                                <p class="dish-p">One Skewer Ground Sirloin and One Skewer chicken Breast
                                                    pieces</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$19.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-11.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Koubideh Plate (L)</h2>
                                                <p class="dish-p">Ground Sirloin</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$12.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-12.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Chenjeh Kabab (L)</h2>
                                                <p class="dish-p">Choice Ribeye Steak</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$15.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-13.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Joujeh Koubideh (L)</h2>
                                                <p class="dish-p">Ground Chicken</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$12.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-14.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Lamb Kabab (L)</h2>
                                                <p class="dish-p">One Skewer boneless lamb</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$16.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-15.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Spring Lamb Shank (L)</h2>
                                                <p class="dish-p">Lamb Shank with Bone</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$18.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-16.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Signature Salmon (L)</h2>
                                                <p class="dish-p">3 or 4 pieces of marinated Signature salmon</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$18.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-17.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Falafel Plate (L)</h2>
                                                <p class="dish-p"></p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$12.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-18.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Lamb Koubideh (L)</h2>
                                                <p class="dish-p">Our Signature seasoned ground lamb</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$12.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-19.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Baghali Polo Ba Goosht (DIll rice with Lamb Stew)
                                                </h2>
                                                <p class="dish-p">Experience a taste of tradition with our Baghali Polo Ba
                                                    Lamb Stew. Tender chunks of lamb simmered in a flavorful broth with
                                                    fragrant dill and tender Lima beans, served atop a bed of aromatic
                                                    basmati rice infused with saffron. This hearty Persian dish is a
                                                    celebration of savory flavors and comforting textures that will warm
                                                    your soul with every spoonful.</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$12.95</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-20.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Zereshk Polo Ba Morgh</h2>
                                                <p class="dish-p">Tender saffron chicken served with fragrant basmati rice
                                                    and tangy barberries, a classic Persian delight. Served with creamy
                                                    Sauce and toasted almonds for a perfect balance of flavors.</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$12.95</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-21.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Gheymeh Polo (Split Yellow peas with Beef)</h2>
                                                <p class="dish-p">A delightful blend of tender Beef, yellow split peas, and
                                                    aromatic saffron rice, topped with crispy potato fries. A comforting
                                                    Persian classic that satisfies with every bite.</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$6.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/history-hills-lunch-img-22.jpg" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Mix Grill</h2>
                                                <p class="dish-p">Embark on a culinary journey with our Mixed Grill Platter
                                                    featuring a tantalizing assortment of Persian delights. Indulge in the
                                                    succulent flavors of Chenjeh (Ribeye pieces, Joujeh (chicken pieces,
                                                    Ground Chicken, and Koubideh, (ground Beef) each skewered and grilled to
                                                    perfection. Served with fragrant saffron rice, grilled tomatoes, and a
                                                    side of persian salad, it's a feast for the senses that promises to
                                                    satisfy every craving.</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$19.95</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                        <div class="dish-card">
                                            <div class="dish-img">
                                                <img src="assets/images/no-image.png" alt="">
                                            </div>
                                            <div class="dish-detail">
                                                <h2 class="dish-title">Addas Polo</h2>
                                                <p class="dish-p">Vegetarian. Persian white rice topped with a mix of
                                                    lentils, raisins, caramelized onions, saffron, and Persian barberry;
                                                    served with charbroiled vegetables.</p>
                                                <div class="dish-plus">
                                                    <span class="dish-price">$12.00</span>
                                                    <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-3 ">
                        <div class="login-btn">
                            <a href="{{ route('login') }}">LOGIN/SIGNUP</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
   @endsection
@push('scripts')
    <script>
        $(".ddd").on("click", function() {
            var $button = $(this);
            var $input = $button.closest('.sp-quantity').find("input.quntity-input");
            $input.val((i, v) => Math.max(0, +v + 1 * $button.data('multi')));
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const cartContainer = document.getElementById("cart-container");

            document.querySelectorAll(".dish-cart").forEach(button => {
                button.addEventListener("click", function() {
                    const dishCard = this.closest(".dish-card");

                    // Disable the add button after clicking
                    this.disabled = true;

                    // Get the image, title, and description from the dish-card
                    const imgSrc = dishCard.querySelector(".dish-img img").src;
                    const title = dishCard.querySelector(".dish-title").innerText;
                    const description = dishCard.querySelector(".dish-p").innerText;

                    // Create a new select-cart-area div
                    const selectCartArea = document.createElement("div");
                    selectCartArea.classList.add("select-cart-area");

                    // Populate the select-cart-area with the dish details
                    selectCartArea.innerHTML = `
                    <div class="select-img">
                        <img src="${imgSrc}" alt="">
                    </div>
                    <div class="select-cart-detail">
                        <h2 class="s-title">${title}</h2>
                        <p class="s-para">${description}</p>
                        <div class="sp-quantity">
                            <div class="sp-minus fff"><button class="ddd" data-multi="-1">-</button></div>
                            <div class="sp-input">
                                <input type="text" class="quntity-input" value="1" />
                            </div>
                            <div class="sp-plus fff"><button class="ddd" data-multi="1">+</button></div>
                        </div>
                    </div>
                    <button type="button" class="cart-s-close">
                        <i class="fa-solid fa-x"></i>
                    </button>
                `;

                    // Prepend the new select-cart-area to the cart-container
                    cartContainer.insertBefore(selectCartArea, cartContainer.firstChild);

                    // Add event listener to the close button to remove the select-cart-area
                    selectCartArea.querySelector(".cart-s-close").addEventListener("click",
                        function() {
                            // Re-enable the add button
                            const buttons = document.querySelectorAll(".dish-card");
                            buttons.forEach(button => {
                                const currentTitle = button.querySelector(".dish-title")
                                    .innerText;
                                if (currentTitle === title) {
                                    button.querySelector(".dish-cart").disabled = false;
                                }
                            });
                            selectCartArea.remove();
                        });

                    // Add event listeners to quantity buttons
                    const quantityInput = selectCartArea.querySelector(".quntity-input");
                    selectCartArea.querySelectorAll(".ddd").forEach(btn => {
                        btn.addEventListener("click", function() {
                            let currentQuantity = parseInt(quantityInput.value, 10);
                            const change = parseInt(this.getAttribute("data-multi"),
                                10);
                            currentQuantity += change;
                            if (currentQuantity > 0) {
                                quantityInput.value = currentQuantity;
                            }
                        });
                    });
                });
            });
        });
    </script>
@endpush
