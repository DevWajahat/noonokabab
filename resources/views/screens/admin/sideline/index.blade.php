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
                                <h4 class="section-title mb-0">Sideline Options List</h4>
                            </div>
                            <div class="">
                                <a class="add-branch-link" href="{{ route('admin.sideline.create') }}">
                                    Add Sidelines Options
                                </a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table id="example" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Options</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($sidelines as $sideline)
                                            <tr>
                                                <td>{{ $sideline->id }}</td>
                                                <td>{{ $sideline->name }}</td>
                                                <td>
                                                    @forelse ($sideline->options as $option)
                                                        {{ $option->name }},
                                                    @empty
                                                    @endforelse
                                                </td>
                                                <td>{{ $sideline->created_at }}</td>
                                                <td>{{ $sideline->updated_at }}</td>
                                                <td><a href="{{ route('admin.sideline.edit', $sideline->id) }}"> <i
                                                            class="ri-edit-2-fill"></i></a> {{-- <a href="{{ route('admin.category.destroy',$category->id) }}"><i class="ri-delete-bin-6-fill"></i></a> --}} </td>
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
