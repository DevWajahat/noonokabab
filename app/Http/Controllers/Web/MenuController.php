<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function delivery($branchId)
    {



        $branch = Branch::find($branchId);

        if (request()->ajax()) {

            $categories = $branch->categories;

            $menus = $branch->menus->where(request('type'), 1);





            return response()->json([
                'message' => 'get successfully',
                'menus' => $menus

            ]);
        }

        return view('screens.web.menu.delivery', get_defined_vars());
    }
    public function takeout($branchId)
    {

        $branch = Branch::find($branchId);

        if (request()->ajax()) {

            $categories = $branch->categories;



            $menus = $branch->menus->where(request('type'), 1);


            return response()->json([
                'message' => 'get successfully',
                'menus' => $menus

            ]);
        }

        return view('screens.web.menu.takeout', get_defined_vars());
    }
}
