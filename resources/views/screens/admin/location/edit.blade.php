@extends('layout.admin.app')

@section('content')
    <div class="content-body ">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="bg-white">
                        <div class="card-body">
                            <h4 class="section-title">Edit Location</h4>
                            <form action="." class="mb-0">
                                <div class="row">
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Location Name</label>
                                        <input type="text" placeholder="Location Name" name="" id=""
                                            class="form-control">
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Address</label>
                                        <input type="text" placeholder="Address" name="" id=""
                                            class="form-control">
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Country</label>
                                        <input type="text" placeholder="Country" name="" id=""
                                            class="form-control">
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">state</label>
                                        <input type="text" placeholder="state" name="" id=""
                                            class="form-control">
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">City</label>
                                        <input type="text" placeholder="City" name="" id=""
                                            class="form-control">
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Zip</label>
                                        <input type="number" placeholder="Zip" name="" id=""
                                            class="form-control">
                                    </div>
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary bg-deepblue" type="submit">Add Location</button>
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
    </script>
@endpush
