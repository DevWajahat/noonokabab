@extends('layout.admin.app')

@section('content')
    <div class="content-body ">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="section-title mb-0">Orders List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">


                                <table id="example" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>User</th>
                                            <th>Phone</th>
                                            <th>type</th>
                                            <th>Delivery Address</th>
                                            <th>Floor</th>
                                            <th>Order Time</th>
                                            <th>Schedule</th>
                                            <th>Date</th>
                                            <th>Sub total</th>
                                            <th>total</th>
                                            <th>gratuity</th>
                                            <th>Discount Code</th>
                                            <th>Discount Price</th>
                                            <th>Pickup Point</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($orders as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->user->name }}</td>
                                            <td>{{ $order->phone }}</td>
                                            <td>{{ $order->type }}</td>
                                            <td>{{ $order->delivery_address }}</td>
                                            <td>{{ $order->floor }}</td>
                                            <td>{{ $order->time }}</td>
                                            <td>{{ $order->schedule }}</td>
                                            <td>{{ $order->created_at }}</td>
                                            <td>${{ $order->sub_total }}</td>
                                            <td>${{ $order->total }}</td>
                                            <td>${{ $order->gratuity }}</td>
                                            <td>{{ $order->discount_code }}</td>
                                            <td>{{ $order->discount_price }}</td>
                                            <td>{{ $order->pickup_point }}</td>
                                            <td>{{ $order->created_at }}</td>
                                            <td>{{ $order->updated_at }}</td>
                                            <td><a href="{{ route('admin.orders.details',$order->id) }}"><i class="ri-eye-fill"></i></a></td>
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

@push('scripts')
    <script>
        new DataTable('#example');
        $(function() {
            $("#order-tabel").DataTable({
                processing: true,
                language: {
                    paginate: {
                        previous: '<i class="fa-solid fa-angle-left"></i>',
                        next: '<i class="fa-solid fa-angle-right"></i>',
                    },
                },
                columns: [{
                        data: "S.No",
                    },
                    {
                        data: "Order Id",
                    },
                    {
                        data: "Amount",
                    },
                    {
                        data: "Order Type",
                    },
                    {
                        data: "Payment Mode",
                    },
                    {
                        data: "Date Time",
                    },
                    {
                        data: "Invoice",
                    },
                ],
            });
        });
    </script>
@endpush
