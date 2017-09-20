<?php

namespace App\Http\Controllers;

use App\Models\Store\Product;
use App\Models\Store\Variant;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
    	$products = Product::get();

    	return view('store.index', compact('products'));
    }

    public function show(Product $product)
    {
    	$variants = $product->variants;

    	if($variants->isEmpty()){
    		$unavailable = true;
    	} else {
    		$unavailable = false;
    		$sizes = $variants->pluck('attribute_1', 'id')->toArray();
    		$variant = $variants->first();
	    	$quantity = $variant->quantity;

	    	$price = $this->isOutOfStock($quantity, $variant);

	    	if(starts_with($price, '$')) {
	    		$quantityArray = $this->getQuantitesArray($quantity);
	    	}
	    	
    	}

    	return view('store.product', compact('product', 'sizes', 'quantityArray', 'price', 'unavailable'));
    }

    private function isOutOfStock($quantity, $variant)
    {
    	if($quantity > 0) {
    		return '$'. $variant->price;
    	}

    	return 'Sorry, this product is currently out of stock';
    }

    private function getQuantitesArray($quantity) 
    {
    	if ($quantity > 10) {
    		$quantity = 10;
    	}

    	$quantityArray = [];

    	for ($i = 1; $i <= $quantity; $i ++) {
    		$quantityArray[$i] = $i;
    	}

    	return $quantityArray;
    }

    public function getVariant()
    {
    	$variantId = request('id');

    	$variant = Variant::find($variantId);

    	if(!$variant) {
    		return response()->json(['errorMessage' => 'Sorry, there was an error processing your request'], 400);
    	}

    	$returnArray = [];
    	$quantity = $variant->quantity;
    	$price = $this->isOutOfStock($quantity, $variant);
    	

    	if(starts_with($price, '$')) {
    		$quantityArray = $this->getQuantitesArray($quantity);
    	} else {
    		$quantityArray = null;
    	}

    	$returnArray['price'] = $price;
    	$returnArray['quantity'] = $quantityArray;

    	return response()->json($returnArray, 200);
    }
}
