<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Subscription extends Model
{
    protected $fillable=[
        'idsubscriber','idActor'
    ];

    public static function getFollowersCount($id){
        return DB::table('subscriptions')
            ->select(DB::raw('count(idActor) as followers_count'))
            ->where('idActor','=',$id)
            ->get();
    }

    public static function getFollowingCount($id){
        return DB::table('subscriptions')
            ->select(DB::raw('count(idsubscriber) as following_count'))
            ->where('idsubscriber','=',$id)
            ->get();
    }
    public static function getFollowers($id){
        return DB::select("SELECT users.*, user_types.designation FROM users, user_types WHERE users.type_id=user_types.id 
                           AND users.id IN (SELECT idsubscriber FROM subscriptions WHERE idActor=".$id.")");
    }

    public static function getFollowing($id){
        return DB::select("SELECT users.*, user_types.designation FROM users, user_types WHERE users.type_id=user_types.id 
                           AND users.id IN (SELECT idActor FROM subscriptions WHERE idsubscriber=".$id.")");
    }


}
