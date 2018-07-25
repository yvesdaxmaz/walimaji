<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ToTransformProduct extends Model
{
    protected $fillable=[
        'product_id','transformer_id','product_state','initial_quantity','current_quantity','entry_date'
    ];
}
