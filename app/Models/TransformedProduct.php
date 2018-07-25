<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransformedProduct extends Model
{
    protected $fillable=[
        'produc_id','transformer_id','product_state','initial_quantity','current_quantity','entry_date'
    ];
}
