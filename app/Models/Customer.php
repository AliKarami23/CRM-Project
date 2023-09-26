<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Permission\Traits\HasRoles;

class Customer extends Model
{
    use HasFactory ,  HasRoles;


    protected $fillable = [
        'id',
        'FullName',
        'FatherName',
        'Email',
        'PhoneNumber',
        'Country',
        'City',
        'Address',
        'Gender',
        'NationalCode',
        'Job',
        'Image',
        'Education',
        'CityEducation',
        'Password',
        'user_id'
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
