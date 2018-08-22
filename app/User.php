<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    public static $rules = [
        "name" => "required|unique:users|max:65",
        "email" => "required|unique:users|email",
        "phone" => "required|unique:users|min:9",
        "description" => 'min:6',
        'password' => 'required|min:6',
        'type_id' => 'required|numeric'
    ];

    protected $fillable = [
        'name', 'email', 'password', 'type_id', 'description', 'phone', 'image', 'facebook', 'tittwer', 'instagram', 'api_token'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function getWithAdressAndType($id){
        return DB::table('users')
            ->join('user_adresses','users.id','=','user_adresses.user_id')
            ->join('user_types','users.type_id','=','user_types.id')
            ->select('users.*','user_adresses.*','user_types.*')
            ->where('users.id','=',$id)
            ->get()->toArray();
    }
}
