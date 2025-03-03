<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //?fillable
    protected $fillable = ['name', 'description', 'remaining_time', 'highest_bid'];
    
}
