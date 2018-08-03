<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProviderInputPrice extends Model
{
    protected $fillable=[
        'priceWithTax','priceWithoutTax','dateTime','idInput','idProvider'
    ];
}
