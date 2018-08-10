<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $fillable=[
        'priceWithTax','priceWithoutTax','dateTime','idProduct','idActor'
    ];
}
