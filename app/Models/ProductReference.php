<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
