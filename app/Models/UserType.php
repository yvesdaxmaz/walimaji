<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserType extends Model
{
    protected $fillable=[
        'designation','description','icon'
    ];

    public static function getWithoutAdmin(){
        return DB::table('user_types')
            ->where('designation','!=','admin')
            ->select('*')
            ->get();
    }

}


