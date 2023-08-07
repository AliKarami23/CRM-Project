<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['id','product' , 'price' , 'description' , 'buyer', 'created_at','updated_at	', 'status'];
}
