<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProducerProductionPrice extends Model
{
    protected $fillable=[
        'priceWithTax','priceWithoutTax','dateTime','idProductiont','idProducer'
    ];
}
