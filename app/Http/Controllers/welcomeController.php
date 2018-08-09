<?php

namespace App\Http\Controllers;

use App\Models\UserAdress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class welcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list_provider = DB::table('user_adresses')
            ->select('*', 'users.name')
            ->join('users', 'user_adresses.user_id', '=', 'users.id')
            ->where(['users.type_id' => '1'])
            ->get();
        $list_producer = DB::table('user_adresses')
            ->select('*', 'users.name')
            ->join('users', 'user_adresses.user_id', '=', 'users.id')
            ->where(['users.type_id' => '2'])
            ->get();
        $list_transformer = DB::table('user_adresses')
            ->select('*', 'users.name')
            ->join('users', 'user_adresses.user_id', '=', 'users.id')
            ->where(['users.type_id' => '3'])
            ->get();
        $list_trader = DB::table('user_adresses')
            ->select('*', 'users.name')
            ->join('users', 'user_adresses.user_id', '=', 'users.id')
            ->where(['users.type_id' => '4'])
            ->get();
       // dd($list_Adresses);


        return view('welcome', compact('list_provider', 'list_producer', 'list_transformer', 'list_trader'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
