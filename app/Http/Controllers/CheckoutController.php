<?php

namespace App\Http\Controllers;

use App\Models\Store\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function showShippingAddress(Order $order)
    {
    	return view('checkout.address', compact('order'));
    }
}
