<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Menu;


class MenuController extends Controller
{
    public function type($type,$branchId)
    {

        $branch = Branch::find($branchId);


        if (request()->ajax()) {

            $menus = $branch->menus->where(request('type'), 1);


            return response()->json([
                'message' => 'get successfully',
                'menus' => $menus,
            ]);
        }

        return view('screens.web.menu.type', get_defined_vars());
    }
    public function ingredients($menuId){

        $menu = Menu::find($menuId);
        $ingredients = $menu->ingredients;
        return response()->json([
            'status' => true,
            'message' => 'product fetched successfully.',
            'menu' => $menu,
            'ingredients' => $ingredients
        ],200);
    }



}
