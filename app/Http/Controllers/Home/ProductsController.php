<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function productDetail($id)
    {
        $product = Product::find($id);
        return view('home.products.productDetail',compact('product'));
    }

}
