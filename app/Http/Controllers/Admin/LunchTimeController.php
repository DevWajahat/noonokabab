<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LunchTimeController extends Controller
{
     public function index()
    {
        return view('screens.admin.lunch-time.index');
    }
      public function create()
    {
        return view('screens.admin.lunch-time.create');
    }
    public function store(Request $request)
    {
        return back()->with('message','Category Added Successfully.');
    }
    public function edit()
    {
        return view('screens.admin.lunch-time.edit');
    }
    public function update(Request $request)
    {
        return back()->with('message','Category Updated Successfully.');
    }
    public function destroy()
    {
        return view('');
    }
}
