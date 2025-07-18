<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index()
    {
        return view('screens.admin.branch.index');
    }
    public function create()
    {
        return view('screens.admin.branch.create');
    }
    public function store(Request $request)
    {
        return back()->with('message', 'Branch Added Successfully.');
    }
    public function edit($id)
    {
        return view('');
    }
    public function update(Request $request, $id)
    {
        return back()->with('message','updated Branch Successfully');
    }
    public function destroy($id)
    {
        return back()->with('message','deleted Branch Successfully');
    }
}
