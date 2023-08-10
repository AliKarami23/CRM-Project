<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'product_id', 'price', 'description', 'user_id', 'created_at', 'updated_at'];

    public function factors(): HasMany
    {
        return $this->hasMany(Factor::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
