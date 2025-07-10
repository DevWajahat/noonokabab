<div class="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="footer-logo">
                    <img src="{{ asset('assets/images/noon-o-kabab-logo.png') }}" alt="">
                </div>
                <div class="footer-social-link">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="footer-copyright">
                    <p>© Chicago Persian Restaurant - Authentic Persian Cuisine - Middle Eastern Food - Mediterranean
                        Dining </p>
                    <p>4701 N. Kedzie Ave, Chicago, IL 60625 | <a href="tel:(773) 279 8899">(773) 279 8899</a> </p>
                </div>
            </div>
        </div>
    </div>
</div>

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
                        <button data-view="delivery" type="button" class="location-btns active">Delivery</button>
                    </li>
                    <li class="">
                        <button data-view="takeout" type="button" class="location-btns">Pickup</button>
                    </li>
                </ul>
                <div  class="locat-area active">
                    <select class="restaurantSelect form-select location-select select-val"
                        aria-label="Default select example" data-content="delivery">
                        <option disabled selected>Select Restaurants</option>
                        @forelse ($branches as $branch)
                            <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                        @empty
                        @endforelse

                    </select>
                    <span class="text-danger errorRestaurant" style="color:red"></span>
                    <div class="location-input-area">
                        <input placeholder="Enter your location" class="pickupSelect location-select" type="text"
                            name="" id="cordinate" data-location="takeout">
                        <button id="getLocation" type="button" class="current-location-btn">
                            <i class="fa-solid fa-location-dot"></i>
                        </button>
                    </div>
                </div>
                <div  class="locat-area">
                    <select data-content="takeout" class="form-select location-select select-val" id="pickupLocation"
                        aria-label="Default select example">
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


<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.14.1/jquery-ui.min.js" integrity="sha512-MSOo1aY+3pXCOCdGAYoBZ6YGI0aragoQsg1mKKBHXCYPIWxamwOE7Drh+N5CPgGI5SA9IEKJiPjdfqWFWmZtRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
{{-- <script src="{{ asset("assets/js/bootstrap.bundle.min.js") }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD28UEoebX1hKscL3odt2TiTRVfe5SSpwE&amp;libraries=places">
</script>
<script src="{{ asset('assets/js/index.js') }}"></script>

<script>
    // const location =

    $(document).ready(function() {


        $('.orderRoute').on("click",function () {
            @if(session('location') !== null)
            var route = "{{ session('location')['route'] }}";
            $(this).attr("href",route);
            console.log(route)
            @endif

        })


        $('#location-form').on("submit", function(e) {

            var restaurantSelect = $('.restaurantSelect').find(':selected').val()
            var pickupSelect = $('.pickupSelect').find(':selected').val()

            if(parseInt($('.location-select').val())){
                var type = $('.location-select').attr("data-content")
                console.log(type)

                $.ajax({
                    type: 'POST',
                    url: "{{ route('location') }}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        location: restaurantSelect,
                        type: type,

                    },
                    success: function(response) {

                        console.log(response)


                            $('.orderRoute').attr("href", response.location.route)
                            $('.location-popup-wrap').removeClass('active')



                    }
                })
            }
            else{
                $('.errorRestaurant').html('Required Value');
            }




            // } else {
            //     $('.errorRestaurant').text("Required Value")
            //     e.preventDefault();
            // }

        })
    })
</script>
