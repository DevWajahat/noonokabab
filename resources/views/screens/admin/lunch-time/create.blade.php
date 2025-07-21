@extends('layout.admin.app')
@section('content')
    <div class="content-body ">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="bg-white">
                        <div class="card-body">
                            <h4 class="section-title">Add Lunchtime</h4>
                            <form action="{{ route('admin.lunchtime.store') }}" method="post" class="mb-0">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">From</label>
                                        <input type="time" placeholder="" name="from" id=""
                                            value="{{ old('from') }}"
                                            class="form-control @error('from') is-invalid @enderror">
                                        @error('from')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">To</label>
                                        <input type="time" placeholder="" name="to" id=""
                                            value="{{ old('to') }}"
                                            class="form-control @error('to') is-invalid @enderror ">
                                        @error('to')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-12 text-end">
                                        <button class="btn btn-primary bg-deepblue" type="submit">Add Lunchtime</button>
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
