<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * the table name in the database
     * @var string
     */
    protected $table = 'products';


    /**
     * @inheritDoc
     * @var array
     */
    protected $fillable = [
        'quantity', 'description', 'idRef', 'idActor'
    ];


    /**
     * validation rules
     * @var array
     */
    public static  $rules = [
        'quantity' => 'required|numeric',
        'description' => 'required|min:5|max:500',
        'idRef' => 'required|numeric',
        'idActor' => 'required|numeric',
    ];
}
