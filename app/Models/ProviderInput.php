<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProviderInput extends Model
{
    protected $fillable=[
        'quantity','description','refInput','idProvider'
    ];
}
