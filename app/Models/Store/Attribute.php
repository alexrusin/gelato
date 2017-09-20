<?php

namespace App\Models\Store;

use App\Models\Store\AttributeValue;
use App\Models\Store\Product;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    protected $fillable = [
    	'id',
    	'product_id',
    	'name'
    ];

    public function product()
   	{
   		return $this->belongsTo(Product::class);
   	}

   	public function attributeValues()
   	{
   		return $this->hasMany(AttributeValue::class);
   	}
}
