<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $fillable=[
        'product_id','actor_id','price_with_tax','price_without_tax','date_time']
    ;
}
