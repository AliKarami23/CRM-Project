<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'id',
        'product_name' ,
        'Description' ,
        'Category' ,
        'Price' ,
        'inventory' ,
        'color' ,
        'image',
    ];


    public function factor(): BelongsTo
    {
        return $this->belongsTo(Factor::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

}
