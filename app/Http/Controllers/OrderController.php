<?php

namespace App\Http\Controllers;

use App\Models\Store\Order;
use App\Models\Store\OrderItem;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function create(Cart $cart) 
    {

    	$orderNumber = strtoupper(substr(md5(microtime()), 0, 8));
    	try {
    		DB::transaction(function() use ($cart, $orderNumber){
	    		$order =  Order::create([
		    		'order_number' => $orderNumber,
		    		'order_subtotal' => $cart->subtotal(2),
		    		'order_total' => $cart->total(2),
		    		'tax_amount' => $cart->tax(2)
		    	]);

		    	foreach ($cart->content() as $row) {
		    		OrderItem::create([
		    			'order_id' => $order->id,
		    			'variant_id' => $row->id,
		    			'quantity' => $row->qty

		    		]);
		    	}

	    	});

    	} catch (\Exception $e) {
    		return response()->json(['errorMessage'=>'There was an error.  Pleas try again late'], 500);
    	}

    	$cart->destroy();

    	$order = Order::where('order_number', $orderNumber)->first();

    	return response()->json(['orderId' => $order->id], 200);

    }

    public function delete() 
    {
    	$orderId = request('orderId');

    	$order = Order::findOrFail($orderId);

    	$order->delete();
    }
}
