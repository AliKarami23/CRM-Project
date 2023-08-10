<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id' ,
        'product_id' ,
        'product_name' ,
        'description' ,
        'Category' ,
        'Price' ,
        'inventory' ,
        'color' ,
        'image',
    ];

}
