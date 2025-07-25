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
                                <h4 class="section-title mb-0">Orders List</h4>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">

                                <table id="example" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Time</th>
                                            <th>Schedule</th>
                                            <th>Type</th>
                                            <th>Delivery Address</th>
                                            <th>Floor</th>
                                            <th>Sub Total</th>
                                            <th>Total</th>
                                            <th>Gratuity</th>
                                            <th>Pickup Point</th>
                                            <th>Placed At</th>
                                            <th>Details</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse (auth()->user()->orders as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->name }}</td>
                                                <td>{{ $order->phone }}</td>
                                                <td>{{ $order->time }}</td>
                                                <td>{{ $order->schedule }}</td>
                                                <td>{{ $order->type }}</td>
                                                <td>{{ $order->delivery_address }}</td>
                                                <td>{{ $order->floor }}</td>
                                                <td>{{ $order->sub_total }}</td>
                                                <td>{{ $order->total }}</td>
                                                <td>{{ $order->gratuity }}</td>
                                                <td>{{ $order->pickup_point }}</td>
                                                <td>{{ $order->created_at }}</td>
                                                <td> <a href="{{ route('user.orders.details',$order->id) }}"><i class="ri-eye-line"></i></a> </td>


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
