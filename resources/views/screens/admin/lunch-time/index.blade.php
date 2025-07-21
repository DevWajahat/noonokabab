@extends('layout.admin.app')
@section('content')
    <div class="content-body ">

        @if (session()->has('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('message') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="">
                                <h4 class="section-title mb-0">Lunchtime</h4>
                            </div>
                            <div class="">
                                <a class="add-branch-link" href="{{ route('admin.lunchtime.create') }}">
                                    Add Lunchtime
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>From</th>
                                            <th>To</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($lunchTimes as $lunchTime)
                                            <tr>
                                                <td>{{ $lunchTime->id }}</td>
                                                <td>{{ $lunchTime->from }}</td>
                                                <td>{{ $lunchTime->to }}</td>
                                                <td>{{ $lunchTime->created_at }}</td>
                                                <td>{{ $lunchTime->updated_at }}</td>
                                                <td><a href="{{ route('admin.lunchtime.edit',$lunchTime->id) }}"><i class="ri-edit-2-fill"></i></a> </td>

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
