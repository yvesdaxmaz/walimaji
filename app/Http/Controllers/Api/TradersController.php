<?php

namespace App\Http\Controllers\Api;

use App\Models\UserAdress;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Response;

class TradersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = UserAdress::getWithUserType(1);
        return Response::create($data, 200);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = User::Where([
                ['id', intval($id)],
                ['type_id', 1]
            ])->firstOrFail();

            return Response::create($data, 200);
        } catch (ModelNotFoundException $e) {
            return Response::create("Utilisateur n'existe pas ou plus", 404);
        }
    }
}
