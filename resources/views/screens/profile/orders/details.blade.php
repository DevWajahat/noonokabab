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
                                <h4 class="section-title mb-0">Order Details List</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table id="example" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Order Id</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Total Price</th>
                                            <th>Quantity</th>
                                            <th>Category</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($order->menus as $orderMenu)
                                            <tr>
                                                <td>{{ $orderMenu->pivot->id }}</td>
                                                <td>{{ $orderMenu->id }}</td>
                                                <td>{{ $orderMenu->pivot->name }}</td>
                                                <td>{{ $orderMenu->pivot->price }}</td>
                                                <td>{{ $orderMenu->pivot->total_price }}</td>
                                                <td>{{ $orderMenu->pivot->quantity }}</td>
                                                <td>{{ $orderMenu->pivot->category }}</td>
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
