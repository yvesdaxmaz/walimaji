<?php

namespace App\Http\Controllers;

use App\Models\UserAdress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\UserType;

class WelcomeController extends Controller
{
    /**
     * affiche sur une carte, les pins de traders par default,
     * et les autres types de users en fonction du type demandE.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->query('tab')) {
            $types = ['trader' => 1, 'producer' => 2, 'transfomer' => 3, 'provider' => 4];
            $tab = (array_key_exists($request->query('tab'), $types))?
                htmlspecialchars($request->query('tab')) :
                'trader';

            $data = UserAdress::getWithUserType(intval($types[$tab]));
        } else {
            $tab = 'trader';
            $data = UserAdress::getWithUserType(1);
        }

        $types = UserType::limit(4)->get();
        return view('home', compact('data', 'tab', 'types'));
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

    public  function getTransformer()
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
