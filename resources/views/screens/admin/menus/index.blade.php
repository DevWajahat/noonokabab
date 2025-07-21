@extends('layout.admin.app')

@section('content')
    <div class="content-body ">
        <div class="container-fluid">
            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
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

                                <table id="example" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Category</th>
                                            <th>Branch</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Regular</th>
                                            <th>Lunch Time</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($menus as $menu)
                                            <tr>
                                                <td>{{ $menu->id }}</td>
                                                <td>{{ $menu->category->name }}</td>
                                                <td>{{ $menu->branch->name }}</td>
                                                <td>{{ $menu->name }}</td>
                                                <td>{{ $menu->description }}</td>
                                                <td>${{ $menu->price }}</td>
                                                <td>{{ $menu->regular == 1 ? 'Yes' : 'No' }}</td>
                                                <td>{{ $menu->lunch_time == 1 ? 'Yes' : 'No' }}</td>
                                                <td>{{ $menu->created_at }}</td>
                                                <td>{{ $menu->updated_at }}</td>
                                                <td><a href="{{ route('admin.menu.edit',$menu->id) }}"><i class="ri-edit-2-fill"></i></a></td>

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
            $("#menu-tabel").DataTable({
                processing: true,
                language: {
                    paginate: {
                        previous: '<i class="fa-solid fa-angle-left"></i>',
                        next: '<i class="fa-solid fa-angle-right"></i>',
                    },
                },
                columns: [{
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
@endpush
{{-- <th>S.No</th>
<th>Branch</th>
<th>Menu Name</th>
<th>Image</th>
<th>Discription</th>
<th>Price</th>
<th>Regular</th>
<th>Lunch Special</th>
<th>Action</th> --}}
