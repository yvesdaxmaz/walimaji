<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransformerProductPrice extends Model
{
    protected $fillable=[
        'priceWithTax','priceWithoutTax','dateTime','idProduct','idTransformer'
    ];
}
