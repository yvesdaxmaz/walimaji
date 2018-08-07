<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TraderProduct extends Model
{
    protected $fillable =[
        'quantity','description','refProduct','idTrader'
    ];
}
