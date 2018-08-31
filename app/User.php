<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public static function count()
    {
        return DB::table('users')
            ->join('user_types', 'user_types.id', 'users.type_id')
            ->select(DB::raw('count(users.id) as nombreUser'))
            ->where('user_types.designation', '!=', 'admin')->get();
    }

    public static function getWithAdressAndType($id, $email)
    {
        return DB::table('users')
            ->select('users.*', 'user_adresses.*', 'user_types.*')
            ->join('user_adresses', 'users.id', '=', 'user_adresses.user_id')
            ->join('user_types', 'users.type_id', '=', 'user_types.id')
            ->where('users.id', '=', $id, ' or ', 'users.email', '=', $email)->limit(1)
            ->get();
    }

    public static function getWithType()
    {
        return DB::table('users')
            ->join('user_types', 'users.type_id', '=', 'user_types.id')
            ->select('users.*', 'user_types.*')
            ->where('users.id', '=', Auth::id())
            ->get();
    }

    public static function getAllProviders()
    {
        return DB::table('users')
            ->join('user_types', 'users.type_id', '=', 'user_types.id')
            ->select('users.*')
            ->where('user_types.designation', '=', 'provider')
            ->get();
    }

    public static function getAllProducers()
    {
        return DB::table('users')
            ->join('user_types', 'users.type_id', '=', 'user_types.id')
            ->select('users.*')
            ->where('user_types.designation', '=', 'producer')
            ->get();
    }

    public static function getAllTransfomers()
    {
        return DB::table('users')
            ->join('user_types', 'users.type_id', '=', 'user_types.id')
            ->select('users.*')
            ->where('user_types.designation', '=', 'transformer')
            ->get();

    }

    public static function getAllTraders()
    {
        return DB::table('users')
            ->join('user_types', 'users.type_id', '=', 'user_types.id')
            ->select('users.*')
            ->where('user_types.designation', '=', 'trader')
            ->get();

    }

    public static function getAdminDetail()
    {
        return DB::table('users')
            ->join('user_types', 'users.type_id', 'user_types.id')
            ->where('users.id', '=', Auth::id())
            ->select('users.name', 'user_types.designation')->get();
    }
}
