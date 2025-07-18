<?php
    include "headerr.php";
?>
<div class="content-body ">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="section-title mb-0">User Lists</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="order-tabel" class="display table-responsive-md">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <!--<th>Details</th>-->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01</td>
                                        <td>Jhon Wick</td>
                                        <td>Jhon@gmail.com</td>
                                        <td>
                                            12564567890
                                        </td>
                                        <!--<td class="">-->
                                        <!--    <button class="invoice-btn">-->
                                        <!--        <i class="fa-solid fa-eye"></i>-->
                                        <!--    </button>-->
                                        <!--</td>-->
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>Anonymous</td>
                                        <td>Anonymous@gmail.com</td>
                                        <td>
                                            12564567890
                                        </td>
                                        <!--<td class="">-->
                                        <!--    <button class="invoice-btn">-->
                                        <!--        <i class="fa-solid fa-eye"></i>-->
                                        <!--    </button>-->
                                        <!--</td>-->
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>Anonymous</td>
                                        <td>Anonymous@gmail.com</td>
                                        <td>
                                            12564567890
                                        </td>
                                        <!--<td class="">-->
                                        <!--    <button class="invoice-btn">-->
                                        <!--        <i class="fa-solid fa-eye"></i>-->
                                        <!--    </button>-->
                                        <!--</td>-->
                                    </tr>
                                    <tr>
                                        <td>04</td>
                                        <td>Oliver</td>
                                        <td>Oliver@gmail.com</td>
                                        <td>
                                            12564567890
                                        </td>
                                        <!--<td class="">-->
                                        <!--    <button class="invoice-btn">-->
                                        <!--        <i class="fa-solid fa-eye"></i>-->
                                        <!--    </button>-->
                                        <!--</td>-->
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>Anonymous</td>
                                        <td>Anonymous@gmail.com</td>
                                        <td>
                                            12564567890
                                        </td>
                                        <!--<td class="">-->
                                        <!--    <button class="invoice-btn">-->
                                        <!--        <i class="fa-solid fa-eye"></i>-->
                                        <!--    </button>-->
                                        <!--</td>-->
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>Elijah</td>
                                        <td>Elijah@gmail.com</td>
                                        <td>
                                            12564567890
                                        </td>
                                        <!--<td class="">-->
                                        <!--    <button class="invoice-btn">-->
                                        <!--        <i class="fa-solid fa-eye"></i>-->
                                        <!--    </button>-->
                                        <!--</td>-->
                                    </tr>
                                    <tr>
                                        <td>05</td>
                                        <td>William</td>
                                        <td>William@gmail.com</td>
                                        <td>
                                            12564567890
                                        </td>
                                        <!--<td class="">-->
                                        <!--    <button class="invoice-btn">-->
                                        <!--        <i class="fa-solid fa-eye"></i>-->
                                        <!--    </button>-->
                                        <!--</td>-->
                                    </tr>
                                    <tr>
                                        <td>06</td>
                                        <td>Anonymous</td>
                                        <td>Anonymous@gmail.com</td>
                                        <td>
                                            12564567890
                                        </td>
                                        <!--<td class="">-->
                                        <!--    <button class="invoice-btn">-->
                                        <!--        <i class="fa-solid fa-eye"></i>-->
                                        <!--    </button>-->
                                        <!--</td>-->
                                    </tr>
                                    <tr>
                                        <td>07</td>
                                        <td>Lucas</td>
                                        <td>Lucas@gmail.com</td>
                                        <td>
                                            12564567890
                                        </td>
                                        <!--<td class="">-->
                                        <!--    <button class="invoice-btn">-->
                                        <!--        <i class="fa-solid fa-eye"></i>-->
                                        <!--    </button>-->
                                        <!--</td>-->
                                    </tr>
                                    <tr>
                                        <td>08</td>
                                        <td>Daniel</td>
                                        <td>Daniel@gmail.com</td>
                                        <td>
                                           12564567890
                                        </td>
                                        <!--<td class="">-->
                                        <!--    <button class="invoice-btn">-->
                                        <!--        <i class="fa-solid fa-eye"></i>-->
                                        <!--    </button>-->
                                        <!--</td>-->
                                    </tr>
                                    <tr>
                                        <td>09</td>
                                        <td>Jack</td>
                                        <td>Jack@gmail.com</td>
                                        <td>
                                            12564567890
                                        </td>
                                        <!--<td class="">-->
                                        <!--    <button class="invoice-btn">-->
                                        <!--        <i class="fa-solid fa-eye"></i>-->
                                        <!--    </button>-->
                                        <!--</td>-->
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>Michael</td>
                                        <td>Michael@gmail.com</td>
                                        <td>
                                            12564567890
                                        </td>
                                        <!--<td class="">-->
                                        <!--    <button class="invoice-btn">-->
                                        <!--        <i class="fa-solid fa-eye"></i>-->
                                        <!--    </button>-->
                                        <!--</td>-->
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
        $("#order-tabel").DataTable({
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
                    data: "User Name",
                },
                {
                    data: "Impressions",
                },
                {
                    data: "Date Time",
                },
                
            ],
        });
    });
</script>