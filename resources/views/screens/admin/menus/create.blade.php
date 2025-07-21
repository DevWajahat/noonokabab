@extends('layout.admin.app')

@section('content')
    <div class="content-body ">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="bg-white">
                        <div class="card-body">
                            <h4 class="section-title">Add Menu</h4>
                            <form action="{{ route('admin.menu.store') }}" method="post" class="mb-0" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Select Branch</label>
                                        <select class="form-select form-control @error('branch') is-invalid @enderror"
                                            name="branch" aria-label="Default select example">
                                            @forelse ($branches as $branch)
                                                <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>

                                        @error('branch')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Select Category</label>
                                        <select class="form-select form-control @error('category') is-invalid @enderror"
                                            name="category" aria-label="Default select example">
                                            @forelse ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>

                                        @error('branch')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label @error('menu') is-invalid @enderror">Menu Name</label>
                                        <input type="text" name="menu" id="" value="{{ old('menu') }}"
                                            class="form-control @error('menu') is-invalid @enderror ">
                                        @error('menu')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Price</label>
                                        <input type="number" name="price" id="" value="{{ old('price') }}"
                                            class="form-control @error('price') is-invalid @enderror">
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Upload Image</label>
                                        <input type="file" name="image" id=""
                                        
                                            class="form-control @error('image') is-invalid @enderror">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <div class="d-flex justify-content-start align-items-center gap-3">
                                            <input id="regular" value="1" class="input-checkbox" type="checkbox" name="regular"
                                                id="">
                                            <label for="regular" class="form-label m-0 cursor-pointer">Regular</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <div class="d-flex justify-content-start align-items-center gap-3">
                                            <input id="lunch-special" class="input-checkbox"
                                                value="1" type="checkbox" name="lunch_special"
                                                id="">
                                            <label for="lunch-special" class="form-label m-0 cursor-pointer">Lunch
                                                Special</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label class="form-label">description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="">{{ old('description') }}</textarea>

                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary bg-deepblue" type="submit">Add Menu</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
