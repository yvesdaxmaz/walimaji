<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductPrice extends Model
{
    protected $fillable=[
        'priceWithTax','priceWithoutTax','dateTime','idProduct','idActor'
    ];

    public static  function  getBiggerPriceOf($idRef){
        return DB::select("SELECT x.*
                            FROM ( select u.id, u.name, pr.priceWithTax, pr.priceWithoutTax FROM products p, product_refs prf,users u, product_prices pr WHERE pr.id = (SELECT id FROM product_prices WHERE idProduct = p.id ORDER BY id DESC LIMIT 1 ) AND pr.idProduct IN (SELECT id FROM products WHERE idRef=".$idRef.") AND prf.id=p.idRef And u.id=p.idActor ) x ORDER BY x.priceWithoutTax DESC LIMIT 1");
    }

    public static function getSmallerPriceOf($idRef){
        return DB::select("SELECT x.*
                            FROM ( select u.id, u.name, pr.priceWithTax, pr.priceWithoutTax FROM products p, product_refs prf,users u, product_prices pr WHERE pr.id = (SELECT id FROM product_prices WHERE idProduct = p.id ORDER BY id DESC LIMIT 1 ) AND pr.idProduct IN (SELECT id FROM products WHERE idRef=".$idRef.") AND prf.id=p.idRef And u.id=p.idActor ) x ORDER BY x.priceWithoutTax ASC LIMIT 1");
    }


}
