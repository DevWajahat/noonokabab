@extends('layout.admin.app')

@section('content')
    <div class="content-body ">
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="section-title mb-0">Orders Details</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">


                                <table id="example" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Total Price</th>
                                            <th>Quantity</th>
                                            <th>Category</th>
                                            <th>Ingredients</th>
                                            @forelse ($order->menus as $orderMenu)
                                                {{-- @dd($orderMenu->pivot->idx) --}}
                                                @forelse (DB::table('menu_order_sideline')->where('menu_order_id', $orderMenu->pivot->id)->get() as $sideline)
                                                    <th>{{ $sideline->name }}</th>
                                                @empty
                                                @endforelse

                                            @empty
                                            @endforelse

                                            {{-- <th>Actions</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($order->menus as $orderMenu)
                                            {{-- @dd($orderMenu,  $orderMenu->pivot->name) --}}
                                            <tr>
                                                <td>{{ $orderMenu->pivot->id }}</td>
                                                <td>{{ $orderMenu->pivot->name }}</td>
                                                <td>{{ $orderMenu->pivot->price }}</td>
                                                <td>{{ $orderMenu->pivot->total_price }}</td>
                                                <td>{{ $orderMenu->pivot->quantity }}</td>
                                                <td>{{ $orderMenu->pivot->category }}</td>
                                                <td>
                                                    @forelse (DB::table('ingredient_menu_order')->where('menu_order_id', $orderMenu->pivot->id)->get() as $ingredient)
                                                    {{-- @dd($ingredient->name) --}}
                                                    {{ $ingredient->name  }}, 
                                                @empty
                                                @endforelse
                                                </td>
                                                @forelse (DB::table('menu_order_sideline')->where('menu_order_id', $orderMenu->pivot->id)->get() as $sideline)
                                                    <td>{{ $sideline->option }}</td>
                                                @empty
                                                    <td></td>
                                                @endforelse


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
