<div class="footer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="footer-logo">
                    <img src="{{ asset("assets/images/noon-o-kabab-logo.png") }}" alt="">
                </div>
                <div class="footer-social-link">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="footer-copyright">
                    <p>© Chicago Persian Restaurant - Authentic Persian Cuisine - Middle Eastern Food - Mediterranean Dining </p>
                    <p>4701 N. Kedzie Ave, Chicago, IL 60625 | <a href="tel:(773) 279 8899">(773) 279 8899</a> </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="location-popup-wrap">
    <div class="location-popup-area">
        <div class="location-popup">
            <img class="img-fluid select-location-logo" src="{{ asset("assets/images/noon-o-kabab-logo.png") }}" alt="">
            <h4 class="branch-title">Please Select Location</h4>
            <ul class="select-area-list">
                <input class="location-tab-input" type="hidden" name="" value="Delivery">
                <li class="">
                    <button data-view="Delivery" type="button" class="location-btns active">Delivery</button>
                </li>
                <li class="">
                    <button data-view="Pickup" type="button" class="location-btns">Pickup</button>
                </li>
            </ul>
            <form id="location-form" action="">
                <div data-content="Delivery" class="locat-area active">
                    <select class="form-select location-select select-val" aria-label="Default select example">
                        <option disabled selected>Select Restaurants</option>
                        <option value="One">One</option>
                        <option value="Two">Two</option>
                        <option value="Three">Three</option>
                    </select>
                    <div class="location-input-area">
                        <input placeholder="Enter your location" class="location-select" type="text" name="" id="autocomplete">
                        <button onclick="geolocate()" type="button" class="current-location-btn">
                            <i class="fa-solid fa-location-dot"></i>
                        </button>
                    </div>
                </div>
                <div data-content="Pickup" class="locat-area">
                    <select class="form-select location-select select-val" aria-label="Default select example">
                        <option disabled selected>Select Pickup Location</option>
                        <option value="Albany Park">Albany Park</option>
                        <option value="Hickory Hills"> Hickory Hills</option>
                        <option value="Highwood">Highwood</option>
                    </select>
                </div>
                <button type="submit" class="locate-select-btn">Select</button>
            </form>
        </div>
    </div>
</div>


<script src="{{ asset("assets/js/jquery.js") }}"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
{{-- <script src="{{ asset("assets/js/bootstrap.bundle.min.js") }}"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBTbMcgGot8-R7Rmn7ks6u7PuAeHa-qdB8&amp;libraries=places"></script>
<script src="{{ asset("assets/js/index.js") }}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/js/mdb.min.js" integrity="sha512-XFd1m0eHgU1F05yOmuzEklFHtiacLVbtdBufAyZwFR0zfcq7vc6iJuxerGPyVFOXlPGgM8Uhem9gwzMI8SJ5uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}



