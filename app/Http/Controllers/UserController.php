<?php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function index($id){

        $userDetails=DB::table('users')
            ->join('user_adresses','users.id','=','user_adresses.user_id')
            ->select('users.*','user_adresses.*')
            ->where('users.id','=',$id);

        $products=DB::table('products')
            ->join('product_refs', 'product_refs.id', '=', 'products.idRef')
            ->select('products.*', 'product_refs.*')
            ->where('products.idActor','=',$id)
            ->get();

        $followers=DB::table('subscriptions')
            ->select(DB::raw('count(idActor) as follewers_count'))
            ->where('idActor','=',$id)
            ->get();

        $following=DB::table('subscriptions')
            ->select(DB::raw('count(idsubscriber) as follewing_count'))
            ->get();

        return view('user.userDetail',compact('$userDetails','$products','$followers','$following'));

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
