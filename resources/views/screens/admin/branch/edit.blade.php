@extends('layout.admin.app')

@section('content')
    <div class="content-body ">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="bg-white">
                        <div class="card-body">
                            <h4 class="section-title">Edit Branch</h4>
                            <form action="{{ route('admin.branch.update', $branch->id) }}" method="post" class="mb-0">
                                @csrf
                                <div class="row">

                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Country</label>
                                        <input type="text" placeholder="Country Name" name="country" id=""
                                            class="form-control @error('country') is-invalid @enderror"
                                            value="{{ $branch->country }}">

                                        @error('country')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Select lunch time</label>
                                        <select class="form-select form-control" aria-label="Default select example"
                                            name="lunch_time">
                                            @forelse ($lunchTimes as $lunchTime)
                                                <option value="{{ $lunchTime->id }}"
                                                    {{ $lunchTime->id == $branch->lunch_time_id ? 'selected' : '' }}>
                                                    {{ $lunchTime->from }} - {{ $lunchTime->to }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>

                                    <div class="mb-3 col-12 col-lg-6">
                                        <label for="">Categories</label>
                                        {{-- @dd($branch->categories) --}}
                                        <select class="js-example-basic-multiple" name="categories[]" multiple="multiple">
                                            @forelse ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ is_array($branchCategories) && in_array($category->id, $branchCategories) ? 'selected' : '' }}>
                                                    {{ $category->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>

                                    </div>

                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">State</label>
                                        <input type="text" placeholder="State Name" name="state"
                                            value="{{ $branch->state }}" id=""
                                            class="form-control @error('state') is-invalid @enderror">

                                        @error('state')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">City</label>
                                        <input type="text" placeholder="City Name" name="city"
                                            value="{{ $branch->city }}" id=""
                                            class="form-control @error('city') is-invalid @enderror">

                                        @error('city')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Zip</label>
                                        <input type="text" placeholder="Zip Code" name="zip"
                                            value="{{ $branch->zip }}" id=""
                                            class="form-control @error('zip') is-invalid @enderror">

                                        @error('zip')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Address</label>
                                        <input type="text" placeholder="Address" name="address" id=""
                                            value="{{ $branch->address }}"
                                            class="form-control @error('address') is-invalid @enderror">

                                        @error('address')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Branch Name</label>
                                        <input type="text" placeholder="Branch Name" name="name" id=""
                                            value="{{ $branch->name }}"
                                            class="form-control @error('name') is-invalid @enderror">
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Contact Number</label>
                                        <input type="number" placeholder="Contact Number" name="contact" id=""
                                            value="{{ $branch->contact }}"
                                            class="form-control @error('contact') is-invalid @enderror">
                                        @error('contact')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Open Time</label>
                                        <input type="time" name="open_time" id=""
                                            value="{{ $branch->open_time }}"
                                            class="form-control @error('open_time') is-invalid @enderror ">
                                        @error('open_time')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Close Time</label>
                                        <input type="time" name="close_time" id=""
                                            value="{{ $branch->close_time }}"
                                            class="form-control  @error('close_time') is-invalid @enderror">
                                        @error('close_time')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Code</label>
                                        <input type="text" placeholder="Code" name="code" id=""
                                            value="{{ $branch->code }}"
                                            class="form-control @error('code') is-invalid @enderror">
                                        @error('code')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary bg-deepblue" type="submit">Update Branch</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const eyeBtns = document.querySelectorAll(".eye-btn");

        eyeBtns.forEach((eyeBtn) => {
            eyeBtn.addEventListener("click", () => {
                const myInput = eyeBtn.previousElementSibling;
                const icon = eyeBtn.querySelector("i");

                if (myInput.type === "password") {
                    myInput.type = "text";
                    icon.classList.remove("fa-eye-slash");
                    icon.classList.add("fa-eye");
                } else {
                    myInput.type = "password";
                    icon.classList.add("fa-eye-slash");
                    icon.classList.remove("fa-eye");
                }
            });


        });

        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
@endpush
