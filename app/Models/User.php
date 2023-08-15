<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'created_at',
        'updated_at',
        'name',
        'fname',
        'dadname',
        'email',
        'phonenumber',
        'country',
        'City',
        'Address',
        'gender',
        'nationalcode',
        'job',
        'image',
        'education',
        'cityofeducation',
        'password',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }


}
