<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function show()
    {
        $orders = Order::all();
        return view('admin.orders.show',compact('orders'));
    }
}
