<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InputOperation extends Model
{
    protected $fillable=[
        'input_id','provider_id','producer_id','quantity','date_time'
    ];
}
