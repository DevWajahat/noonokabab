<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DineController extends Controller
{
    public function index()
    {
        return view('screens.web.dine-in.index');
    }
}
