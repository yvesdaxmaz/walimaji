<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InputPrice extends Model
{
    protected $fillable=[
        'input_id','price_with_tax','price_without_tax','date_time'
    ];
}
