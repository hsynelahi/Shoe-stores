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
        $products = Product::all();
        return view('admin.products.showproduct',compact('products'));
    }

    public function addproduct(StoreRequest $request)
    {
        $validatedData = $request->validated();

        $newImageName = time() . '-' .$request->name . '.' . $request->image->extension();
        $request->image->move(public_path('images'),$newImageName);

        $createdProduct = Product::create([
            'price' => $validatedData['price'],
            'description' => $validatedData['description'],
            'image' => $newImageName,
        ]);

        if(!$createdProduct)
        {
            return back()->with('error','Failed to Add Product');
        }
        return back()->with('success','Product Added Successfully');
    }

    public function deleteproduct($id)
    {
        $product = Product::find($id);

        $product->delete();

        return back()->with('success','Product Deleted Successfully');

    }
}
