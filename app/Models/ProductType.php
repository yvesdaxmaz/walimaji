<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductType extends Model
{
    protected $fillable=[
        'designation','idActor'
    ];

    public  static function count(){
        return DB::table('product_types')
            ->select(DB::raw('count(id) as nombreTypeProduit'))->get();
    }

}
