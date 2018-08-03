<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TraderProductPrice extends Model
{
    protected $fillable=[
        'priceWithTax','priceWithoutTax','dateTime','idProduct','idTrader'
    ];
}
