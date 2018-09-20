<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserAdress extends Model
{

    /**
     * retrieve a collection of users adresses according to their types.
     * @param int $type
     * @return mixed
     */
    public static function getWithUserType($type) {
       return DB::table((new self)->getTable())
           ->select('*', 'users.name')
           ->join('users', 'user_adresses.user_id', '=', 'users.id')
           ->where(['users.type_id' => "{$type}"])
           ->get();
    }
}
