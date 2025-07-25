<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('screens.profile.orders.index');
    }
    public function details($id)
    {
        $order = Order::find($id);

        return view('screens.profile.orders.details',get_defined_vars());
    }
}
