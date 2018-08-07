<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransformerProduct extends Model
{
    protected $fillable=[
        'quantity ','description','refProduct','idTransformer'
    ];
}
