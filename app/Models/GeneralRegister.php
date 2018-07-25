<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GeneralRegister extends Model
{
    protected $fillable =[
      'product_id','product_state','quantity','seller_id','buyer_id','delivery_date','order_date'
    ];
}
