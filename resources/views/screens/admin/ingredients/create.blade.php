@extends('layout.admin.app')
@section('content')
    <div class="content-body ">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="bg-white">
                        <div class="card-body">
                            <h4 class="section-title">Add Ingredeints </h4>
                            <form action="{{ route('admin.ingredients.store') }}" method="post" class="mb-0">

                                @csrf

                                <div class="row">
                                    <div class="mb-3 col-12 ">
                                        <label class="form-label">Ingredient Name</label>
                                        <input type="text" placeholder="Ingredient Name" name="ingredient"
                                            value="{{ old('ingredient') }}" id=""
                                            class="form-control @error('ingredient') is-invalid @enderror">
                                        @error('ingredient')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>



                                        <div class="mb-3 col-12 option">
                                            <label class="form-label">price</label>
                                            <input type="number" placeholder="Price" name="price" value="{{ old('price') }}"
                                                id="" step=".01"
                                                class="form-control sideline-option @error('price') is-invalid @enderror">
                                            @error('price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>




                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary bg-deepblue" type="submit">Add Ingredients</button>
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
@push('scripts')
    <script>
        $(document).ready(function() {
            var sidelineOption = $('.sideline-option');

            $('#addBtn').on("click", function(e) {
                e.preventDefault();
                $('.option-div').append(`
                <div class="mb-3 col-12 option">

                    <input type="text" placeholder="Options" name="options[]" value=""
                        id=""
                        class="form-control sideline-option "><i class="ri-close-circle-line" style="font-size:32px"></i>
                </div>
                `)
            });

    </script>
@endpush
