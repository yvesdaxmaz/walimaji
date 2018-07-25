<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $fillable=[
        'designation','description','producer_id','state','current_quantity','initial_quantity','date_production'
    ];
}
