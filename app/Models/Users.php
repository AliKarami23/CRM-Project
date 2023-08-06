<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'addusersinpanel';

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

}
