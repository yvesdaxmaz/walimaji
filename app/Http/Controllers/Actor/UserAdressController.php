<?php

namespace App\Http\Controllers;

use App\Models\UserAdress;
use Illuminate\Http\Request;

class UserAdressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_Adresses = DB::table('user_adresses')
            ->select('*', 'users.name')
            ->join('users', 'user_adresse.user_id', '=', 'users.id')
            ->get();
        dd($list_Adresses);

        return view('welcome', compact('list_Adresses'));
        //
    }
    public function test()
    {

        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserAdress  $userAdress
     * @return \Illuminate\Http\Response
     */
    public function show(UserAdress $userAdress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserAdress  $userAdress
     * @return \Illuminate\Http\Response
     */
    public function edit(UserAdress $userAdress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserAdress  $userAdress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserAdress $userAdress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserAdress  $userAdress
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserAdress $userAdress)
    {
        //
    }
}
