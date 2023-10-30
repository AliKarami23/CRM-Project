<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Factor extends Model
{
    use HasFactory;
    protected $fillable=[
        'user_id',
        'order_id',
        'Status',
        'user_id',
        'Description',
        'Destination',
        'Total_price',
        'factor_number',
        'deliver_time'
    ];



    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function orders(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
