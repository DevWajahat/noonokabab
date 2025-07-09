<div id="cart-container">

    @forelse (session('cart')["items"] as $item)
        <div class="select-cart-area" id="{{ $item['product']['id'] }}">
            <div class="select-img">
                <img src="{{ asset('assets/images/dish-1.png') }}" alt="">
            </div>
            <div class="select-cart-detail">
                <h2 class="s-title">{{ $item['product']['name'] }}</h2>
                <p class="s-para">{{ $item['product']['description'] }}</p>
                <div class="sp-quantity">
                    <div class="sp-minus fff"><button class="ddd" id="{{ $item['product']['id'] }}" data-multi="-1">-</button></div>
                    <div class="sp-input">
                        <input type="text" class="quantity-input" id="quantityInput" value="{{ $item['quantity'] }}" />
                    </div>
                    <div class="sp-plus fff"><button class="ddd" data-multi="1" id="{{ $item['product']['id'] }}">+</button></div>
                </div>
            </div>
            <button type="button" class="cart-s-close" data-id="{{ $item['product']['id'] }}">
                <i class="fa-solid fa-x"></i>
            </button>
        </div>
    @empty
    @endforelse

</div>
<div class="cart-select-checkout-btn">
    <a href="confirm-order.php">CHECK OUT</a>
</div>
