<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductReference extends Model
{

    /**
     * the table name in database
     * @var string
     */
    protected $table = 'product_refs';


    /**
     * @inheritDoc
     * @var array
     */
    protected $fillable = [
        'designation', 'description', 'image', 'type', 'idActor'
    ];


    /**
     * validation rules
     * @var array
     */
    public static $rules = [
        'designation' => 'required|min:5',
        'description' => 'required',
        'type' => 'required|numeric',
    ];

    public static function count(){
        return DB::table('product_refs')
            ->select(DB::raw('count(id) as nombreReference'))->get();
    }

    public  static function getWithTypeDesigantion($id){
        return DB::table('product_refs')
            ->join('product_types','product_types.id','product_refs.type')
            ->select('product_refs.*','product_types.designation')
            ->where('product_refs.id','=',$id)
            ->get()->toArray();
    }

    public  static function getAllWithTypeDesigantion(){
        return DB::table('product_refs')
            ->join('product_types','product_types.id','product_refs.type')
            ->select('product_refs.*','product_types.designation')
            ->get();
    }

    public static  function getAllSalers($idRef){
        return DB::table('products')
            ->join('users','users.id','=','products.idActor')
            ->join('user_adresses','user_adresses.user_id','=','users.id')
            ->select('users.*','products.quantity','user_adresses.*')
            ->where('products.idRef','=',$idRef)
            ->get();
        //DB::select("SELECT * FROM users WHERE id IN (SELECT idActor FROM products WHERE idRef=".$idRef.")");
    }

}
