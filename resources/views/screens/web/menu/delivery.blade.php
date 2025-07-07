@include('includes.web.head')
<main class="pickmain">
    <section class="">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-xxl-5 col-lg-7 col-12">
                    <div class="sign-board-area">
                        <div class="frame-border frame-t-left">
                            <img src="{{ asset('assets/images/frame-top-left.png') }}" alt="">
                        </div>
                        <div class="frame-border frame-t-right">
                            <img src="{{ asset('assets/images/frame-top-right.png') }}" alt="">
                        </div>
                        <div class="frame-border frame-b-left">
                            <img src="{{ asset('assets/images/frame-bottom-left.png') }}" alt="">
                        </div>
                        <div class="frame-border frame-b-right">
                            <img src="{{ asset('assets/images/framer-bottom-right.png') }}" alt="">
                        </div>
                        <div class="frame-logo circle-small-logo">
                            <img class="circle-logo" src="{{ asset('assets/images/circle-logo.png') }}" alt="">
                            <a class="sign-back-btn" href="{{ route('index') }}"><i
                                    class="fa-solid fa-chevron-left"></i></a>
                            <div class="pick-tab-btn">
                                <div class="mob-tab-btn">
                                    <div class="menu-btn"><i class="fa-solid fa-bars"></i></div>
                                </div>
                                <ul>
                                    <li class="locate-tab active">DELIVERY</li>
                                    <li class=""><a href="{{ route('menu.takeout', $branchId) }}">TAKEOUT</a></li>
                                    <li class=""><button type="button" class="order-via-btn">ORDER VIA</button>
                                    </li>
                                    <li class="locate-tab "><a href="location.php">LOCATIONS</a></li>
                                    <li class="">
                                        <div class="mob-log color-gray"><a href="{{ route('login') }}">LOGIN/SIGNUP</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-main">
                            <div class="prod-slider active">
                                <div class="location-title">
                                    <h2>Delivery:</h2>
                                </div>
                                <div class="pb-5 cart-select-overfl">
                                    <div class="no-select-cart-para">
                                        <p>Please select your desired dishes from the menu.</p>
                                    </div>
                                    <div id="cart-container">
                                        {{-- <div class="select-cart-area">
                                            <div class="select-img">
                                                <img src="{{ asset('assets/images/dish-1.png') }}" alt="">
                                            </div>
                                            <div class="select-cart-detail">
                                                <h2 class="s-title">ONE SKEWER JOUJEH KOUBIDEH KABAB (A LA CARTE)</h2>
                                                <p class="s-para">Large skewer of marinated and seasoned...</p>
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
                                                <img src="{{ asset('assets/images/dish-1.png') }}" alt="">
                                            </div>
                                            <div class="select-cart-detail">
                                                <h2 class="s-title">ONE SKEWER JOUJEH KOUBIDEH KABAB (A LA CARTE)</h2>
                                                <p class="s-para">Large skewer of marinated and seasoned...</p>
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
                                        </div> --}}
                                    </div>
                                    <div class="cart-select-checkout-btn">
                                        <a href="confirm-order.php">CHECK OUT</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-lg-3 col-12 pos-res-1">
                    <div class="menu-card-area" width="1000" height="750">
                        <div class="menu-card-logo">
                            <img src="{{ asset('assets/images/menu-card-logo.png') }}" alt="">
                        </div>
                        <div class="menu-desc">
                            <p>This is our full menu from all of our restaurants*</p>
                        </div>
                        <ul class="menu-tab-list ">
                            <li>
                                <button data-view="lunch-special" class="menu-tab-btn w-100 active" id="lunch_time"
                                    type="button">
                                    lunch special
                                </button>
                            </li>
                            <li>
                                <button data-view="dinner-menu" class="menu-tab-btn" id="regular" type="button">
                                    regular menu
                                </button>
                            </li>
                        </ul>
                        <ul class="categories-sb-tabs-area">
                            @forelse ($branch->categories as $category)
                                <li>
                                    <button type="button"
                                        class="categories-sb-tabs-link">{{ $category->name }}</button>
                                </li>
                            @empty
                            @endforelse

                        </ul>
                        <div class="menu-card-d-area">
                            <div class="row ">
                                @forelse ($branch->categories as $category)
                                    <h2 class="menu-title menu-category-title menu-category-title-{{ $category->id }}">
                                        {{ $category->name }}
                                    </h2>
                                    @forelse ($category->menus->where('branch_id',$branchId)->where('lunch_time',1) as $menu)
                                        <div class="col-xxl-6 col-lg-12 col-md-6 col-12 menu-item">
                                            <div class="dish-card">
                                                <div class="dish-img">
                                                    <img src="{{ asset('assets/images/dish-1.png') }}" alt="">
                                                </div>
                                                <div class="dish-detail">
                                                    <h2 class="dish-title">{{ $menu->name }}</h2>
                                                    <p class="dish-p">{{ $menu->description }}</p>
                                                    <div class="dish-plus">
                                                        <span class="dish-price">${{ $menu->price }}</span>
                                                        <button class="dish-cart"><i
                                                                class="fa-solid fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty

                                    @endforelse
                                @empty
                                @endforelse

                                {{-- <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                    <div class="dish-card">
                                        <div class="dish-img">
                                            <img src="{{ asset('assets/images/dish-4.png') }}" alt="">
                                        </div>
                                        <div class="dish-detail">
                                            <h2 class="dish-title">MUST-O-KHIAR (YOGURT SALAD)</h2>
                                            <p class="dish-p">Homemade yogurt fresh diced cucumber & mint. Prepared
                                                with yoghurt, saffron...</p>
                                            <div class="dish-plus">
                                                <span class="dish-price">$150</span>
                                                <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                    <div class="dish-card">
                                        <div class="dish-img">
                                            <img src="{{ asset('assets/images/dish-3.png') }}" alt="">
                                        </div>
                                        <div class="dish-detail">
                                            <h2 class="dish-title">BORANI</h2>
                                            <p class="dish-p">Fresh spinach saut ﾃツed with onions and garlic in extra
                                                virgin olive oil and mixed...</p>
                                            <div class="dish-plus">
                                                <span class="dish-price">$150</span>
                                                <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                    <div class="dish-card">
                                        <div class="dish-img">
                                            <img src="{{ asset('assets/images/dish-2.png') }}" alt="">
                                        </div>
                                        <div class="dish-detail">
                                            <h2 class="dish-title">OLOVIEH</h2>
                                            <p class="dish-p">Persian potato salad with finely chopped chicken breast,
                                                pickles, peas, shredded...</p>
                                            <div class="dish-plus">
                                                <span class="dish-price">$150</span>
                                                <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                    <div class="dish-card">
                                        <div class="dish-img">
                                            <img src="{{ asset('assets/images/dish-3.png') }}" alt="">
                                        </div>
                                        <div class="dish-detail">
                                            <h2 class="dish-title">BORANI</h2>
                                            <p class="dish-p">Fresh spinach saut ﾃツed with onions and garlic in extra
                                                virgin olive oil and mixed...</p>
                                            <div class="dish-plus">
                                                <span class="dish-price">$150</span>
                                                <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                    <div class="dish-card">
                                        <div class="dish-img">
                                            <img src="{{ asset('assets/images/dish-2.png') }}" alt="">
                                        </div>
                                        <div class="dish-detail">
                                            <h2 class="dish-title">OLOVIEH</h2>
                                            <p class="dish-p">Persian potato salad with finely chopped chicken breast,
                                                pickles, peas, shredded...</p>
                                            <div class="dish-plus">
                                                <span class="dish-price">$150</span>
                                                <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                    <div class="dish-card">
                                        <div class="dish-img">
                                            <img src="{{ asset('assets/images/dish-3.png') }}" alt="">
                                        </div>
                                        <div class="dish-detail">
                                            <h2 class="dish-title">BORANI</h2>
                                            <p class="dish-p">Fresh spinach saut ﾃツed with onions and garlic in extra
                                                virgin olive oil and mixed...</p>
                                            <div class="dish-plus">
                                                <span class="dish-price">$150</span>
                                                <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                    <div class="dish-card">
                                        <div class="dish-img">
                                            <img src="{{ asset('assets/images/dish-2.png') }}" alt="">
                                        </div>
                                        <div class="dish-detail">
                                            <h2 class="dish-title">OLOVIEH</h2>
                                            <p class="dish-p">Persian potato salad with finely chopped chicken breast,
                                                pickles, peas, shredded...</p>
                                            <div class="dish-plus">
                                                <span class="dish-price">$150</span>
                                                <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                    <div class="dish-card">
                                        <div class="dish-img">
                                            <img src="{{ asset('assets/images/dish-3.png') }}" alt="">
                                        </div>
                                        <div class="dish-detail">
                                            <h2 class="dish-title">BORANI</h2>
                                            <p class="dish-p">Fresh spinach saut ﾃツed with onions and garlic in extra
                                                virgin olive oil and mixed...</p>
                                            <div class="dish-plus">
                                                <span class="dish-price">$150</span>
                                                <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                    <div class="dish-card">
                                        <div class="dish-img">
                                            <img src="{{ asset('assets/images/dish-2.png') }}" alt="">
                                        </div>
                                        <div class="dish-detail">
                                            <h2 class="dish-title">OLOVIEH</h2>
                                            <p class="dish-p">Persian potato salad with finely chopped chicken breast,
                                                pickles, peas, shredded...</p>
                                            <div class="dish-plus">
                                                <span class="dish-price">$150</span>
                                                <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                    <div class="dish-card">
                                        <div class="dish-img">
                                            <img src="{{ asset('assets/images/dish-1.png') }}" alt="">
                                        </div>
                                        <div class="dish-detail">
                                            <h2 class="dish-title">ONE SKEWER JOUJEH KOUBIDEH KABAB (A LA CARTE)</h2>
                                            <p class="dish-p">Large skewer of marinated and seasoned...</p>
                                            <div class="dish-plus">
                                                <span class="dish-price">$150</span>
                                                <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-xxl-6 col-lg-12 col-md-6 col-12">
                                    <div class="dish-card">
                                        <div class="dish-img">
                                            <img src="{{ asset('assets/images/dish-1.png') }}" alt="">
                                        </div>
                                        <div class="dish-detail">
                                            <h2 class="dish-title">ONE SKEWER JOUJEH KOUBIDEH KABAB (A LA CARTE)</h2>
                                            <p class="dish-p">Large skewer of marinated and seasoned...</p>
                                            <div class="dish-plus">
                                                <span class="dish-price">$150</span>
                                                <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                            </div>
                                        </div>

                                    </div>
                                </div> --}}
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
@include('includes.web.footer-two')

<script>
    $(".ddd").on("click", function() {
        var $button = $(this);
        var $input = $button.closest('.sp-quantity').find("input.quntity-input");
        $input.val((i, v) => Math.max(0, +v + 1 * $button.data('multi')));
    });
</script>


<script>
$(document).ready(function() {
    $('.menu-tab-btn').on('click', function() {
        $('.menu-tab-btn').removeClass("active");
        $(this).addClass("active");
        var type = $(this).attr("id");
        console.log(type);
        $('.menu-item').remove();

        $.ajax({
            type: "POST",
            url: "{{ route('menu.delivery', $branchId) }}",
            data: {
                _token: "{{ csrf_token() }}",
                type: type
            },
            success: function(response) {

                console.log(response.menus);
                $.each(response.menus, function(index, item) {
                    console.log(item);
                    var tag = `
                        <div class="col-xxl-6 col-lg-12 col-md-6 col-12 menu-item">
                            <div class="dish-card">
                                <div class="dish-img">
                                    <img src="" alt="${item.name}">
                                </div>
                                <div class="dish-detail">
                                    <h2 class="dish-title">${item.name}</h2>
                                    <p class="dish-p">${item.description}</p>
                                    <div class="dish-plus">
                                        <span class="dish-price">$${item.price}</span>
                                        <button class="dish-cart"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>`;


                    $(`.menu-category-title-${item.category_id}`).after(tag);
                });
            }
        });
    });
});

            document.addEventListener("DOMContentLoaded", function() {
                const cartContainer = document.getElementById("cart-container");

                document.querySelectorAll(".dish-cart").forEach(button => {
                    button.addEventListener("click", function() {
                        const dishCard = this.closest(".dish-card");


                        this.disabled = true;


                        const imgSrc = dishCard.querySelector(".dish-img img").src;
                        const title = dishCard.querySelector(".dish-title").innerText;
                        const description = dishCard.querySelector(".dish-p").innerText;


                        const selectCartArea = document.createElement("div");
                        selectCartArea.classList.add("select-cart-area");


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


                        cartContainer.insertBefore(selectCartArea, cartContainer.firstChild);


                        selectCartArea.querySelector(".cart-s-close").addEventListener("click",
                            function() {

                                const buttons = document.querySelectorAll(".dish-card");
                                buttons.forEach(button => {
                                    const currentTitle = button.querySelector(
                                            ".dish-title")
                                        .innerText;
                                    if (currentTitle === title) {
                                        button.querySelector(".dish-cart").disabled =
                                            false;
                                    }
                                });
                                selectCartArea.remove();
                            });


                        const quantityInput = selectCartArea.querySelector(".quntity-input");
                        selectCartArea.querySelectorAll(".ddd").forEach(btn => {
                            btn.addEventListener("click", function() {
                                let currentQuantity = parseInt(quantityInput.value,
                                    10);
                                const change = parseInt(this.getAttribute(
                                        "data-multi"),
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
