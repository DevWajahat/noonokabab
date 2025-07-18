@extends('layout.admin.app')
@section('content')
    <div class="content-body ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="">
                                <h4 class="section-title mb-0">Lunchtime</h4>
                            </div>
                            <div class="">
                                <a class="add-branch-link" href="add-lunchtime.php">
                                    Add Lunchtime
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="lunchtime-tabel" class="display table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>12:00pm</td>
                                            <td>03:00pm</td>
                                            <td>
                                                <div
                                                    class="action-btns d-flex justify-content-start align-items-center gap-4">
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
@endsection

@push('scripts')
    <script>
        $(function() {
            $("#lunchtime-tabel").DataTable({
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
                        data: "From",
                    },
                    {
                        data: "To",
                    },
                    {
                        data: "Action",
                    },
                ],
            });
        });
    </script>
@endpush
