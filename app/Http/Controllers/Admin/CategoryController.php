<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $categories = Category::all();

        return view('screens.admin.category.index', get_defined_vars());
    }
    public function create()
    {
        return view('screens.admin.category.create');
    }
    public function store(StoreCategoryRequest $request)
    {

        Category::create([
            'name' => $request->category
        ]);

        return redirect()->route('admin.category.index')->with('message', 'Category Added Successfully.');
    }
    public function edit($id)
    {
         $category = Category::find($id);

        return view('screens.admin.category.edit',get_defined_vars());
    }
    public function update(StoreCategoryRequest $request, $id)
    {

        $category = Category::find($id);

        $category->update([
            'name' => $request->category
        ]);

        return redirect()->route('admin.category.index')->with('message', 'Category Updated Successfully.');
    }


    public function destroy($id)
    {
        $category = Category::find($id);

        $category->delete();



        return back()->with('message', 'Category Updated Successfully.');
    }
}
