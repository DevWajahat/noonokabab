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
                    {{-- <div class="header-links "> --}}
                    <button type="button" class="head-location-btn mt-5">
                        <div class="">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="">
                            {{-- @dd(session('location')) --}}
                            <span class="spn-1">Change Location</span>
                            @if (isset(session('location')['branch'][0]['name']))
                                <span class="spn-2 locate-value">{{ session('location')['branch']['0']['name'] }}</span>
                            @else
                                <span class="spn-2 locate-value">Change Location</span>
                            @endif
                        </div>
                    </button>
                    {{-- </div> --}}
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
                                                    <img src="{{ asset('assets/images/dish-1.png') }}"
                                                        alt="">
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
                <div class=" col-lg-2 col-2 ">
                    <div class="login-btn">
                        <a href="{{ route('login') }}">LOGIN/SIGNUP</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <div class="location-popup-wrap">
        <div class="location-popup-area">
            <div class="location-popup">
                <img class="img-fluid select-location-logo" src="{{ asset('assets/images/noon-o-kabab-logo.png') }}"
                    alt="">
                <h4 class="branch-title">Please Select Location</h4>
                <form id="location-form" action="">
                    <ul class="select-area-list">
                        <input class="location-tab-input" type="hidden" name="" value="delivery">
                        <li class="">
                            <button data-view="delivery" type="button"
                                class="location-btns active">Delivery</button>
                        </li>
                        <li class="">
                            <button data-view="takeout" type="button" class="location-btns">Pickup</button>
                        </li>
                    </ul>
                    <div class="locat-area active">
                        <select class="restaurantSelect form-select location-select select-val"
                            aria-label="Default select example" data-content="delivery">
                            <option disabled >Select Restaurants</option>
                            @forelse ($branches as $branch)
                                <option value="{{ $branch->id }}" {{ $branch->id == session('location')['branch'][0]['id'] ? 'selected' : '' }}>{{ $branch->name }}</option>
                            @empty
                            @endforelse

                        </select>
                        <span class="text-danger errorRestaurant" style="color:red"></span>
                        <div class="location-input-area">
                            <input placeholder="Enter your location" class="restaurantSelect location-select"
                                type="text" name="" id="cordinate" data-location="takeout">
                            <button id="getLocation" type="button" class="current-location-btn">
                                <i class="fa-solid fa-location-dot"></i>
                            </button>
                        </div>
                    </div>
                    <div class="locat-area">
                        <select data-content="takeout" class="form-select location-select select-val"
                            id="pickupLocation" aria-label="Default select example">
                            <option disabled selected>Select Pickup Location</option>
                            @forelse ($branches as $branch)
                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                    <button type="submit" id="locateSelectBtn" class="locate-select-btn">Select</button>
                </form>
            </div>
        </div>
    </div>

</main>
<x-ingredients-popup />

@include('includes.web.footer-two')

<script></script>


<script>
    $(document).ready(function() {

        $(document).on("click",".head-location-btn",function () {
            $('.location-popup-wrap').addClass("active")
        })

        $('#location-form').on("submit", function(e) {

            e.preventDefault()
            var restaurantSelect = $('.restaurantSelect').find(":selected").val()
            var locationType = $('.location-btns.active').attr("data-view");
            console.log(locationType)
            if (parseInt($('.location-select').val())) {


                $.ajax({
                    type: 'POST',
                    url: "{{ route('location') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        location: restaurantSelect,
                        type: locationType,

                    },
                    success: function(response) {

                        console.log(response)

                            window.location.href = response.location.route
                        $('.location-popup-wrap').removeClass('active')



                    }
                })
            } else {
                $('.errorRestaurant').html('Required Value');
            }
        })

        $('.location-btns').on("click",function () {
            $('.location-btns').removeClass("active")
            $(this).addClass("active")
        })

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



        $(document).on('click', ".menu-tab-btn",function() {
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



        $(document).on("click", ".ingredients", function() {
            $('.ingredients-popup-wrap').addClass("active")
            var menuId = $(this).attr("id")
            $.ajax({
                type: 'GET',
                url: '{{ url('menu/extra/ingredients') . '/' }}' + menuId,
                success: function(response) {
                    console.log(response);
                    console.log(response.menu.name)
                    $('.popup-pro-title').html(response.menu.name)
                    $('.popup-sb-para').html(
                        `<strong>Price :</strong> $${response.menu.price}`)
                    $('.popup-sb-para').attr('data-price', response.menu.price)
                    $('.ingredients-row').html('')


                    $.each(response.ingredients, function(index, element) {
                        // console.log(element)
                        $('.ingredients-row').append(`
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="ingredients-checkbox-area">
                                <input type="checkbox" value="${element.id}" data-product-id="${response.menu.id}" class="extra-ingredients-box" data-price="${element.price}"   name="extra_ingredients[]"
                                    id="ingredient-${element.id}" data-product-price="${response.menu.price}"  >
                                <label class="ingredient-name"
                                    for="ingredient-${element.id}">
                                    ${element.name}<span> ($${element.price})</span>
                                </label>
                            </div>
                        </div>
                        `)

                    })

                    $.each(response.ingredientId, function(index, element) {
                        // console.log(element)
                        $(`#ingredient-${element}`).prop("checked", true)
                    })

                    $('.ingredient-text-area').val(response.request_special)

                    $('#IngredientSubmit').attr("data-product-id", response.menu.id);
                }
            })

        })

        $(document).on("click", ".ingredients-popup-cls-btn", function() {
            $('.ingredients-popup-wrap').removeClass("active")


        })

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
                    if (response.status) {
                        $("#cart-main-container").html(response.cartHtml)
                    }
                    // console.log(response)
                    var proId = response.button.split("-")[1]
                    $('.button-' + proId).prop("disabled", true);
                }
            })
        }

        const cartContainer = $("#cart-container");


        $(document).on("click", ".cart-s-close", function() {
            // console.log('dasf')
            var productId = $(this).attr("data-id");
            const buttons = $(".dish-card");
            // console.log('{{ url('cart/destroy') . '/' }}' + productId)

            var selectCartArea = $(this).parents(".select-cart-area")
            $.ajax({
                type: 'GET',
                url: '{{ url('cart/destroy') . '/' }}' + productId,
                success: function(response) {
                    // console.log(response)

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
            // console.log(type)

            cartStore(type, productId, 1)


            $(`#${productId}`).find('.dish-cart')


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



                // console.log(productId)
                // console.log(sideline)
                // console.log(checkedValue)
                // console.log(optionType)

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
                // console.log(uncheckedValue)
            }


        })

        $(document).on("change", ".extra-ingredients-box", function() {

            var ingredients = $(this).val();
            var price = $(this).attr("data-price")
            var productPrice = $('#totalPrice').attr("data-price");
            var productId = $(this).attr("data-product-id");

            console.log(ingredients)
            console.log(price)
            console.log(productId)
            console.log(productPrice)



            if ($(this).is(":checked")) {
                var totalPrice = parseFloat(price) + parseFloat(productPrice)
                console.log(totalPrice)
                $('#totalPrice').attr("data-price", totalPrice)
                $('#totalPrice').html(`<strong>Total: </strong> ${totalPrice}`)

            } else {
                var totalPrice = parseFloat(productPrice) - parseFloat(price)
                console.log(totalPrice)
                $('#totalPrice').attr("data-price", totalPrice)
                $('#totalPrice').html(`<strong>Total: </strong> ${totalPrice}`)
            }
        })


        var checkedValues = {}
        $(document).on("submit", "#extras-submit-form", function(e) {
            e.preventDefault();
            var productId = $('#IngredientSubmit').attr("data-product-id");
            var specialRequest = $('.ingredient-text-area').val();
            checkedValues = {}
            $('input[class="extra-ingredients-box"]:checked').each(function() {
                var key = $(this).val();
                var price = $(this).attr("data-price");
                checkedValues[key] = price


                // $()
            })


            console.log(checkedValues)

            $.ajax({
                type: "POST",
                url: "{{ route('cart.store') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    product_id: productId,
                    ingredients: checkedValues,
                    special_request: specialRequest
                },
                success: function(response) {
                    console.log(response)

                    $('.ingredients-popup-wrap').removeClass("active");

                    Swal.fire({
                        title: "Ingredients Added Successfully",
                        icon: "success",
                        draggable: false
                    });
                }
            })
        })

        $(document).on("click", ".ddd", function() {
            var quantityInput = $(this).parents(".sp-quantity").find("#quantityInput");


            let currentQuantity = parseInt(quantityInput.val());
            var change = parseInt($(this).attr("data-multi"));
            // console.log(change)
            var productId = $(this).attr("id")


            currentQuantity = currentQuantity + +change
            quantityInput.val(currentQuantity)
            cartStore(null, productId, currentQuantity);



            if (currentQuantity > 0) {
                quantityInput.val(currentQuantity);
                cartStore(null, productId, currentQuantity)
            }
        });
    });
</script>
