@extends('layout.web.app')
@section('content')
    <main>
        <section class="bnner-section our-story-bnner">
            <div class="container-two">
                <div class="row">
                    <div class="col-12">
                        <div class="bnner-area">
                            <h1 class="bnner-title">DINE IN</h1>
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
                                            <label class="pay-detail-sb-title">NAME</label>
                                            <input class="card-field-input" name="" placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="client-input">
                                            <label class="pay-detail-sb-title">PHONE NUMBER</label>
                                            <input class="card-field-input" name="" placeholder="" type="number">
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
                                            <label class="pay-detail-sb-title">PERSONS</label>
                                            <input class="card-field-input" name="" placeholder="" type="number">
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="client-input">
                                            <label class="pay-detail-sb-title">VENUE</label>
                                            <select class="card-field-input form-select"
                                                aria-label="Default select example">
                                                <option value=""></option>
                                                <option value="3 PERSON">3 PERSON</option>
                                                <option value="4 PERSON">4 PERSON</option>
                                                <option value="5 PERSON">5 PERSON</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="client-input">
                                            <label class="pay-detail-sb-title">DATE</label>
                                            <input class="card-field-input" name="" placeholder="" type="date">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="submit-btn text-center">
                                            <button class="mt-4" type="button">BOOK NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <x-subscribe-email/>
    </main>
@endsection

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
