<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    public function show()
    {
        $payments = Payment::all();
        return view('admin.payments.show',compact('payments'));
    }
}
