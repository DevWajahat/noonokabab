<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('screens.admin.category.index');
    }
    public function create()
    {
        return view('screens.admin.category.create');
    }
    public function store(Request $request)
    {
        return back()->with('message','Category Added Successfully.');
    }
    public function edit()
    {
        return view('screens.admin.category.edit');
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
