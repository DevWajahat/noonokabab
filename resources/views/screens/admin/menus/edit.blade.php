@extends('layout.admin.app')

@section('content')
    <div class="content-body ">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="bg-white">
                        <div class="card-body">
                            <h4 class="section-title">Edit Menu</h4>
                            <form action="{{ route('admin.menu.update', $id) }}" method="post" class="mb-0"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Select Branch</label>
                                        <select class="form-select form-control @error('branch') is-invalid @enderror"
                                            name="branch" aria-label="Default select example">
                                            @forelse ($branches as $branch)
                                                <option value="{{ $branch->id }}"
                                                    {{ $branch->id == $menu->branch_id ? 'selected' : '' }}>
                                                    {{ $branch->name }}</option>
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
                                                <option value="{{ $category->id }}"
                                                    {{ $category->id == $menu->category_id ? 'selected' : '' }}>
                                                    {{ $category->name }}</option>
                                            @empty
                                            @endforelse
                                        </select>

                                        @error('branch')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label @error('menu') is-invalid @enderror">Menu Name</label>
                                        <input type="text" name="menu" id="" value="{{ $menu->name }}"
                                            class="form-control @error('menu') is-invalid @enderror ">
                                        @error('menu')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">Price</label>
                                        <input type="number" name="price" id="" value="{{ $menu->price }}"
                                            class="form-control @error('price') is-invalid @enderror">
                                        @error('price')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <div class="mb-3 col-12 col-lg-6">
                                            <img src="{{ asset('images/menus/' . $menu->image) }}"
                                                style="width: 100px; height:100px" alt="">

                                        </div>

                                        <label class="form-label">Upload Image</label>
                                        <input type="file" name="image" id=""
                                            class="form-control @error('image') is-invalid @enderror">
                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <div class="d-flex justify-content-start align-items-center gap-3">
                                            <input id="regular" value="1" class="input-checkbox" type="checkbox"
                                                {{ $menu->regular == '1' ? 'checked' : '' }} name="regular" id="">
                                            <label for="regular" class="form-label m-0 cursor-pointer">Regular</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <div class="d-flex justify-content-start align-items-center gap-3">
                                            <input id="lunch-special" class="input-checkbox" value="1" type="checkbox"
                                                name="lunch_special" {{ $menu->lunch_time == '1' ? 'checked' : '' }}
                                                id="">
                                            <label for="lunch-special" class="form-label m-0 cursor-pointer">Lunch
                                                Special</label>
                                        </div>
                                    </div>
                                    <div class="mb-3 col-12">
                                        <label class="form-label">description</label>
                                        <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="">{{ $menu->description }}</textarea>

                                        @error('description')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary bg-deepblue" type="submit">Update Menu</button>
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
