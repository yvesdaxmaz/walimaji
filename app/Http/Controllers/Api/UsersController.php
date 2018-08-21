<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::create(User::all(), 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = User::Where('id', intval($id))->firstOrFail();
            return Response::create($data, 200);
        } catch (ModelNotFoundException $e) {
            return Response::create("Utilisateur n'existe pas ou plus", 404);
        }
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

    }


    /**
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $user = User::Where('id', $id)->firstOrFail();
            $user->destroy($id);
            return Response::create("Utilisateur supprime", 200);
        } catch (ModelNotFoundException $e) {
            return Response::create("Utilisateur n'existe pas ou plus", 404);
        }
    }
}
