<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProducerProduction extends Model
{
    protected $fillable=[
        'quantity ','description','refProduction','idProducer','dateTime'
    ];
}
