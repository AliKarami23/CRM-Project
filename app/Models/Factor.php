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
        'factor_name',
        'Description',
        'factor_date',
        'user_id',
        'factor_cost',
        'factor_number',
        'order_id'
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
