<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opportunities extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id' ,
        'Category' ,
        'Product_id' ,
        'Number' ,
        'Color' ,
        'Price' ,
        'TotalPrice' ,
        'Description' ,
        'Status'];
}
