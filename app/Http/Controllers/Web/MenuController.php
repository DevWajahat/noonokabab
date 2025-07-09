<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Category;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function type($type,$branchId)
    {

        $branch = Branch::find($branchId);


        if (request()->ajax()) {


            $menus = $branch->menus->where(request('type'), 1);


            return response()->json([
                'message' => 'get successfully',
                'menus' => $menus

            ]);
        }

        return view('screens.web.menu.type', get_defined_vars());
    }

}
