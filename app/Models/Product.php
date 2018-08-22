<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
            ->select('products.*', 'product_refs.*')
            ->where('products.idActor','=',$id)
            ->get()->toArray();
    }
}
