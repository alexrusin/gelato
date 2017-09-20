<?php

namespace App\Models\Store;

use App\Models\Store\Product;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model implements Buyable
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

      public function getBuyableIdentifier($options = null)
      {
        return $this->id;
      }

      public function getBuyableDescription($options = null)
      {
         return $this->title;
      }

      public function getBuyablePrice($options = null) 
      {
         return $this->price;
      }
}
