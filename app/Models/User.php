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

    protected $fillable = [
        'id',
        'Role',
        'Email',
        'PhoneNumber',
        'Password'
    ];

    public function Customer(): HasMany
    {
        return $this->hasMany(Customer::class);
    }

}
