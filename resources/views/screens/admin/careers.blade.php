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
                            <h4 class="section-title mb-0">Career List</h4>
                        </div>
                        <div class="">
                            <a class="add-branch-link" href="add-career.php">
                                Add Career
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="career-tabel" class="display table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Id</th>
                                        <th>Badge</th>
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>000</td>
                                        <td>Badge</td>
                                        <td>Title</td>
                                        <td>Full time</td>
                                        <td>
                                            <div class="action-btns d-flex justify-content-start align-items-center gap-4">
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

<?php
    include "footerr.php";
?>



<script>
    $(function() {
        $("#career-tabel").DataTable({
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
                    data: "Badge",
                },
                {
                    data: "Title",
                },
                {
                    data: "Type",
                },
                {
                    data: "Action",
                },
            ],
        });
    });
</script>
