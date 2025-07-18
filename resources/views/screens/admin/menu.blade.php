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
                            <h4 class="section-title mb-0">Menu List</h4>
                        </div>
                        <div class="">
                            <a class="add-branch-link" href="add-menu.php">
                                Add Menu
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="menu-tabel" class="display table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Branch</th>
                                        <th>Menu Name</th>
                                        <th>Discription</th>
                                        <th>Price</th>
                                        <th>Regular</th>
                                        <th>Lunch Special</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <img class="img-fluid external-img" src="./public/images/tabel-restaurent-img.jpg" alt="">
                                        </td>
                                        <td>Branch Name</td>
                                        <td>Menu Name</td>
                                        <td style="max-width: 150px;">Lorem ipsum dolor sit amet  </td>
                                        <td>$50</td>
                                        <td>True</td>
                                        <td>False</td>
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
                {
                    data: "Discription",
                },
                {
                    data: "Price",
                },
                {
                    data: "Regular",
                },
                {
                    data: "Lunch Special",
                },
                
                {
                    data: "Action",
                },
            ],
        });
    });
</script>
<th>S.No</th>
<th>Branch</th>
<th>Menu Name</th>
<th>Image</th>
<th>Discription</th>
<th>Price</th>
<th>Regular</th>
<th>Lunch Special</th>
<th>Action</th>