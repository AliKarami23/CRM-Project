<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable=[
        'vehicle',
        'base_price',
        'distance_odds',
        'time_odds',
    ];
}
