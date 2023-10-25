<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    use HasFactory;

    protected $fillable=[
        'origin_lag',
        'origin_lat',
        'destination_lag',
        'destination_lat',
];
}
