<?php
    include "headerr.php";
?>

<div class="content-body ">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="">
                            <h4 class="section-title mb-0">Reviews</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="apply-career-tabel" class="display table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Id</th>
                                        <th>Logo</th>
                                        <th>Review Title</th>
                                        <th>Review Heading</th>
                                        <th>Review Type</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>2323</td>
                                        <td>
                                            <img class="img-fluid review-logo" src="./public/images/no-image.png" alt="">
                                        </td>
                                        <td>Review Title</td>
                                        <td>Review Heading</td>
                                        <td>Guest</td>
                                        <td>Address</td>
                                        <td>
                                            <div class="action-btns d-flex justify-content-start align-items-center gap-4">
                                                <div class="">
                                                    <button type="button" onclick="reviewOpenBtn()" class="view-edit-btn">
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


<div class="review-popup-wrap ">
    <div class="reivew-popup position-relative ">
        <button class="cont-popup-cls-btn">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <h4 class="section-title mb-3 text-center ">Review Detail</h4>
        <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
            <label class="form-label m-0">Id:</label>
            <span class="cont-pop-span">000</span>
        </div>
        <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
            <label class="form-label m-0">Review Title:</label>
            <span class="cont-pop-span">Review Title</span>
        </div>
        <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
            <label class="form-label m-0">Review Type:</label>
            <span class="cont-pop-span">Media</span>
        </div>
        <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
            <label class="form-label m-0">Review Heading:</label>
            <span class="cont-pop-span">Review Heading</span>
        </div>
        <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
            <label class="form-label m-0">Source:</label>
            <span class="cont-pop-span">Source</span>
        </div>
        <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
            <label class="form-label m-0">Name:</label>
            <span class="cont-pop-span">Name</span>
        </div>
        <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
            <label class="form-label m-0">City:</label>
            <span class="cont-pop-span">City</span>
        </div>
        <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
            <label class="form-label m-0">State:</label>
            <span class="cont-pop-span">State</span>
        </div>
        <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
            <label class="form-label m-0">Address:</label>
            <span class="cont-pop-span">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </span>
        </div>
        <div class="d-flex justify-content-start align-items-start gap-2 mb-3">
            <label class="form-label m-0">Discription:</label>
            <span class="cont-pop-span">Lorem ipsum dolor sit amet consectetur adipisicing elit. </span>
        </div>
    </div>
</div>

<?php
    include "footerr.php";
?>



<script>
    $(function() {
        $("#apply-career-tabel").DataTable({
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
                    data: "Logo",
                },
                {
                    data: "Review Title",
                },
                {
                    data: "Review Heading",
                },
                {
                    data: "Review Type",
                },
                {
                    data: "Address",
                },
                {
                    data: "Action",
                },
            ],
        });
    });

    function reviewOpenBtn() {
        $('.review-popup-wrap').addClass('active');
    }

    $('.cont-popup-cls-btn').click(function() {
        $('.review-popup-wrap').removeClass('active');
    })
</script>



