<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $fillable = [
    	"id",
    	"name",
    	"tag_line",
    	"about",
    	"image_url"
    ];
}
