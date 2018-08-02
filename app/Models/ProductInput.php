<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductInput extends Model
{
    protected $fillable=[
         'designation','description','type_id','image','provider_id','quantity', 'entry_date'
    ];
}
