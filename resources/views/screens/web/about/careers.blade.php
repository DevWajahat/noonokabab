@extends('layout.web.app')
@section('content')
    <main>
        <section class="bnner-section careers-bnner">
            <div class="container-two">
                <div class="row">
                    <div class="col-12">
                        <div class="bnner-area">
                            <h1 class="bnner-title">Careers</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="careers-section">
            <img class="img-fluid left-img" src="{{ asset("assets/images/main-side-design.png") }}" alt="">
            <div class="container-two">
                <div class="row">
                    <div class="col-12">
                        <h1 class="section-title">We Offer Job Opportunities</h1>
                    </div>
                    <div class="careers-job-area">


                        <div class="careers-job-detail bg-color">
                            <div class="job-img-name-area">
                                <div class="job-img-area">
                                    <img class="job-img img-fluid" src="{{ asset("assets/images/career-job-img-1.png") }}"
                                        alt="">
                                </div>
                                <div class="job-name-area">
                                    <span class="job-status">NEW!</span>
                                    <h2 class="job-name">Waiter Job</h2>
                                    <div class="job-time-area">
                                        <span class="job-time">Full Time</span>
                                        <span class="job-time">2 days ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="job-apply-btna-rea">
                                <button class="job-apply-now primary-a apply-job-btn" type="button">APPLY NOW</button>
                            </div>
                        </div>

                        <div class="careers-job-detail">
                            <div class="job-img-name-area">
                                <div class="job-img-area">
                                    <img class="job-img img-fluid" src="{{ asset("assets/images/career-job-img-2.png") }}"
                                        alt="">
                                </div>
                                <div class="job-name-area">
                                    <span class="job-status">NEW!</span>
                                    <h2 class="job-name">Chef Job</h2>
                                    <div class="job-time-area">
                                        <span class="job-time">Part Time</span>
                                        <span class="job-time">2 days ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="job-apply-btna-rea">
                                <button class="job-apply-now primary-a apply-job-btn" type="button">APPLY NOW</button>
                            </div>
                        </div>

                        <div class="careers-job-detail bg-color">
                            <div class="job-img-name-area">
                                <div class="job-img-area">
                                    <img class="job-img img-fluid" src="{{ asset("assets/images/career-job-img-1.png") }}"
                                        alt="">
                                </div>
                                <div class="job-name-area">
                                    <span class="job-status">NEW!</span>
                                    <h2 class="job-name">Waiter Job</h2>
                                    <div class="job-time-area">
                                        <span class="job-time">Full Time</span>
                                        <span class="job-time">2 days ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="job-apply-btna-rea">
                                <button class="job-apply-now primary-a apply-job-btn" type="button">APPLY NOW</button>
                            </div>
                        </div>

                        <div class="careers-job-detail">
                            <div class="job-img-name-area">
                                <div class="job-img-area">
                                    <img class="job-img img-fluid" src="{{ asset("assets/images/career-job-img-2.png") }}"
                                        alt="">
                                </div>
                                <div class="job-name-area">
                                    <span class="job-status">NEW!</span>
                                    <h2 class="job-name">Chef Job</h2>
                                    <div class="job-time-area">
                                        <span class="job-time">Part Time</span>
                                        <span class="job-time">2 days ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="job-apply-btna-rea">
                                <button class="job-apply-now primary-a apply-job-btn" type="button">APPLY NOW</button>
                            </div>
                        </div>

                        <div class="careers-job-detail bg-color">
                            <div class="job-img-name-area">
                                <div class="job-img-area">
                                    <img class="job-img img-fluid" src="{{ asset("assets/images/career-job-img-1.png") }}"
                                        alt="">
                                </div>
                                <div class="job-name-area">
                                    <span class="job-status">NEW!</span>
                                    <h2 class="job-name">Waiter Job</h2>
                                    <div class="job-time-area">
                                        <span class="job-time">Full Time</span>
                                        <span class="job-time">2 days ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="job-apply-btna-rea">
                                <button class="job-apply-now primary-a apply-job-btn" type="button">APPLY NOW</button>
                            </div>
                        </div>

                        <div class="careers-job-detail">
                            <div class="job-img-name-area">
                                <div class="job-img-area">
                                    <img class="job-img img-fluid" src="{{ asset("assets/images/career-job-img-2.png") }}"
                                        alt="">
                                </div>
                                <div class="job-name-area">
                                    <span class="job-status">NEW!</span>
                                    <h2 class="job-name">Chef Job</h2>
                                    <div class="job-time-area">
                                        <span class="job-time">Part Time</span>
                                        <span class="job-time">2 days ago</span>
                                    </div>
                                </div>
                            </div>
                            <div class="job-apply-btna-rea">
                                <button class="job-apply-now primary-a apply-job-btn" type="button">APPLY NOW</button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>




    <div class="job-apply-popup-wrap">
        <div class="job-apply-popup position-relative">
            <button class="app-cls-btn apply-job-btn" type="button">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <form action="">
                <div class="job-apply-fields mb-3">
                    <label class="pay-detail-sb-title">Name</label>
                    <input class="card-field-input" placeholder="Name" type="text" name="" id="">
                </div>
                <div class="job-apply-fields mb-3">
                    <label class="pay-detail-sb-title">Email</label>
                    <input class="card-field-input" placeholder="Email" type="email" name="" id="">
                </div>
                <div class="job-apply-fields mb-3">
                    <label class="pay-detail-sb-title">Phone</label>
                    <input class="card-field-input" placeholder="Phone" type="phone" name="" id="">
                </div>
                <div class="job-apply-fields">
                    <label for="cv-upload" class="cv-upload-label">Upload CV</label>
                    <input class="" placeholder="Name" type="file" name="" id="cv-upload"
                        accept="application/pdf">
                    <p class="checkbox-label mt-2" id="file-name"></p>
                </div>
                <div class="text-center">
                    <button class="job-app-btn">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection


@push('scripts')

    <script>
        const uploadCv = document.querySelector('#cv-upload')

        uploadCv.addEventListener('change', function() {
            const fileInput = this;
            const fileNameElement = document.getElementById('file-name');
            if (fileInput.files.length > 0) {
                const fileName = fileInput.files[0].name;

                console.log(uploadCv.value);

                fileNameElement.textContent = `Uploaded file: ${fileName}`;
            } else {
                fileNameElement.textContent = '';
            }
        });
    </script>
    <script>
        const applyJobBtns = document.querySelectorAll('.apply-job-btn');
        const applyJobPopup = document.querySelector('.job-apply-popup-wrap');

        applyJobBtns.forEach((applyJobBtn) => {
            applyJobBtn.addEventListener('click', () => {
                applyJobPopup.classList.toggle('active')
            })
        })
    </script>
@endpush


