<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Exception;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        if (request()->ajax()) {
            $cart = session()->get('cart');
            $cartHtml = view('screens.web.menu.cart-menus', get_defined_vars())->render();
            return response()->json([
                'status' =>  true,
                'cartHtml' => $cartHtml
            ], 200);
        }
    }
    public function store(Request $request)
    {
        try {

            $cart = session()->get('cart');
            $menu = Menu::find($request->product_id);

            if (isset($cart['items'][$menu->id])) {
                $cart["items"][$request->product_id]["quantity"] = $request->quantity;
                // dd($cart);

                session()->put('cart', $cart);


                return response()->json([
                    'status' => true,
                    'message' => "updated it successfully.",
                ]);
            }


            $cart["items"][$menu->id] = [
                "product" => $menu,
                "quantity" => $request->quantity
            ];

            session()->put('cart', $cart);

            $cartHtml = view('screens.web.menu.cart-menus', get_defined_vars())->render();
            return response()->json([
                'status' =>  true,
                'message' => "add to cart successfully",
                'cartHtml' => $cartHtml
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'status' =>  false,
                'message' => 'Something went wrong',
                'error_message' => $e->getMessage(),
            ], 400);
        }
    }

    public function destroy($id)
    {
        $cart = session()->get('cart');


        $cart = session()->get('cart');
        if (isset($cart['items'][$id])) {
            unset($cart['items'][$id]);
            session()->put('cart', $cart);
        }


        return response()->json([]);
    }

    public function flush()
    {
        session()->forget(['cart']);
        return back();
    }
}
