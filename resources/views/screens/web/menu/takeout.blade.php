@include('includes.web.head')
<main class="pickmain">
    <section class="">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-xxl-5 col-lg-7 col-12">
                    <div class="sign-board-area">
                        <div class="frame-border frame-t-left">
                            <img src="{{ asset('assets/web/images/frame-top-left.png') }}" alt="">
                        </div>
                        <div class="frame-border frame-t-right">
                            <img src="{{ asset('assets/web/images/frame-top-right.png') }}" alt="">
                        </div>
                        <div class="frame-border frame-b-left">
                            <img src="{{ asset('assets/web/images/frame-bottom-left.png') }}" alt="">
                        </div>
                        <div class="frame-border frame-b-right">
                            <img src="{{ asset('assets/web/images/framer-bottom-right.png') }}" alt="">
                        </div>
                        <div class="frame-logo circle-small-logo">
                            <img class="circle-logo" src="{{ asset('assets/web/images/circle-logo.png') }}" alt="">
                            <a class="sign-back-btn" href="{{ route('index') }}"><i
                                    class="fa-solid fa-chevron-left"></i></a>
                            <div class="pick-tab-btn">
                                <div class="mob-tab-btn">
                                    <div class="menu-btn"><i class="fa-solid fa-bars"></i></div>
                                </div>
                                <ul>
                                    <li class=""><a href="">DELIVERY</a>
                                    </li>
                                    <li class="locate-tab active">TAKEOUT</li>
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
                            <img src="{{ asset('assets/web/images/menu-card-logo.png') }}" alt="">
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
                                                    <img src="{{ asset('assets/web/images/dish-1.png') }}" alt="">
                                                </div>
                                                <div class="dish-detail">
                                                    <h2 class="dish-title" id="{{ $menu->id }}">
                                                        {{ $menu->name }}</h2>
                                                    <p class="dish-p">{{ $menu->description }}</p>
                                                    <div class="dish-plus type.lunch_time">
                                                        <span class="dish-price">${{ $menu->price }}</span>
                                                        <button class="dish-cart" id="{{ $menu->id }}"><i
                                                                class="fa-solid fa-plus"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                    @endforelse
                                @empty
                                @endforelse


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
                url: "",
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
                                    <h2 class="dish-title" id="${item.id}">${item.name}</h2>
                                    <p class="dish-p">${item.description}</p>
                                    <div class="dish-plus type.${type }" >
                                        <span class="dish-price">$${item.price}</span>
                                        <button class="dish-cart" id="${item.id}"><i class="fa-solid fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>`;
                        $(`.menu-category-title-${item.category_id}`).after(tag);
                    });


                }


            });
        });

        function cartStore(type, id, quantity) {
            $.ajax({
                type: "POST",
                url: "{{ route('cart.store') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    quantity: quantity,
                    product_id: id,
                    type: type
                },
                success: function(response) {
                    console.log(response)
                }
            })
        }

        const cartContainer = $("#cart-container");

        $(document).on("click", ".dish-cart", function() {
            const dishCard = $(this).closest(".dish-card");

            $(this).prop("disabled", true);



            const imgSrc = dishCard.find(".dish-img img").attr("src");
            const title = dishCard.find(".dish-title").text();
            const description = dishCard.find(".dish-p").text();
            var productId = dishCard.find(".dish-title").attr("id");
            var type = dishCard.find(".dish-plus").attr("class")
            type = type.split('.')[1]
            console.log(type)

            const selectCartArea = $("<div>").addClass("select-cart-area");

            selectCartArea.html(`
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
            `);

            cartContainer.prepend(selectCartArea);

            cartStore(type, productId, 1)

            selectCartArea.on("click", ".cart-s-close", function() {
                const buttons = $(".dish-card");
                buttons.each(function() {
                    const currentTitle = $(this).find(".dish-title").text();
                    if (currentTitle === title) {
                        $(this).find(".dish-cart").prop("disabled", false);
                    }
                });
                selectCartArea.remove();
            });

            const quantityInput = selectCartArea.find(".quntity-input");
            selectCartArea.on("click", ".ddd", function() {
                let currentQuantity = parseInt(quantityInput.val(), 10);
                const change = parseInt($(this).attr("data-multi"), 10);
                currentQuantity += change;
                if (currentQuantity > 0) {
                    quantityInput.val(currentQuantity);
                }
            });
        });
    });
</script>
