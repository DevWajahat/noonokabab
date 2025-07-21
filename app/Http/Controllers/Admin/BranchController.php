<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBranchRequest;
use App\Models\Branch;
use App\Models\Category;
use App\Models\LunchTime;

class BranchController extends Controller
{
    public function index()
    {

        $branches = Branch::all();

        return view('screens.admin.branch.index', get_defined_vars());
    }
    public function create()
    {

        $lunchTimes = LunchTime::all();

        $categories = Category::all();

        return view('screens.admin.branch.create', get_defined_vars());
    }
    public function store(StoreBranchRequest $request)
    {

        // dd($request->categories);

        $lunchTime = LunchTime::find($request->lunch_time);

        $branch =  $lunchTime->branches()->create([
            'name' => $request->name,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'zip' => $request->zip,
            'address' => $request->address,
            'contact' => $request->contact,
            'open_time' => $request->open_time,
            'close_time' => $request->close_time,
            'code' => $request->code,

        ]);

        $branch->categories()->attach($request->categories);

        return redirect()->route('admin.branch.index')->with('message', 'Branch Added Successfully.');
    }
    public function edit($id)
    {

        $branch = Branch::find($id);

          $categories = Category::all();

        $lunchTimes = LunchTime::all();

        $branchCategories = [];

        foreach($branch->categories as $category){
            $branchCategories[] += $category->id;
        }

        // dd($branchCategory);


        return view('screens.admin.branch.edit', get_defined_vars());
    }
    public function update(StoreBranchRequest $request, $id)
    {


        $branch = Branch::find($id);

        $branch->update([
            'name' => $request->name,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'zip' => $request->zip,
            'address' => $request->address,
            'contact' => $request->contact,
            'open_time' => $request->open_time,
            'close_time' => $request->close_time,
            'code' => $request->code,
            'lunch_time_id' => $request->lunch_time
        ]);

         $branch->categories()->sync($request->categories);


        return redirect()->route('admin.branch.index')->with('message', 'updated Branch Successfully');
    }
    public function destroy($id)
    {
        return back()->with('message', 'deleted Branch Successfully');
    }
}
