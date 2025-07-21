j@extends('layout.web.app')

@section('content')
<main>
    <section class="bnner-section our-story-bnner">
        <div class="container-two">
            <div class="row">
                <div class="col-12">
                    <div class="bnner-area">
                        <h1 class="bnner-title">CONTACT US</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-us-sec">
        <div class="container-two">
            <div class="row">
                <div class="col-12">
                    <form action="">
                        <div class="contact-input-area">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <div class="client-input">
                                        <label class="pay-detail-sb-title">FIRST NAME</label>
                                        <input class="card-field-input" name="" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="client-input">
                                        <label class="pay-detail-sb-title">LAST NAME</label>
                                        <input class="card-field-input" name="" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="client-input">
                                        <label class="pay-detail-sb-title">E-MAIL ADDRESS</label>
                                        <input class="card-field-input" name="" placeholder="" type="email">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="client-input">
                                        <label class="pay-detail-sb-title">PHONE</label>
                                        <input class="card-field-input" name="" placeholder="" type="number">
                                    </div>
                                </div>

                                <div class="col-12 col-lg-6 free-quo">
                                    <div class="client-input">
                                        <label class="pay-detail-sb-title">EVENT TYPE</label>
                                        <input class="card-field-input" name="" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 free-quo">
                                    <div class="client-input">
                                        <label class="pay-detail-sb-title">EVENT DATE</label>
                                        <input class="card-field-input" name="" placeholder="" type="date">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 free-quo">
                                    <div class="client-input">
                                        <label class="pay-detail-sb-title">GUEST COUNT</label>
                                        <input class="card-field-input" name="" placeholder="" type="number">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 free-quo">
                                    <div class="client-input">
                                        <label class="pay-detail-sb-title">MENU STYLE</label>
                                        <input class="card-field-input" name="" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 free-quo">
                                    <div class="client-input">
                                        <label class="pay-detail-sb-title">Dietary restrictions/allergies</label>
                                        <input class="card-field-input" name="" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 free-quo">
                                    <div class="client-input">
                                        <label class="pay-detail-sb-title">Do you have a venue? If so, where?</label>
                                        <input class="card-field-input" name="" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 free-quo">
                                    <div class="client-input">
                                        <label class="pay-detail-sb-title">How did you hear about us?</label>
                                        <input class="card-field-input" name="" placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="free-qoute-radio align-items-center">
                                        <input id="free-qoute" type="checkbox">
                                        <label class="checkbox-label" for="free-qoute">Request a free quote</label>
                                    </div>
                                </div>
                                <!-- <div class="free-quo">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <div class="client-input">
                                                    <label class="pay-detail-sb-title">EVENT TYPE</label>
                                                    <input class="card-field-input" name="" placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="client-input">
                                                    <label class="pay-detail-sb-title">EVENT DATE</label>
                                                    <input class="card-field-input" name="" placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="client-input">
                                                    <label class="pay-detail-sb-title">GUEST COUNT</label>
                                                    <input class="card-field-input" name="" placeholder="" type="number">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="client-input">
                                                    <label class="pay-detail-sb-title">MENU STYLE</label>
                                                    <input class="card-field-input" name="" placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="client-input">
                                                    <label class="pay-detail-sb-title">Dietary restrictions/allergies</label>
                                                    <input class="card-field-input" name="" placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="client-input">
                                                    <label class="pay-detail-sb-title">Do you have a venue? If so, where?</label>
                                                    <input class="card-field-input" name="" placeholder="" type="text">
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="client-input">
                                                    <label class="pay-detail-sb-title">How did you hear about us?</label>
                                                    <input class="card-field-input" name="" placeholder="" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-12 col-lg-6">
                                    <div class="client-input">
                                        <label class="pay-detail-sb-title">COMMENTS</label>
                                        <textarea class="card-field-input" name="" id=""></textarea>
                                    </div>
                                </div>
                                <div class="col-12 ">
                                    <div class="free-qoute-radio">
                                        <input type="checkbox" id="i-agree">
                                        <label class="checkbox-label mt-1" for="i-agree">I agree to receive discount and special offer e-mails from Chicago Persian Restaurant - Authentic Persian Cuisine - Middle Eastern Food - Mediterranean Dining</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="submit-btn text-center">
                                        <button class="mt-4" type="button">Submit</button>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="free-qoute-radio">
                                <input id="free-qoute" type="checkbox">
                                <label for="free-qoute">Request a free quote</label>
                            </div>
                            <div class="free-quo" id="quote-form">
                                <div class="client-input">
                                    <label class="pay-detail-sb-title">EVENT TYPE</label>
                                    <input class="card-field-input" name="" placeholder="" type="text">
                                </div>
                                <div class="client-input">
                                    <label class="pay-detail-sb-title">EVENT DATE</label>
                                    <input class="card-field-input" name="" placeholder="" type="text">
                                </div>
                                <div class="client-input">
                                    <label class="pay-detail-sb-title">GUEST COUNT</label>
                                    <input class="card-field-input" name="" placeholder="" type="number">
                                </div>
                                <div class="client-input">
                                    <label class="pay-detail-sb-title">MENU STYLE</label>
                                    <input class="card-field-input" name="" placeholder="" type="text">
                                </div>
                            </div>
                            <div class="free-quo" id="quote-form2">
                                <div class="client-input">
                                    <label class="pay-detail-sb-title">Dietary restrictions/allergies</label>
                                    <input class="card-field-input" name="" placeholder="" type="text">
                                </div>
                                <div class="client-input">
                                    <label class="pay-detail-sb-title">Do you have a venue? If so, where?</label>
                                    <input class="card-field-input" name="" placeholder="" type="text">
                                </div>
                                <div class="client-input">
                                    <label class="pay-detail-sb-title">How did you hear about us?</label>
                                    <input class="card-field-input" name="" placeholder="" type="text">
                                </div>
                            </div>
                            <div class="contact-client-detail">
                                <div class="client-input">
                                    <label class="pay-detail-sb-title">COMMENTS</label>
                                    <textarea class="card-field-input" name="" id=""></textarea>
                                </div>
                            </div>
                            <div class="free-qoute-radio">
                                <input type="checkbox" id="i-agree">
                                <label for="i-agree">I agree to receive discount and special offer e-mails from Chicago Persian Restaurant - Authentic Persian Cuisine - Middle Eastern Food - Mediterranean Dining</label>
                            </div>
                            <div class="submit-btn text-end">
                                <button class="mt-0" type="button">Submit</button>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>


<x-subscribe-email/>


@endsection









<?php
// include "subscribe-email.php"
?>
<?php
// include "footer-2.php"
?>

@push('scripts')
<script>
    document.getElementById('free-qoute').addEventListener('change', function() {
        var quoteForms = document.querySelectorAll('.free-quo');
        quoteForms.forEach(function(form) {
            form.style.display = this.checked ? 'block' : 'none';
        }, this);
    });
</script>
@endpush
