@extends('layout.admin.app')
@section('content')
    <div class="content-body ">
        <div class="container-fluid">
            <div class="row mb-4">
                <div class="col-12">
                    <div class="bg-white">
                        <div class="card-body">
                            <h4 class="section-title">Edit Lunchtime</h4>
                            <form action="." class="mb-0">
                                <div class="row">
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">From</label>
                                        <input type="time" placeholder="" name="" id=""
                                            class="form-control">
                                    </div>
                                    <div class="mb-3 col-12 col-lg-6">
                                        <label class="form-label">To</label>
                                        <input type="time" placeholder="Address" name="" id=""
                                            class="form-control">
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
