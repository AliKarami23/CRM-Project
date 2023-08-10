<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunity extends Model
{
    use HasFactory;
    protected $fillable = ['user_id' , 'category' , 'product_id' , 'number' , 'color' , 'price' , 'total_price' , 'description' , 'status'];
}
