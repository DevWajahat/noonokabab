<script>
    const locateValues = document.querySelectorAll('.locate-value');
    const locationSelects = document.querySelectorAll('.select-val');

    locationSelects.forEach((locationSelect) => {
        locationSelect.addEventListener('change', () => {

            const selectedOption = locationSelect.options[locationSelect.selectedIndex];

            const selectedText = selectedOption.textContent;

            console.log(selectedText, "hello");
            locateValues.forEach((locateValue) => {
                locateValue.textContent = selectedText;
            });
        });
    });

    const joinPopup = document.querySelector(".location-popup-wrap");
    const locationForm = document.querySelector('#location-form');


    @if (empty(session('location')['branch']))
        setTimeout(() => {
            joinPopup.classList.add("active");
        }, 1000);
    @endif

    locationForm.addEventListener('submit', (e) => {
        e.preventDefault();
     

    });


    $('.head-location-btn').click(function() {
        $('.location-popup-wrap').addClass('active');
    });

    const detailTabs = document.querySelectorAll("[data-view]");
    const detailTabContents = document.querySelectorAll("[data-content]");
    const locationTabInput = document.querySelector('.location-tab-input')

    detailTabs.forEach((tab) => {
        tab.addEventListener("click", () => {
            detailTabs.forEach((tab) => {
                tab.classList.remove("active");
            });
            $("[data-content]").removeClass('active')
            $(`[data-content="${tab.dataset.view}"]`).addClass('active')
            tab.classList.add("active");
            locationTabInput.value = tab.dataset.view
        });
    });





    function initAutocomplete() {
        var input = document.getElementById('autocomplete');
        var autocomplete = new google.maps.places.Autocomplete(input);

        autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            if (!place.geometry) {
                // User did not select a prediction; reset the input field.
                input.value = '';
                return;
            }
            // Do something with the selected place.
            console.log(place);
        });
    }

    const autoCompleteInput = document.querySelector('#autocomplete')

    // function geolocate() {
    //     if (navigator.geolocation) {
    //         navigator.geolocation.getCurrentPosition(function(position) {
    //             var geolocation = {
    //                 lat: position.coords.latitude,
    //                 lng: position.coords.longitude
    //             };
    //             var geocoder = new google.maps.Geocoder();
    //             geocoder.geocode({
    //                 'location': geolocation
    //             }, function(results, status) {
    //                 if (status === 'OK') {
    //                     if (results[0]) {
    //                         autoCompleteInput.value = results[0].formatted_address;
    //                     } else {
    //                         window.alert('No results found');
    //                     }
    //                 } else {
    //                     window.alert('Geocoder failed due to: ' + status);
    //                 }
    //             });
    //         });
    //     } else {
    //         window.alert('Geolocation is not supported by this browser.');
    //     }
    // }

    google.maps.event.addDomListener(window, 'load', initAutocomplete);
</script>


</body>

</html>
