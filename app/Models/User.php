<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory , HasApiTokens , HasRoles;

    protected $guard_name  = 'api';

    protected $fillable = [
        'Role',
        'Email',
        'PhoneNumber',
        'Password'
    ];

    protected $hidden = [
        'password',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

}
