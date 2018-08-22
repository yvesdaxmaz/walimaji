<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{

    protected $table = 'products';

    protected $fillable = [
        'quantity', 'description', 'idRef', 'idActor'
    ];

    public static  $rules = [
        'quantity' => 'required|numeric',
        'description' => 'required|min:5|max:500',
        'idRef' => 'required|numeric',
        'idActor' => 'required|numeric',
    ];

    public static function getWithReference($id){
        return DB::table('products')
            ->join('product_refs', 'product_refs.id', '=', 'products.idRef')
            ->join('product_prices','product_prices.idProduct','=','products.id')
            ->select('products.*', 'product_refs.*','product_prices.*')
            ->where('products.idActor','=',$id,'and','')
            ->get()->toArray();
    }
}
