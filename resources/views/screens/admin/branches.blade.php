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
                            <h4 class="section-title mb-0">Branches</h4>
                        </div>
                        <div class="">
                            <a class="add-branch-link" href="add-branch.php">
                                Add Branch
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="branch-tabel" class="display table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Location</th>
                                        <th>Branch Name</th>
                                        <th>Contact Number</th>
                                        <th>Open</th>
                                        <th>Close</th>
                                        <th>Code</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Location One</td>
                                        <td>Branch One</td>
                                        <td>1234567890</td>
                                        <td>12:30pm</td>
                                        <td>09:00pm</td>
                                        <td>1234</td>
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
        $("#branch-tabel").DataTable({
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
                    data: "Location",
                },
                {
                    data: "Branch Name",
                },
                {
                    data: "Contact Number",
                },
                {
                    data: "Open",
                },
                {
                    data: "Close",
                },
                {
                    data: "Code",
                },
                
                {
                    data: "Action",
                },
            ],
        });
    });
</script>
