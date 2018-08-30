<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Subscription;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function index($id){

    }

    public function detail($id){
        $details=User::getWithAdressAndType($id,'');

        $products=Product::getWithReference($id);

        $followers=Subscription::getFollowers($id);

        $following= Subscription::getFollowing($id);

        dd($details);

        return view('user-detail',compact('details','products','followers','following'));

    }

    public static function newSubscription($id){
        $sub= new Subscription();
        $sub->idsubscriber=Auth::id();
        $sub->idActor=$id;
        $sub->save();
    }

    public function store(request $request)
    {

        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $api_token=str_random(60);
        $type_id = $request->input('type_id');

        return User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'type_id' => $type_id,
            'api_token'=>$api_token
        ]);

    }
}
