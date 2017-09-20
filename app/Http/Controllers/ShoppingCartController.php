<?php

namespace App\Http\Controllers;

use App\Models\Store\Variant;
use Gloudemans\Shoppingcart\Cart;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    public function add(Cart $cart)
    {
    	$variantId = request('size');
    	$quantity = request('quantity');
    	$variant = Variant::find($variantId);

    	$product = $variant->product;

    	$imageUrl = $product->image_url ? $product->image_url : 'images/store/no-image.jpg';

    	$cart->add($variant, $quantity, ['size' => $variant->attribute_1, 'image_url' => $imageUrl]);

    	if($cart) {
    		request()->session()->flash('alert-success','Item has been added to cart successfully');
    	} else {
    		request()->session()->flash('alert-danger','There was an error adding item to cart.  Please try again later');
    	}

    	return redirect(route('product', ['product' => $product->id]));

    }

    public function view(Cart $cart)
    {
    	foreach ($cart->content() as $cartItem){
    		$cart->setTax($cartItem->rowId, 9.75);
    	}

    	return view('store.shopping-cart', compact('cart'));
    }

    public function delete(Cart $cart)
    {
    	$rowId = request('rowId');

    	$cart->remove($rowId);

    	return response()->json(['message'=>'success'], 200);
    }
}
