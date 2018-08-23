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

    public static function getFollowers($id){
        return DB::table('subscriptions')
            ->select(DB::raw('count(idActor) as followers_count'))
            ->where('idActor','=',$id)
            ->get();
    }

    public static function getFollowing($id){
        return DB::table('subscriptions')
            ->select(DB::raw('count(idsubscriber) as following_count'))
            ->get();
    }
}
