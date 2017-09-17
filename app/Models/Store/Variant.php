<?php

namespace App\Models\Store;

use App\Models\Store\Product;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
   	protected $fillable = [
   		'id',
   		'product_id',
   		'title',
   		'sku',
   		'price',
   		'quantity',
   		'attribute_1',
   		'attribute_2',
   		'attribute_3'
   	];

   	public function product()
   	{
   		return $this->belongsTo(Product::class);
   	}
}
