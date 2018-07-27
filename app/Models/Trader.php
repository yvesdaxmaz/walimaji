<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trader extends Model
{
    protected  $fillable=[
      'product_id','trader_id','product_state','initial_quantity','current_state','entry_date'
    ];
}
