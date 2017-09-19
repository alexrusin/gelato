<?php

namespace App\Http\Controllers;

use App\Models\Store\Product;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
    	$products = Product::get();

    	return view('store.index', compact('products'));
    }
}
