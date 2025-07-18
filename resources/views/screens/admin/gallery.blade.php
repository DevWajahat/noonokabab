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
                            <h4 class="section-title mb-0">Galleries List</h4>
                        </div>
                        <div class="">
                            <a class="add-branch-link" href="add-catigory.php">
                                Add Galleries
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="menu-tabel" class="display table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width: 100px;">Sr #</th>
                                        <th>Gallery Image</th>
                                        <th>Category</th>
                                        <th style="width: 150px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <img class="img-fluid external-img" src="./public/images/tabel-restaurent-img.jpg" alt="">
                                        </td>
                                        <td>Lorem, ipsum.</td>
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
        $("#menu-tabel").DataTable({
            processing: true,
            language: {
                paginate: {
                    previous: '<i class="fa-solid fa-angle-left"></i>',
                    next: '<i class="fa-solid fa-angle-right"></i>',
                },
            },
            columns: [
                {
                    data: "Branch",
                },
                {
                    data: "Menu Name",
                },
                {
                    data: "Image",
                },
            ],
        });
    });
</script>