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

        $cart = session()->get('cart');

        $ingredientPrice = "";
        $ingredientIds = [];
        if(isset($cart["items"][$menuId]["ingredients"])){
            foreach($cart["items"][$menuId]["ingredients"] as $ingredientId => $value){
                $ingredientIds[] += $ingredientId;
            }

            $ingredientPrice = array_sum($cart["items"][$menuId]["ingredients"]);

        }
        $request_special = "";
        if(isset($cart["items"][$menuId]["special_request"])){
            $request_special = $cart["items"][$menuId]["special_request"];
            $ingredientPrice = $cart["items"][$menuId]["ingredientPrice"];
        }

        return response()->json([
            'status' => true,
            'message' => 'product fetched successfully.',
            'menu' => $menu,
            'ingredients' => $ingredients,
            'ingredientId' => $ingredientIds,
            'request_special' => $request_special,
            'product_total' => $cart["items"][$menuId]["product_total"],
            'ingredientPrice' => $ingredientPrice,
        ],200);
    }



}
