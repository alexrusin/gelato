<?php

namespace App\Models\Store;
 
use App\Models\Store\Attribute;
use App\Models\Store\ProductImages;
use App\Models\Store\Variant;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'id',
    	'title',
    	'description',
    	'image_url'
    ];

    public function variants()
    {
    	return $this->hasMany(Variant::class);
    }

    public function attributes()
    {
    	return $this->hasMany(Attribute::class);
    }

    public function productImages()
    {
        return $this->hasMany(ProductImages::class);
    }
}
