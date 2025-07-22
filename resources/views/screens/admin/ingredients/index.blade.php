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
                                <h4 class="section-title mb-0">Ingredients </h4>
                            </div>
                            <div class="">
                                <a class="add-branch-link" href="{{ route('admin.ingredients.create') }}">
                                    Add Ingredients
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
                                            <th>Price</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($ingredients as $ingredient)
                                            <tr>
                                                <td>{{ $ingredient->id }}</td>
                                                <td>{{ $ingredient->name }}</td>
                                                <td>${{ $ingredient->price }}</td>
                                                <td>{{ $ingredient->created_at }}</td>
                                                <td>{{ $ingredient->updated_at }}</td>
                                                <td><a href="{{ route('admin.ingredients.edit', $ingredient->id) }}"> <i
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
