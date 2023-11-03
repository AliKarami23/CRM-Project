<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'Description',
        'Total_price',
        'order_number',
        'Status',
        'product_id',
        'Shipping_time',
        'Quantity',
        'distance',
        'lag',
        'lat',
        'location',
        'vehicle'
    ];

    public function factor(): HasMany
    {
        return $this->hasMany(Factor::class);
    }


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }

}
