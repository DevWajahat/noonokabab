@extends('layout.profile.app')

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
                                <h4 class="section-title mb-0">Profile Details</h4>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <h3>Full Name: <span>{{ auth()->user()->name }}</span></h3>
                                <h3>Email: <span>{{ auth()->user()->email }}</span></h3>
                                <h3>Phone No: <span>{{ auth()->user()->phone }}</span></h3>
                                <h3>Role: <span>{{ auth()->user()->role }}</span></h3>
                                <h3>Password: <span>********</span></h3>
                                <a href="{{ route('forgot_password_view') }}" class="btn btn-primary">Change Password</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
