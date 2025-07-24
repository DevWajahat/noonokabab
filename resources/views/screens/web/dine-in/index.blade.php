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
                        <form action="{{ route('dine.store') }}" method="post">
                            @csrf
                            <div class="contact-input-area">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <div class="client-input">
                                            <label class="pay-detail-sb-title">NAME</label>
                                            <input class="card-field-input @error('name') is-invalid @enderror" name="name" placeholder="" type="text">

                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="client-input">
                                            <label class="pay-detail-sb-title">PHONE NUMBER</label>
                                            <input class="card-field-input @error('phone') is-invalid @enderror" name="phone" placeholder="" type="number">
                                            @error('phone')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="client-input">
                                            <label class="pay-detail-sb-title">E-MAIL ADDRESS</label>
                                            <input class="card-field-input @error('email') is-invalid @enderror" name="email" placeholder="" type="email">
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="client-input">
                                            <label class="pay-detail-sb-title">PERSONS</label>
                                            <input class="card-field-input @error('person') is-invalid @enderror" name="person" placeholder="" type="number">

                                            @error('person')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="client-input">
                                            <label class="pay-detail-sb-title">VENUE</label>
                                            <select class="card-field-input form-select" name="venue"
                                                aria-label="Default select example">
                                                @forelse ($branches as $branch)
                                                    <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            @error('venue')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="client-input">
                                            <label class="pay-detail-sb-title">DATE</label>
                                            <input class="card-field-input @error('date') is-invalid @enderror" name="date" placeholder="" type="date">
                                            @error('date')
                                            <span class="text-danger">{{ $message }}</span>
                                                <span class="text-danger"></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="submit-btn text-center">
                                            <button class="mt-4" type="submit">BOOK NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <x-subscribe-email />
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
