<?php

namespace App\Models\Store;
 
use Illuminate\Database\Eloquent\Model;
use App\Models\Store\Attribute;
use App\Models\Store\Variant;

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
}
