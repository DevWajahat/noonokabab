<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function delivery()
    {
        return view('screens.web.menu.delivery');
    }
    public function takeout()
    {
        $categories = Category::all();

        return view('screens.web.menu.takeout',get_defined_vars());
    }
}
