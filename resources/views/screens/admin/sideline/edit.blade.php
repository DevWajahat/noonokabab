@extends('layout.admin.app')

@section('content')
    <div class="content-body ">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="bg-white">
                        <div class="card-body">
                            <h4 class="section-title">Edit Sidelines</h4>
                            <form action="{{ route('admin.sideline.update',$sideline->id) }}" method="post" class="mb-0">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-12 ">
                                        <label class="form-label">Sidelines Name</label>
                                        <input type="text" placeholder="Sideline Name" name="sideline"
                                            value="{{ $sideline->name }}" id=""
                                            class="form-control @error('sideline') is-invalid @enderror">
                                        @error('sideline')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-12">
                                        <div class="d-flex justify-content-start align-items-center gap-3">
                                            <input id="options" value="Optional" class="input-checkbox" type="checkbox"
                                                name="check" {{ $sideline->option == 'Optional' ? 'checked' : '' }}
                                                id="">
                                            <label for="options" class="form-label m-0 cursor-pointer">Optional</label>
                                        </div>
                                    </div>
                                    <div class="option-div">
                                        <label class="form-label">Option</label>
                                        @forelse ($sideline->options as $option)
                                            <div class="mb-3 col-12 option">
                                                <input type="text" placeholder="Options" name="options[]" value="{{ $option->name }}"
                                                    id="" class="form-control sideline-option "><i
                                                    class="ri-close-circle-line" style="font-size:32px"></i>

                                            </div>

                                        @empty
                                        @endforelse

                                    </div>
                                    <div class="mb-3 col-12">
                                        <button type="button" id="addBtn" class="mt-3"
                                            style="border:none; outline:none; background:transparent"><i
                                                class="ri-add-box-line" style="font-size: 34px"></i></button>
                                    </div>

                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary bg-deepblue" type="submit">Update Sidelines</button>
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

            // $('.option:first-child').remove();

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
            $(document).on('click', '.ri-close-circle-line', function() {
                console.log($(this).parents(".option"))

                if($('.option').length == 1){
                    alert("At least One Option Should Be Available")
                }
                else{

                    $(this).parent(".option").remove();
                }
            })


        })
    </script>
@endpush
