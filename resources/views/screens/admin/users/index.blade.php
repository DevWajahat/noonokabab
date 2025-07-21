@extends('layout.admin.app')
@section('content')
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


                                <table id="example" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Country</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Zip</th>
                                            <th>Address</th>
                                            <th>Contact</th>
                                            <th>Open_Time</th>
                                            <th>Close_Time</th>
                                            <th>Code</th>
                                            <th>LunchTime From</th>
                                            <th>LunchTime To</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($branches as $branch)
                                        <tr>
                                            <td>{{ $branch->id }}</td>
                                            <td>{{ $branch->name }}</td>
                                            <td>{{ $branch->country }}</td>
                                            <td>{{ $branch->state }}</td>
                                            <td>{{ $branch->city }}</td>
                                            <td>{{ $branch->zip }}</td>
                                            <td>{{ $branch->address }}</td>
                                            <td>{{ $branch->contact }}</td>
                                            <td>{{ $branch->open_time }}</td>
                                            <td>{{ $branch->close_time }}</td>
                                            <td>{{ $branch->code }}</td>
                                            <td>{{ $branch->lunch_time->from }}</td>
                                            <td>{{ $branch->lunch_time->to }}</td>
                                            <td>{{ $branch->created_at }}</td>
                                            <td>{{ $branch->updated_at }}</td>

                                        </tr>
                                        @empty
                                        @endforelse

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
@endpush
