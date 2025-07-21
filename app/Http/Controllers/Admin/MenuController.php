<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMenuRequest;
use App\Models\Branch;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();

        return view('screens.admin.menus.index', get_defined_vars());
    }
    public function create()
    {

        $branches = Branch::all();

        $categories = Category::all();

        return view('screens.admin.menus.create', get_defined_vars());
    }
    public function store(StoreMenuRequest $request)
    {


        $branch = Branch::find($request->branch);



        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/menus'), $imageName);
        }

        $lunchtime = isset($request->lunch_special) ? 1 : 0;
        $regular = isset($request->regular) ? 1 : 0;


        $branch->menus()->create([
            'name' => $request->menu,
            'description' => $request->description,
            'price' => $request->price,
            'regular' => $regular,
            'lunch_time' => $lunchtime,
            'category_id' => $request->category,
            'image' => $imageName
        ]);

        return redirect()->route('admin.menu.index')->with('message', 'Menu Added Successfully.');
    }
    public function edit($id)
    {

        $branches = Branch::all();

        $categories = Category::all();

        $menu = Menu::find($id);


        return view('screens.admin.menus.edit', get_defined_vars());
    }
    public function update(Request $request, $id)
    {


        $menu = Menu::find($id);

        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/menus'), $imageName);
        } else {
            $imageName = $menu->image;
        }

        $lunchtime = isset($request->lunch_special) ? 1 : 0;
        $regular = isset($request->regular) ? 1 : 0;

        $menu->update([
            'name' => $request->menu,
            'description' => $request->description,
            'price' => $request->price,
            'regular' => $regular,
            'lunch_time' => $lunchtime,
            'branch_id' => $request->branch,
            'category_id' => $request->category,
            'image' => $imageName
        ]);





        return redirect()->route('admin.menu.index')->with('message', 'Menu Updated Successfully.');
    }
    public function destroy()
    {
        return view('');
    }
}
