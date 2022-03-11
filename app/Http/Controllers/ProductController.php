<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Products\StoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function addproductview()
    {
        return view('admin.products.product');
    }

    public function showproduct()
    {
        return view('admin.products.showproduct');
    }

    public function addproduct(StoreRequest $request)
    {
        $validatedData = $request->validated();


        $product = new Product;
        $image = $request->image;
        $imageName = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('productImage',$imageName);
        $product->image = $imageName;

        $createdProduct = Product::create([
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'image' => $validatedData['image'],
        ]);

        if(!$createdProduct)
        {
            return back()->with('failed','Failed to Add Product');
        }
        return back()->with('success','Product Added Successfully');
    }
}
