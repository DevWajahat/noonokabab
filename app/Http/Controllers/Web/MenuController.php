<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function delivery()
    {
        return view('screens.web.menu.delivery');
    }
    public function takeout()
    {
        return view('screens.web.menu.takeout');
    }
}
