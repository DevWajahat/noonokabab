<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $orders = Order::all();

        return view('screens.admin.index',get_defined_vars());
    }
}
