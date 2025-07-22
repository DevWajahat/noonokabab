<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreIngredientRequest;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    public function index()
    {

        $ingredients = Ingredient::all();

        return view('screens.admin.ingredients.index',get_defined_vars());
    }

    public function create()
    {
        return view('screens.admin.ingredients.create');
    }
    public function store(StoreIngredientRequest $request)
    {

        Ingredient::create([
            'name' => $request->ingredient,
            'price' => $request->price
        ]);

        return redirect()->route('admin.ingredients.index')->with('message','Ingredient Added Successfully.');return back();
    }
    public function edit($id)
    {

        $ingredient = Ingredient::find($id);



        return view('screens.admin.ingredients.edit',get_defined_vars());
    }
    public function update(Request $request, $id) {

        $ingredient = Ingredient::find($id);

        $ingredient->update([
            'name' => $request->ingredient,
            'price' => $request->price
        ]);

        return redirect()->route('admin.ingredients.index')->with('message','Ingredient Updated Successfully.');
    }
}
