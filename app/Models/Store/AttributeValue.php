<?php

namespace App\Models\Store;

use App\Models\Store\Attribute;
use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    protected $fillable = [
    	'id',
    	'attribute_id',
    	'name'
    ];

    public function attribute()
    {
    	return $this->belongsTo(Attribute::class);
    }
}
