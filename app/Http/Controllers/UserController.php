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

    public function setAdresse(request $request)
    {
        $msg = '';

       try{
           DB::table('user_adresses')
               ->where('id', $request->input('id'))
               ->update(['adresse' => $request->input('adresse'),
                   'latitude' => $request->input('latitude'),
                   'longitude' => $request->input('longitude')]);
           $msg= 'update success';

       }catch (QueryException $exception){
           $msg= $exception->getMessage();
       }
       return json_encode(['msg'=>$msg]);

    }


}
