<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $fillable=[
        'designation','description','producer_id','type_id','image'
    ];
}
