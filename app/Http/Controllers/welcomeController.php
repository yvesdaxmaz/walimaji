<?php

namespace App\Http\Controllers;

use App\Models\UserAdress;
use App\Models\UserType;
use App\User;
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
        $list_provider = UserAdress::getWithUserType(1);
        $list_producer = UserAdress::getWithUserType(2);
        $list_transformer = UserAdress::getWithUserType(3);
        $list_trader = UserAdress::getWithUserType(4);
        $types = UserType::limit(4)->get();

        return view('welcome', compact('types', 'list_provider', 'list_producer', 'list_transformer', 'list_trader'));
    }


    public function getTrader()
    {
        $list_trader = DB::table('user_adresses')
            ->select('*', 'users.name')
            ->join('users', 'user_adresses.user_id', '=', 'users.id')
            ->where(['users.type_id' => '4'])
            ->get();
        return response()->json($list_trader);
    }

    public function getProducer()
    {
        $list_producer = DB::table('user_adresses')
            ->select('*', 'users.name')
            ->join('users', 'user_adresses.user_id', '=', 'users.id')
            ->where(['users.type_id' => '2'])
            ->get();

        return response()->json($list_producer);
    }

    public function getProvider()
    {
        $list_provider = DB::table('user_adresses')
            ->select('*', 'users.name')
            ->join('users', 'user_adresses.user_id', '=', 'users.id')
            ->where(['users.type_id' => '1'])
            ->get();
        return response()->json($list_provider);

    }

    public function getTransformer()
    {
        $list_transformer = DB::table('user_adresses')
            ->select('*', 'users.name')
            ->join('users', 'user_adresses.user_id', '=', 'users.id')
            ->where(['users.type_id' => '3'])
            ->get();
        return response()->json($list_transformer);

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
