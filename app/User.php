<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * the table name in the database
     * @var string
     */
    protected $table = 'users';


    /**
     * validation rules
     * @var array
     */
    public static $rules = [
        "name" => "required|unique:users|max:65",
        "email" => "required|unique:users|email",
        "phone" => "required|unique:users|min:9",
        "description" => 'min:6',
        'password' => 'required|min:6',
        'type_id' => 'required|numeric'
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'type_id', 'description', 'phone', 'image', 'facebook', 'tittwer', 'instagram', 'api_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
