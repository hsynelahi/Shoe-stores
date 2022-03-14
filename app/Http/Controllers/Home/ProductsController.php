<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function productDetail()
    {
        $products = Product::all();
        return view('home.products.productDetail',compact('products'));
    }

}
