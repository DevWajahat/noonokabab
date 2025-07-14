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

            $menu = Menu::all();


            $cartHtml = view('screens.web.menu.cart-menus', get_defined_vars())->render();
            return response()->json([
                'status' =>  true,
                'cartHtml' => $cartHtml
            ], 200);
        }
    }
    public function store(Request $request)
    {
        // dd($request->all());
        try {

            $cart = session()->get('cart');
            $menu = Menu::find($request->product_id);


            if (isset($cart['items'][$request->product_id])) {

                if ($request->has('sideline')) {
                    $cart['items'][$request->product_id]["sidelines"][$request->sideline] = $request->option;
                }
                if ($request->has('quantity')) {

                    $cart["items"][$request->product_id]["quantity"] = $request->quantity;
                }

                if ($request->has("ingredients")) {
                    unset($cart["items"][$request->product_id]["ingredients"]);
                    $cart["items"][$request->product_id]["ingredients"] = $request->ingredients;
                }
                if ($request->has('special_request')){
                    $cart["items"][$request->product_id]["special_request"] = $request->special_request;
                }



                session()->put('cart', $cart);


                return response()->json([
                    'status' => true,
                    'message' => "updated it successfully.",
                    'button' => $cart,
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
                'cartHtml' => $cartHtml,
                'button' => 'disabled-' . $menu->id
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

    public function unsetIngredients(Request $request)
    {

        dd($request->all());




        return response()->json([
            'status' => true,
            'message' => 'ingredient added successfully.',

        ]);
    }

    public function flush()
    {
        session()->forget(['cart']);
        return back();
    }
}
