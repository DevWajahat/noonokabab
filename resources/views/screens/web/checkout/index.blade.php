@include('includes.web.head')
<main>
    <section class="confirm-payment-section">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-12 col-lg-10 col-xl-8">
                    <h1 class="conf-pay-title">Confirm Order & Pay</h1>
                    <p class="confirm-payment-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard <br> dummy text</p>
                </div>

                <div id="multi-step-form-container">
                    <form id="order-form" name="" action="{{ route('checkout.store') }}" method="post"
                        onsubmit="return validateCaptcha()">

                        @csrf

                        <section class="form-step">
                            <div class="pay-detail-select-dishes-area">
                                <div class="selected-dishes-main">
                                    <div class="selected-dishes-area">
                                        <div class="selected-bg-images">
                                            <img class="bg-img one"
                                                src="{{ asset('assets/images/confirm-pay-frame.png') }}" alt="">
                                            <img class="bg-img two"
                                                src="{{ asset('assets/images/confirm-pay-frame.png') }}" alt="">
                                            <img class="bg-img three"
                                                src="{{ asset('assets/images/confirm-pay-frame.png') }}" alt="">
                                            <img class="bg-img four"
                                                src="{{ asset('assets/images/confirm-pay-frame.png') }}" alt="">
                                        </div>
                                        <h2 class="conf-pay-sb-title">Dishes You Have Selected:</h2>

                                        <div class="selected-dishes-main-area">
                                            @forelse (session('cart')["items"] as $item)
                                                <div class="selected-dishes">
                                                    <div class="dishes-left-area">
                                                        <div class="dish-img-area">
                                                            <img class="img-fluid dish-img"
                                                                src="{{ asset('assets/images/select-dish-img-1.png') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="dish-name-area">
                                                            <h3 class="dsh-name">{{ $item['product']['name'] }}</h3>
                                                            <p class="dish-discrip">
                                                                {{ $item['product']['description'] }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="dishes-right-area">
                                                        <div class="dish-qty-area qty-container">
                                                            <button type="button" class="dish-qty-btn qty-btn-minus"
                                                                data-multi="0" data-id="{{ $item['product']['id'] }}">
                                                                <i class="fa-solid fa-minus"></i>
                                                            </button>
                                                            <input class="dish-qty input-qty" type="number"
                                                                value="{{ $item['quantity'] }}" name="" readonly
                                                                id="displayCounter">
                                                            <button type="button" class="dish-qty-btn qty-btn-plus"
                                                                data-id="{{ $item['product']['id'] }}">
                                                                <i class="fa-solid fa-plus"></i>
                                                            </button>
                                                        </div>
                                                        <div class="dish-price-area">
                                                            <span
                                                                class="select-dish-price price-{{ $item['product']['id'] }}">${{ $item['product_total'] }}</span>
                                                        </div>
                                                        <div class="dish-delete-btn-area">
                                                            <button type="button" class="dish-qty-btn dish-dlt-btn"
                                                                data-id="{{ $item['product']['id'] }}">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                <div class="pay-detail-main Order_Details">
                                    <div class="pay-detail-area">
                                        <h2 class="pay-detail-title">Order Details</h2>

                                        <label class="pay-detail-sb-title">Type</label>
                                        <div class="flex-area credit-cash-radio-area">
                                            <div class="">
                                                <input {{ session('location')['type'] == 'delivery' ? 'checked' : '' }}
                                                    class="d-none credit-cash-input" value="Delivery" type="radio"
                                                    name="Delivery_Pickup" id="Delivery">
                                                <label class="credit-cash-label" for="Delivery">
                                                    Delivery
                                                </label>
                                            </div>
                                            <div class="">
                                                <input {{ session('location')['type'] == 'takeout' ? 'checked' : '' }}
                                                    class="d-none credit-cash-input" type="radio" value="Pickup"
                                                    name="Delivery_Pickup" id="Pickup">
                                                <label class="credit-cash-label" for="Pickup">
                                                    Pickup
                                                </label>
                                            </div>
                                        </div>

                                        <div class="card-fields-area">
                                            <div class="row">
                                                <div class="col-12 col-lg-12 col-xl-12 col-xxl-6">
                                                    <div class="card-fields">
                                                        <label class="pay-detail-sb-title">Schedule for</label>
                                                        <select class="form-select card-field-input"
                                                            aria-label="Default select example">
                                                            <option value="" selected="">Today</option>
                                                            <option value="">Tomorrow</option>
                                                            <option value="">Thursday, June 27</option>
                                                            <option value="">Friday, June 28</option>
                                                            <option value="">Saturday, June 29</option>
                                                            <option value="">Sunday, June 30</option>
                                                            <option value="">Monday, July 1</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-12 col-xl-12 col-xxl-6">
                                                    <div class="card-fields">
                                                        <label class="pay-detail-sb-title">Time</label>
                                                        <select class="form-select card-field-input"
                                                            aria-label="Default select example">
                                                            <option value="asap">ASAP</option>
                                                            <option value="19:25">07:25pm</option>
                                                            <option value="19:30">07:30pm</option>
                                                            <option value="19:35">07:35pm</option>
                                                            <option value="19:40">07:40pm</option>
                                                            <option value="19:45">07:45pm</option>
                                                            <option value="19:50">07:50pm</option>
                                                            <option value="19:55">07:55pm</option>
                                                            <option value="20:00">08:00pm</option>
                                                            <option value="20:05">08:05pm</option>
                                                            <option value="20:10">08:10pm</option>
                                                            <option value="20:15">08:15pm</option>
                                                            <option value="20:20">08:20pm</option>
                                                            <option value="20:25">08:25pm</option>
                                                            <option value="20:30">08:30pm</option>
                                                            <option value="20:35">08:35pm</option>
                                                            <option value="20:40">08:40pm</option>
                                                            <option value="20:45">08:45pm</option>
                                                            <option value="20:50">08:50pm</option>
                                                            <option value="20:55">08:55pm</option>
                                                            <option value="21:00">09:00pm</option>
                                                            <option value="21:05">09:05pm</option>
                                                            <option value="21:10">09:10pm</option>
                                                            <option value="21:15">09:15pm</option>
                                                            <option value="21:20">09:20pm</option>
                                                            <option value="21:25">09:25pm</option>
                                                            <option value="21:30">09:30pm</option>
                                                            <option value="21:35">09:35pm</option>
                                                            <option value="21:40">09:40pm</option>
                                                            <option value="21:45">09:45pm</option>
                                                            <option value="21:50">09:50pm</option>
                                                            <option value="21:55">09:55pm</option>
                                                            <option value="22:00">10:00pm</option>
                                                            <option value="22:05">10:05pm</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-12 col-xl-12 col-xxl-6">
                                                    <div class="card-fields">
                                                        <label class="pay-detail-sb-title">Name</label>
                                                        <input class="card-field-input" placeholder="Name"
                                                            type="text" name="name" id="">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-12 col-xl-12 col-xxl-6">
                                                    <div class="card-fields">
                                                        <label class="pay-detail-sb-title">Phone</label>
                                                        <input class="card-field-input delivery-field pickup-field"
                                                            placeholder="Phone" type="number" name="phone_number"
                                                            id="">
                                                        <span class="required-error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-12 col-xl-12 col-xxl-6 address-fields">
                                                    <div class="card-fields">
                                                        <label class="pay-detail-sb-title">Delivery Address</label>
                                                        <input class="card-field-input delivery-field"
                                                            placeholder="Delivery Address" type="text"
                                                            name="Delivery_Address" id="">
                                                        <span class="required-error"></span>
                                                        <div
                                                            class="d-flex justify-content-start align-items-center gap-2 mt-3">
                                                            <input class="save-add-input" type="checkbox"
                                                                name="save_address" id="save-address">
                                                            <label class="checkbox-label" for="save-address">Save
                                                                address to my addresses</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-12 col-xl-12 col-xxl-6 address-fields">
                                                    <div class="card-fields">
                                                        <label class="pay-detail-sb-title">Apt, Floor, Suite</label>
                                                        <input class="card-field-input"
                                                            placeholder="Apt, Floor, Suite" type="text"
                                                            name="Apt_Floor_Suite" id="">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card-fields">
                                                        <div
                                                            class="d-flex justify-content-start align-items-center gap-2 mb-2">
                                                            <input class="save-add-input" type="checkbox"
                                                                name="Gratuity" id="Gratuity-check">
                                                            <label class="checkbox-label"
                                                                for="Gratuity-check"><b>Gratuity ($)</b></label>
                                                        </div>
                                                        <div class="position-relative">
                                                            <div
                                                                class="Gratuity-area justifycontent-center align-items-center">
                                                                <select id="percentageSelect"
                                                                    class="form-select card-field-input max-width-130"
                                                                    aria-label="Default select example">
                                                                    <option value="" selected>choose %</option>
                                                                    <option value="5">5%</option>
                                                                    <option value="6">6%</option>
                                                                    <option value="7">7%</option>
                                                                    <option value="8">8%</option>
                                                                    <option value="9">9%</option>
                                                                    <option value="10">10%</option>
                                                                    <option value="11">11%</option>
                                                                    <option value="12">12%</option>
                                                                    <option value="13">13%</option>
                                                                    <option value="14">14%</option>
                                                                    <option value="15">15%</option>
                                                                    <option value="16">16%</option>
                                                                    <option value="17">17%</option>
                                                                    <option value="18">18%</option>
                                                                    <option value="19">19%</option>
                                                                    <option value="20">20%</option>
                                                                    <option value="21">21%</option>
                                                                    <option value="22">22%</option>
                                                                    <option value="23">23%</option>
                                                                    <option value="24">24%</option>
                                                                </select>
                                                                <input class="card-field-input"
                                                                    placeholder="or enter your own" type="number"
                                                                    value="" name=""
                                                                    id="Gratuity_input">
                                                            </div>
                                                            <input class="card-field-input text-white" disabled
                                                                type="text" id="gratuity-cash"
                                                                value="Will tip in cash">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <h2 class="pay-detail-title mb-3">Discount Code</h2>
                                                </div>
                                                <div class="col-12">
                                                    <div class="card-fields position-relative">
                                                        <div
                                                            class="d-flex justify-content-start gap-2 align-items-center">
                                                            <input class="card-field-input"
                                                                placeholder="Discount Code" type="text"
                                                                name="Discount_Code" id="Discount-Code">
                                                            <button type="button"
                                                                class="pay-btn dis-btn text-center d-block mt-0">Update</button>
                                                            <span class="required-error position-absolute"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <button type="button"
                                                        class="pay-btn chekout-next-btn d-block mt-0">Next</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="pay-detail-main Payment_Details">
                                    <div class="pay-detail-area">
                                        <h2 class="pay-detail-title">Payment Details</h2>
                                        <div class="card-fields-area">
                                            <div class="row">

                                                <div class="col-12 col-lg-12 col-xl-12 col-xxl-6">
                                                    <div class="card-fields">
                                                        <input class="card-field-input" required inputmode="numeric"
                                                            placeholder="Card Number" type="text" name=""
                                                            id="cardnumber">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-12 col-xl-12 col-xxl-6">
                                                    <div class="card-fields">
                                                        <input class="card-field-input" required inputmode="numeric"
                                                            placeholder="Expiry" type="text" name=""
                                                            id="expirationdate">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-12 col-xl-12 col-xxl-6">
                                                    <div class="card-fields">
                                                        <input class="card-field-input" required inputmode="numeric"
                                                            placeholder="CVV" type="text" name=""
                                                            id="securitycode">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-lg-12 col-xl-12 col-xxl-6">
                                                    <div class="card-fields">
                                                        <input class="card-field-input" required
                                                            placeholder="Billing Zip" type="text" name=""
                                                            id="">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <label class="pay-detail-sb-title">* Validation Code</label>
                                                    <div class="card-fields">
                                                        <div id="captchaContainer">

                                                            <input type="text" class="card-field-input" required
                                                                id="captchaInput" placeholder="" />
                                                            <div class="position-relative">
                                                                <img id="captchaImg" class="img-fluid"
                                                                    src="{{ asset('assets/images/qr-code-img.png') }}"
                                                                    alt="Refresh CAPTCHA" style="cursor: pointer;">
                                                                <canvas id="captchaCanvas" width="150"
                                                                    height="49"></canvas>
                                                            </div>
                                                        </div>
                                                        <p class="dish-discrip text-white mt-1 lh-1" id="result">
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="billing-area">
                                            <div class="billing-inner-area">
                                                <span class="billing-title">Sub Total</span>
                                                <span class="billing-price"><strong>$</strong><span
                                                        id="billingPrice">380.00</span></span>
                                            </div>
                                            <div class="billing-inner-area">
                                                <span class="billing-title">Tax</span>
                                                <span class="billing-price">$40</span>
                                            </div>
                                            <div class="billing-inner-area gratuity-price-area">
                                                <span class="billing-title">Gratuity (Thank You!)</span>
                                                <span class="billing-price"><strong>$</strong><span
                                                        id="gratuityprice"></span></span>
                                            </div>
                                        </div>
                                        <div
                                            class="pay-btn-area d-flex justify-content-between align-items-center gap-3">
                                            <button type="button" class="pay-btn chekout-next-btn d-block">
                                                Go Back
                                            </button>
                                            <button type="submit" class="pay-btn">
                                                <div class="">
                                                    <span class="total-price">$470.00</span>
                                                </div>
                                                <div class="">
                                                    Pay
                                                    <i class="fa-solid fa-arrow-right-long"></i>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>


@include('includes.web.footer-two')

<script>
    let captchaValue;

    function generateCaptcha() {
        captchaValue = Math.floor(100000 + Math.random() * 900000).toString();
        const canvas = document.getElementById('captchaCanvas');
        const ctx = canvas.getContext('2d');

        ctx.clearRect(0, 0, canvas.width, canvas.height);

        ctx.font = '24px Arial';
        ctx.fillStyle = '#fff';
        ctx.textBaseline = 'middle';
        ctx.textAlign = 'center';
        ctx.fillText(captchaValue, canvas.width / 2, canvas.height / 2);
    }

    function validateCaptcha() {
        const userInput = document.getElementById('captchaInput').value;
        if (userInput === captchaValue) {
            document.getElementById('result').innerText = "Code Validated";
            return true;
        } else {
            document.getElementById('result').innerText = "Validation code does not match";
            generateCaptcha();
            return false;
        }
    }

    window.onload = generateCaptcha;
</script>






<script>
    $(document).ready(function() {



        $(document).on("click", ".dish-dlt-btn ", function() {
            $(this).parents(".selected-dishes").remove()
            var productId = $(this).attr("data-id")
            $.ajax({
                type: 'GET',
                url: '{{ url('cart/destroy') . '/' }}' + productId,
                success: function(response) {
                    console.log(response)



                }
            })
        })




        $(document).on("click", ".dish-qty-btn", function() {
            var parent = $(this).parents('.dish-qty-area');
            var quantity = parent.find("#displayCounter").val();
            var productId = $(this).attr("data-id");

            $.ajax({
                type: 'POST',
                url: "{{ route('cart.store') }}",
                data: {
                    _token: "{{ csrf_token() }}",
                    quantity: quantity,
                    product_id: productId
                },
                success: function(response) {
                    console.log(response)

                    console.log(productId)
                    $(`.price-${productId}`).html(`$${response.product_total}`)
                }
            })

            // console.log(productId)

        })


    })


    const gratuityCash = document.querySelector('#gratuity-cash')
    const gratuityArea = document.querySelector('.Gratuity-area')
    const gratuityCheck = document.querySelector('#Gratuity-check')

    gratuityCheck.addEventListener('change', () => {
        if (gratuityCheck.checked) {
            gratuityCash.classList.add('active');
            gratuityArea.classList.add('active');
            gratuityPriceArea.classList.add('active');
        } else {
            gratuityCash.classList.remove('active');
            gratuityArea.classList.remove('active');
            gratuityPriceArea.classList.remove('active');
        }
    })
</script>

<script>
    const gratuityPrice = document.querySelector('#gratuityprice');
    const gratuityPriceArea = document.querySelector('.gratuity-price-area');
    var GratuityInput = document.getElementById('Gratuity_input');

    document.getElementById('percentageSelect').addEventListener('change', function() {
        var billingPrice = parseFloat(document.getElementById('billingPrice').innerText);
        var selectedPercentage = parseFloat(this.value);
        var gratuityAmount = (billingPrice * selectedPercentage) / 100;

        GratuityInput.value = gratuityAmount.toFixed(2);

        gratuityPrice.textContent = gratuityAmount



        if (GratuityInput.value == "") {
            gratuityPriceArea.classList.remove('active')
        } else {
            gratuityPriceArea.classList.add('active')
        }
    });

    GratuityInput.addEventListener('input', () => {
        gratuityPrice.textContent = GratuityInput.value
    })
</script>


<script>
    const addressFields = document.querySelectorAll('.address-fields');
    const pickupDeliveryInputs = document.querySelectorAll("[name=Delivery_Pickup]")

    pickupDeliveryInputs.forEach((pickupDeliveryInput) => {
        pickupDeliveryInput.addEventListener('change', () => {
            console.log(pickupDeliveryInput.value);
            if (pickupDeliveryInput.value == "Pickup") {
                $('.address-fields').addClass('hidden');
            } else {
                $('.address-fields').removeClass('hidden');
            }
        })
    })
</script>


<script>
    const checkoutNextBtns = document.querySelectorAll('.chekout-next-btn');
    const checkoutDishesArea = document.querySelector('.pay-detail-select-dishes-area');
    const deliveryInputs = document.querySelectorAll('.delivery-field');
    const pickupInputs = document.querySelectorAll('.pickup-field');
    const deliveryRadio = document.getElementById('Delivery');
    const pickupRadio = document.getElementById('Pickup');

    checkoutNextBtns.forEach((checkoutNextBtn) => {
        checkoutNextBtn.addEventListener('click', () => {
            if (deliveryRadio.checked) {
                let allFieldsFilled = true;

                deliveryInputs.forEach((deliveryInput) => {
                    const errorElement = deliveryInput.parentElement.querySelector(
                        '.required-error');
                    if (deliveryInput.value) {
                        errorElement.textContent = ''; // Clear the error message
                    } else {
                        errorElement.textContent =
                            'This field is required.'; // Set the error message
                        allFieldsFilled = false; // Mark that not all fields are filled
                    }
                });

                if (allFieldsFilled) {
                    checkoutDishesArea.classList.toggle('active');
                } else {
                    checkoutDishesArea.classList.remove('active');
                }
            } else if (pickupRadio.checked) {
                let pickupFieldsFilled = true;

                pickupInputs.forEach((pickupInput) => {
                    const errorElement = pickupInput.parentElement.querySelector(
                        '.required-error');
                    if (pickupInput.value) {
                        errorElement.textContent = ''; // Clear the error message
                    } else {
                        errorElement.textContent =
                            'Please fill this field'; // Set the error message
                        pickupFieldsFilled = false; // Mark that not all fields are filled
                    }
                });

                if (pickupFieldsFilled) {
                    checkoutDishesArea.classList.toggle('active');
                } else {
                    checkoutDishesArea.classList.remove('active');
                }
            }
        });
    });
</script>


<script src="{{ asset('assets/js/imask.min.js') }}"></script>
<script src="{{ asset('assets/js/confirm-order.js') }}"></script>
