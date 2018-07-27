<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Production extends Model
{
    protected $fillable =[
        'description','image','product_id','producer_id','state','initial_quantity','current_quantity','date_production'
    ];
}
