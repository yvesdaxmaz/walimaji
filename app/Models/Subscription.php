<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    protected $fillable=[
        'idsubscriber','idActor'
    ];

    public static function getFollowers($id){
        return DB::table('subscriptions')
            ->select(DB::raw('count(idActor)'))
            ->where('idActor','=',$id)
            ->get();
    }

    public static function getFollowing($id){
        return DB::table('subscriptions')
            ->select(DB::raw('count(idsubscriber)'))
            ->get();

    }
}
