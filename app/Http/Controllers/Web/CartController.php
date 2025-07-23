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



            $cartCount = count(session()->get('cart')["items"]);

            $cartHtml = view('screens.web.menu.cart-menus', get_defined_vars())->render();
            return response()->json([
                'status' =>  true,
                'cartHtml' => $cartHtml,
                'cartCount' => $cartCount
            ], 200);
        }
    }
    public function store(Request $request)
    {

        try {

            $cart = session()->get('cart');
            $menu = Menu::find($request->product_id);


            if (isset($cart['items'][$request->product_id])) {

                if ($request->has('sideline')) {
                    $cart['items'][$request->product_id]["sidelines"][$request->sideline] = $request->option;
                }

                $ingredientPrice = '';
                if ($request->has('quantity')) {

                    $cart["items"][$request->product_id]["quantity"] = $request->quantity;

                    if (isset($cart["items"][$request->product_id]["ingredients"])) {
                        $cart["items"][$request->product_id]["ingredientPrice"] = array_sum($cart["items"][$request->product_id]["ingredients"]);
                        $cart["items"][$request->product_id]["product_total"] = floatval($request->quantity) * (floatval($cart["items"][$request->product_id]["ingredientPrice"]) + floatval($cart["items"][$request->product_id]["product"]["price"]));
                    } else {
                        $cart["items"][$request->product_id]["product_total"] = floatval($request->quantity) * floatval($cart["items"][$request->product_id]["product"]["price"]);
                    }
                }


                if ($request->has("ingredients")) {
                    unset($cart["items"][$request->product_id]["ingredients"]);
                    unset($cart["items"][$request->product_id]["ingredientPrice"]);
                    unset($cart["items"][$request->product_id]["product_total"]);


                    $cart["items"][$request->product_id]["ingredients"] = $request->ingredients;
                    $cart["items"][$request->product_id]["ingredientPrice"] = array_sum($cart["items"][$request->product_id]["ingredients"]);

                    $cart["items"][$request->product_id]["product_total"] = $cart["items"][$request->product_id]["quantity"] *
                        (floatval($cart["items"][$request->product_id]["ingredientPrice"]) + floatval($cart["items"][$request->product_id]["product"]["price"]));
                }
                if ($request->has('special_request')) {
                    $cart["items"][$request->product_id]["special_request"] = $request->special_request;
                }



                session()->put('cart', $cart);

                $this->calculate();



                return response()->json([
                    'status' => true,
                    'message' => "updated it successfully.",
                    'product_total' => $cart["items"][$request->product_id]["product_total"],
                    'price' => $cart["items"][$request->product_id]["product"]["price"],
                    'ingredient_price' => $ingredientPrice,
                    'button' => $cart,
                ]);
            }


            $cart["items"][$menu->id] = [
                "product" => $menu,
                "quantity" => $request->quantity,
                "product_total" => $menu->price
            ];

            session()->put('cart', $cart);

            $this->calculate();

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

    public function calculate()
    {
        $cart = session()->get('cart');

        $subTotal = 0;
        foreach ($cart["items"] as $cartItem) {
            $subTotal += floatval($cartItem['product_total']);
        }

        $cart["subtotal"] = $subTotal;

        session()->put('cart', $cart);
    }

    public function destroy($id)
    {
        $cart = session()->get('cart');


        $cart = session()->get('cart');
        if (isset($cart['items'][$id])) {
            unset($cart['items'][$id]);
            session()->put('cart', $cart);
        }

        $this->calculate();

        return response()->json([]);
    }

    public function unsetIngredients(Request $request)
    {

        // dd($request->all());

        $cart = session()->get('cart');

        if (isset($cart['items'][$request->product_id])) {


            if ($request->has('sideline')) {
                unset($cart['items'][$request->product_id]["sidelines"][$request->sideline]);
                $message = 'sideline removed Successfully.';
            }

            if ($request->has("ingredients")) {
                unset($cart["items"][$request->product_id]["ingredients"]);
                unset($cart["items"][$request->product_id]["ingredientPrice"]);
                unset($cart["items"][$request->product_id]["product_total"]);

                $cart["items"][$request->product_id]["product_total"] = $cart["items"][$request->product_id]["quantity"] *
                  floatval($cart["items"][$request->product_id]["product"]["price"]);

                  $message = 'ingredient removed Successfully.';
            }
        }

        $cart = session()->put('cart', $cart);

        return response()->json([
            'status' => true,
            'message' => $message,

        ]);
    }

    public function flush()
    {
        session()->forget(['cart']);
        return back();
    }
}
