<div id="cart-container">
    @php
        use App\Models\Menu;
    @endphp

    @forelse (session('cart')["items"] as $item)
        <div class="select-cart-area" id="{{ $item['product']['id'] }}">
            <div class="select-cart-area-top">
                <div class="select-img">
                    <img src="{{ asset('assets/images/dish-1.png') }}" alt="">
                </div>
                <div class="select-cart-detail">
                    <h2 class="s-title">{{ $item['product']['name'] }}</h2>
                    <p class="s-para">{{ $item['product']['description'] }}</p>
                    <div class="sp-quantity">
                        <div class="sp-minus fff"><button class="ddd" id="{{ $item['product']['id'] }}"
                                data-multi="-1">-</button></div>
                        <div class="sp-input">
                            <input type="text" class="quantity-input" id="quantityInput"
                                value="{{ $item['quantity'] }}" />
                        </div>
                        <div class="sp-plus fff"><button class="ddd" data-multi="1"
                                id="{{ $item['product']['id'] }}">+</button></div>
                    </div>
                </div>
            </div>


            @php
                $menu = Menu::find($item['product']['id']);
            @endphp
            @forelse ($menu->sidelines as $sideline)
            <hr>
            <div class="select-cart-area-bottom mt-3">
                <h2 class="popup-ingredients-sb-title text-black mb-3 mb-2">{{ $sideline->name }}</h2>
            </div>
            @forelse ($sideline->options as $option)

            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-2">
                <div class="ingredients-checkbox-area">
                    <input type="{{ $option->sideline->option == 'Optional' ? 'checkbox' : 'radio'  }}" value="{{ $option->name }}"
                        class="ingredients-checkbox sides-checkbox sides-checkbox-optional" name="side_{{ $option->sideline->id }}"
                        id="side_{{ $option->sideline->id }}_{{ $option->id }}" data-id="{{ $menu->id }}" data-sideline="{{ $sideline->name }}" data-typeoption="{{ $sideline->option }}" >
                    <label class="ingredient-name text-black" for="side_{{ $option->sideline->id }}_{{ $option->id }}">
                        {{ $option->name }}
                    </label>
                </div>
            </div>
            @empty
            @endforelse
            <div class="row sides-checkbox-area-row">


            </div>

            @empty

            @endforelse

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
