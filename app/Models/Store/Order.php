<?php

namespace App\Models\Store;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    	'id',
    	'order_number',
    	'customer_name',
    	'customer_email',
    	'customer_phone'
    ];

    protected $dates = [
    	'created_at',
        'updated_at',
    	'shipping_date'
    ];
}
