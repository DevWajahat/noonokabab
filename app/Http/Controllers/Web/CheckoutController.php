<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{
    public function index()
    {


        return view('screens.web.checkout.index', get_defined_vars());
    }
    public function store(Request $request)
    {

        $cart = session()->get('cart');
        // dd($request->all());

        $user = auth()->user();

        $order =  $user->orders()->create([
            'name' => $request->name,
            'phone' => $request->phone_number,
            'time' => $request->timeSchedule,
            'schedule' => $request->schedule_date,
            'type' => $request->Delivery_Pickup,
            'phone' => $request->phone_number,
            'delivery_address' => $request->Delivery_Address,
            'Floor' => $request->Apt_Floor_Suite,
            'gratuity' => $request->gratuity_price,
            'discount_code' => $request->Discount_Code,
            'sub_total' => session('cart')["subtotal"],
            'total' => session('cart')["subtotal"],

        ]);

        foreach ($cart["items"] as $item) {
            $order->menus()->attach([
                $item["product"]["id"] =>
                [
                    'quantity' => $item['quantity'],
                    'price' => $item["product"]['price'],
                    'name' => $item["product"]['name'],
                    'category' => $item["product"]->category->name,
                    'total_price' => $item["product_total"],
                ]
            ]);

            // order menu sideline
            // menu_order_sideline


            $attachedMenu = $order->menus()->where('menu_id', $item['product']['id'])->first();
            // dd($attachedMenu->pivot->order_id);
            if(isset($item["ingredients"])){
                foreach($item["ingredients"] as $attr => $ingredientPrice){

                    $ingredient = Ingredient::find($attr);
                    $ingredientName = $ingredient->name;

                    DB::table('ingredient_menu_order')->insert([
                        'menu_order_id' => $attachedMenu->pivot->id,
                        'name' => $ingredientName,
                        'price' => $ingredientPrice,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }
            }

            if(isset($item["sidelines"])){
                foreach($item["sidelines"] as $sideline => $option){
                    DB::table('menu_order_sideline')->insert([
                        'menu_order_id' => $attachedMenu->pivot->id,
                        'name' => $sideline,
                        'option' => $option,
                        'created_at' => now(),
                        'updated_at' => now()
                    ]);
                }
            }
        }

        session()->forget(['cart']);


        return redirect()->route('index');
    }
}
