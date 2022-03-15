<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CheckoutsController extends Controller
{
    public function checkoutShow()
    {
        $products = json_decode(Cookie::get('basket'), true);

        $productsPrice = array_sum(array_column($products , 'price'));

        return view('home.checkouts.checkout' , compact('products','productsPrice'));
    }
}
