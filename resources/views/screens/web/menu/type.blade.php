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
                                    <li class="locate-tab "><a
                                            href="{{ route('menu.type', ['type' => 'delivery', 'branchId' => $branchId]) }}">DELIVERY</a>
                                    </li>
                                    <li class=""><a
                                            href="{{ route('menu.type', ['type' => 'takeout', 'branchId' => $branchId]) }}">TAKEOUT</a>
                                    </li>
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
                                    <div id="cart-main-container">


                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 col-lg-3 col-12 pos-res-1">
                    <div class=" menu-card-area" width="1000" height="750">
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
                        <div class="menu-card-d-area " id="menuCardLunchTime" data-menuType="lunch_time">
                            <div class="row">
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
                                                    <h2 class="dish-title" id="{{ $menu->id }}">
                                                        {{ $menu->name }}</h2>
                                                    <p class="dish-p">{{ $menu->description }}</p>
                                                    <div class="dish-plus type.lunch_time">
                                                        <span class="dish-price">${{ $menu->price }}</span>
                                                        <button class="dish-cart button-{{ $menu->id }}"
                                                            id="{{ $menu->id }}"
                                                            {{ isset(session('cart')['items'][$menu->id]) ? 'disabled' : '' }}><i
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

                        <div class="menu-card-d-area d-none " id="menuCardRegular" data-menuType="regular">
                            <div class="row ">
                                @forelse ($branch->categories as $category)
                                    <h2 class="menu-title menu-category-title menu-category-title-{{ $category->id }}">
                                        {{ $category->name }}
                                    </h2>
                                    @forelse ($category->menus->where('branch_id',$branchId)->where('regular',1) as $menu)
                                        <div class="col-xxl-6 col-lg-12 col-md-6 col-12 menu-item">
                                            <div class="dish-card" data-id="{{ $menu->id }}">
                                                <div class="dish-img">
                                                    <img src="{{ asset('assets/images/dish-1.png') }}" alt="">
                                                </div>
                                                <div class="dish-detail">
                                                    <h2 class="dish-title" id="{{ $menu->id }}">
                                                        {{ $menu->name }}</h2>
                                                    <p class="dish-p">{{ $menu->description }}</p>
                                                    <div class="dish-plus type.lunch_time">
                                                        <span class="dish-price">${{ $menu->price }}</span>
                                                        <button class="dish-cart button-{{ $menu->id }}"
                                                            id="{{ $menu->id }}"
                                                            {{ isset(session('cart')['items'][$menu->id]) ? 'disabled' : '' }}><i
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
<div class="ingredients-popup-wrap "
    style="background-image: url( https://noon-o-kebab.com/assets/web/images/our-story-bnner.png );">
    <button class="ingredients-popup-cls-btn ingredients-popup-cls" type="button">
        <i class="fa-solid fa-xmark"></i>
    </button>
    <div class="ingredients-popup">


        <form action="#" method="POST" id="extras-submit-form">
            <input type="hidden" name="_token" value="q4XbfPCDHlveJuEMogYR6023xGprxxPVWRT90tPv"
                autocomplete="off">
            <div class="container-two">
                <div class="row">
                    <div class="col-12">
                        <h1 class="popup-pro-title text-center text-white mb-4">Family Platter C (With Seafood) (5-6)
                        </h1>
                        <p class="popup-para text-center text-white mb-5">"[1] Skewer of Barg (Filet Mignon)
                            [1] Skewer of Chenjeh (Choice Rib eye)
                            [2] Skewer of Koubideh (Ground Sirloin)
                            [1] Skewer of Joujeh (Marinated Chicken Breast)
                            [1] Skewer of Joujeh Koubideh (Seasoned ground chicken)
                            [1] Skewer Charbroiled Tomato or Vegetable
                            [1] 12 oz Persian Salad
                            [1] 12 oz Hummus
                            [1] 8 oz Hot sauce
                            Served with Greens &amp; Cheese, Persian white rice and Pita."</p>
                    </div>
                    <div class="col-12">
                        <p class="popup-sb-para"><strong>Price :</strong> $125.00</p>
                    </div>
                    <div class="col-12">
                        <hr class="border-popup mt-3">
                    </div>
                    <div class="col-12">
                        <h2 class="popup-ingredients-sb-title mb-4">EXTRA INGREDIENTS</h2>
                    </div>
                    <div class="col-12">
                        <div class="extra-ingredients-area">
                            <div class="row">
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="ingredients-checkbox-area">
                                        <input type="checkbox" value="2" class="ingredients-checkbox"
                                            data-price="$3.00" name="extra_ingredients[]"
                                            id="ingredient-8 ounce Creamy Garlic Sauce-0">
                                        <label class="ingredient-name" for="ingredient-8 ounce Creamy Garlic Sauce-0">
                                            8 ounce Creamy Garlic Sauce<span> ($3.00)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="ingredients-checkbox-area">
                                        <input type="checkbox" value="15" class="ingredients-checkbox"
                                            data-price="$3.00" name="extra_ingredients[]"
                                            id="ingredient-8oz Tahini Sauce-1">
                                        <label class="ingredient-name" for="ingredient-8oz Tahini Sauce-1">
                                            8oz Tahini Sauce<span> ($3.00)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="ingredients-checkbox-area">
                                        <input type="checkbox" value="19" class="ingredients-checkbox"
                                            data-price="$6.00" name="extra_ingredients[]"
                                            id="ingredient-White Rice (Side)-2">
                                        <label class="ingredient-name" for="ingredient-White Rice (Side)-2">
                                            White Rice (Side)<span> ($6.00)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="ingredients-checkbox-area">
                                        <input type="checkbox" value="21" class="ingredients-checkbox"
                                            data-price="$7.00" name="extra_ingredients[]"
                                            id="ingredient-Thin Cut Fries-3">
                                        <label class="ingredient-name" for="ingredient-Thin Cut Fries-3">
                                            Thin Cut Fries<span> ($7.00)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="ingredients-checkbox-area">
                                        <input type="checkbox" value="23" class="ingredients-checkbox"
                                            data-price="$3.00" name="extra_ingredients[]"
                                            id="ingredient-Charbroiled Vegetables-4">
                                        <label class="ingredient-name" for="ingredient-Charbroiled Vegetables-4">
                                            Charbroiled Vegetables<span> ($3.00)</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="ingredients-checkbox-area">
                                        <input type="checkbox" value="24" class="ingredients-checkbox"
                                            data-price="$2.00" name="extra_ingredients[]"
                                            id="ingredient-Charbroiled Tomato (2pcs)-5">
                                        <label class="ingredient-name" for="ingredient-Charbroiled Tomato (2pcs)-5">
                                            Charbroiled Tomato (2pcs)<span> ($2.00)</span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <hr class="border-popup mt-1">
                    </div>
                    <div class="col-12">
                        <h2 class="popup-ingredients-sb-title mb-4">SPECIAL REQUESTS</h2>
                        <textarea class="ingredient-text-area" name="item_special_request"></textarea>
                    </div>
                    <div class="col-12">
                        <hr class="border-popup mt-3">
                    </div>
                    <div class="col-12">
                        <p class="popup-sb-para"><strong>Total :</strong> <span class="calculate-total"
                                data-itemprice="$125.00"> $ 125.00 <span> </span></span></p>
                    </div>
                    <div class="col-12">
                        <div class="text-center">
                            <button type="button" data-uuid="fe6c3d5b-a6d5-4a9a-b127-a4b89ff3d0e6"
                                class="add-ingredients ingredients-popup-btn mt-4">add ingredients</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@include('includes.web.footer-two')

<script></script>


<script>
    $(document).ready(function() {




        @if (isset(session('cart')['items']))
            $.ajax({
                type: 'GET',
                url: "{{ route('cart.index') }}",
                success: function(response) {
                    $("#cart-main-container").html(response.cartHtml)
                }
            })
        @endif


        var selectCartArea = $('.select-cart-area');
        console.log(selectCartArea)

        $('.menu-tab-btn').on('click', function() {
            $('.menu-tab-btn').removeClass("active");
            $(this).addClass("active");
            var type = $(this).attr("id");
            console.log(type);

            $('.menu-card-d-area').addClass('d-none');
            if (type == 'lunch_time') {
                $('#menuCardLunchTime').removeClass('d-none')
            } else {
                $('#menuCardRegular').removeClass('d-none')
            }
        });

        function cartStore(type, id, quantity) {



            console.log(id)
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
                    if (response.status) {
                        $("#cart-main-container").html(response.cartHtml)
                    }
                    console.log(response)
                    var proId = response.button.split("-")[1]
                    $('.button-' + proId).prop("disabled", true);
                }
            })
        }

        const cartContainer = $("#cart-container");


        $(document).on("click", ".cart-s-close", function() {
            console.log('dasf')
            var productId = $(this).attr("data-id");
            const buttons = $(".dish-card");
            console.log('{{ url('cart/destroy') . '/' }}' + productId)

            var selectCartArea = $(this).parents(".select-cart-area")
            $.ajax({
                type: 'GET',
                url: '{{ url('cart/destroy') . '/' }}' + productId,
                success: function(response) {
                    console.log(response)

                    $('.button-' + productId).prop("disabled", false);
                }

            })
            selectCartArea.remove();


        })

        selectCartArea = $(".select-cart-area");
        $(document).on("click", ".dish-cart", function() {


            const dishCard = $(this).closest(".dish-card");




            const imgSrc = dishCard.find(".dish-img img").attr("src");
            const title = dishCard.find(".dish-title").text();
            const description = dishCard.find(".dish-p").text();
            var productId = dishCard.find(".dish-title").attr("id");
            var type = dishCard.find(".dish-plus").attr("class")
            type = type.split('.')[1]
            console.log(type)

            cartStore(type, productId, 1)


            $(`#${productId}`).find('.dish-cart')

            // $('.menu-card-d-area').each(function() {
            //     $('.dish-cart').each(function() {


            // })


            // $(document).on("click", ".cart-s-close", function() {
            //     var productId = $(this).attr("id");
            //     const buttons = $(".dish-card");
            //     var route = "{{ route('cart.destroy', 434) }}"
            //     route = route.replace('434', productId)
            //     console.log(route + productId)
            //     $.ajax({
            //         type: 'GET',
            //         url: route,
            //         success: function(response) {
            //             console.log(response)
            //         }
            //     })
            //     buttons.each(function() {
            //         const currentTitle = $(this).find(".dish-title").text();
            //         if (currentTitle === title) {
            //             $(this).find(".dish-cart").prop("disabled", false);
            //         }
            //     });

            //     selectCartArea.remove();
            // });


        });

        $(document).on("change", ".ingredients-checkbox", function() {


            if ($(this).is(':checked')) {

                var sideline = $(this).attr("data-sideline");
                var sidelineName = $(this).attr("name");

                $(`.ingredients-checkbox[name=${sidelineName}]`).prop("checked", false)
                $(this).prop("checked", true)


                var checkedValue = $(this).val();
                var productId = $(this).attr("data-id")
                var optionType = $(this).attr("data-typeoption");
                console.log(productId)
                console.log(sideline)
                console.log(checkedValue)
                console.log(optionType)

                $.ajax({
                    type: "POST",
                    url: "{{ route('cart.store') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        product_id: productId,
                        option: checkedValue,
                        sideline: sideline,
                        optiontype: optionType
                    },
                })
            } else {
                var uncheckedValue = $(this).val();
                console.log(uncheckedValue)
            }


        })



        $(document).on("click", ".ddd", function() {
            var quantityInput = $(this).parents(".sp-quantity").find("#quantityInput");


            let currentQuantity = parseInt(quantityInput.val());
            var change = parseInt($(this).attr("data-multi"));
            console.log(change)
            var productId = $(this).attr("id")


            currentQuantity = currentQuantity + +change
            quantityInput.val(currentQuantity)
            cartStore(null, productId, currentQuantity);


            console.log(currentQuantity)
            if (currentQuantity > 0) {
                quantityInput.val(currentQuantity);
                cartStore(null, productId, currentQuantity)
            }
        });
    });
</script>
