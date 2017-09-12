<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    protected $fillable = [
    	'id', 
    	'title',
    	'excerpt',
    	'image_url'
    ];
}
