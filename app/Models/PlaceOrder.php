<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceOrder extends Model
{
    use HasFactory;
    protected $table= 'place_orders';

    protected $fillable = [
      

        'name',
        'phone',
        'address',
        'products_title',
        'image',
        'price',
        'quantity',
        'grandtotal' ,
       
    ];
}

