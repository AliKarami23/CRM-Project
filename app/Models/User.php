<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, HasApiTokens, HasRoles;

    protected $guard_name = 'api';

    protected $fillable = [
        "Role",
        "Email",
        "PhoneNumber",
        "FullName",
        "CompanyName",
        "CompanyAddress",
        "NumberOfCustomers",
        "FatherName",
        "Country",
        "City",
        "Address",
        "Gender",
        "NationalCode",
        "Job",
        "Image",
        "Education",
        "CityEducation",
        "origin_lag",
        "origin_lat",
        "Password",
    ];

    protected $hidden = [
        'Password',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

}
