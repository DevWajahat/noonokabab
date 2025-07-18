@extends('layout.admin.app')

@section('content')
    <div class="content-body ">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="">
                                <h4 class="section-title mb-0">Contacts</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="contact-tabel" class="display table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Id</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>000</td>
                                            <td>First Name</td>
                                            <td>Last Name</td>
                                            <td>test@gmail.com</td>
                                            <td>123456789</td>
                                            <td>
                                                <div
                                                    class="action-btns d-flex justify-content-start align-items-center gap-4">
                                                    <div class="">
                                                        <button type="button" onclick="contOpenBtn()"
                                                            class="view-edit-btn">
                                                            <i class="fa-solid fa-eye"></i>
                                                        </button>
                                                    </div>
                                                    <div class="">
                                                        <button type="button" class="view-edit-btn">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </button>
                                                    </div>
                                                    <div class="">
                                                        <button type="button" class="view-edit-btn">
                                                            <i class="fa-solid fa-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="contact-popup-wrap ">
        <div class="contact-popup position-relative ">
            <button class="cont-popup-cls-btn">
                <i class="fa-solid fa-xmark"></i>
            </button>
            <h4 class="section-title mb-3 text-center ">Contact Detail</h4>
            <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
                <label class="form-label m-0">Id:</label>
                <span class="cont-pop-span">000</span>
            </div>
            <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
                <label class="form-label m-0">First Name:</label>
                <span class="cont-pop-span">Name</span>
            </div>
            <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
                <label class="form-label m-0">Last Name:</label>
                <span class="cont-pop-span">Last Name</span>
            </div>
            <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
                <label class="form-label m-0">Email:</label>
                <span class="cont-pop-span">test@gmail.com</span>
            </div>
            <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
                <label class="form-label m-0">Phone:</label>
                <span class="cont-pop-span">123456789</span>
            </div>
            <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
                <label class="form-label m-0">Event Type:</label>
                <span class="cont-pop-span">Event Type</span>
            </div>
            <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
                <label class="form-label m-0">Event Date:</label>
                <span class="cont-pop-span">12-02-2024</span>
            </div>
            <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
                <label class="form-label m-0">Guest Count:</label>
                <span class="cont-pop-span">10</span>
            </div>
            <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
                <label class="form-label m-0">Menu Style:</label>
                <span class="cont-pop-span">Menu Style</span>
            </div>
            <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
                <label class="form-label m-0">Diet Restrictions Allergies:</label>
                <span class="cont-pop-span">Diet Restrictions</span>
            </div>
            <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
                <label class="form-label m-0">Vanue Place:</label>
                <span class="cont-pop-span">Vanue Place</span>
            </div>
            <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
                <label class="form-label m-0">Hear About Us:</label>
                <span class="cont-pop-span">Hear About</span>
            </div>
            <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
                <label class="form-label m-0">Comments:</label>
                <span class="cont-pop-span">Comment</span>
            </div>
            <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
                <label class="form-label m-0">Agreement:</label>
                <span class="cont-pop-span">Agreement</span>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(function() {
            $("#contact-tabel").DataTable({
                processing: true,
                language: {
                    paginate: {
                        previous: '<i class="fa-solid fa-angle-left"></i>',
                        next: '<i class="fa-solid fa-angle-right"></i>',
                    },
                },
                columns: [{
                        data: "S.No",
                    },
                    {
                        data: "Id",
                    },
                    {
                        data: "First Name",
                    },
                    {
                        data: "Last Name",
                    },
                    {
                        data: "Email",
                    },
                    {
                        data: "Phone",
                    },
                    {
                        data: "Action",
                    },
                ],
            });
        });


        function contOpenBtn() {
            $('.contact-popup-wrap').addClass('active');
        }

        $('.cont-popup-cls-btn').click(function() {
            $('.contact-popup-wrap').removeClass('active');
        })
    </script>
@endpush
