<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public function showBasket()
    {
        return view('home.baskets.basket');
    }
}
