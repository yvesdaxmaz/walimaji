<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductInput extends Model
{
    protected $fillable=[
        'type','designation','description','provider_id','initial_quantity','current_quantity','entry_date'
    ];
}
