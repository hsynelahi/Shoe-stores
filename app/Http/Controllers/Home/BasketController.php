<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class BasketController extends Controller
{
    public function showBasket()
    {
        return view('home.baskets.basket');
    }

    public $minutes = 600;

    public function addToBasket($product_id)
    {
        

        $product = Product::find($product_id);

        $basket = json_decode(Cookie::get('basket'), true);

        // dd($basket);

        if(!$basket)
        {
            $basket = [

                $product->id => [
                    'description' => $product->description,
                    'price' => $product->price,
                    'image' => $product->image,
                ],
            ];

            $basket = json_encode($basket);
            Cookie::queue('basket',$basket,$this->minutes);

            return back()->with('success','Add to Your Shopping Cart Successfully');
           
        }
        
        if(isset($basket[$product->id]))
        {
            return back()->with('success','Add to Your Shopping Cart Successfully');
        }

        $basket[$product->id] = [
            'description' => $product->description,
             'price' => $product->price,
             'image' => $product->image,
        ];


            $basket = json_encode($basket);
            Cookie::queue('basket',$basket,$this->minutes);

            return back()->with('success','Add to Your Shopping Cart Successfully');

    }
}
