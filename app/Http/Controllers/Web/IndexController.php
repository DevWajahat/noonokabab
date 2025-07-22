<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        dd(session('cart'));
        $categories = Category::inRandomOrder()->limit(3)->get();

        return view('screens.web.index',get_defined_vars());
    }
}
