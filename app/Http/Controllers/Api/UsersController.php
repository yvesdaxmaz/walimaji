<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
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

        $validator = Validator::make(Input::all(), User::$rules);
        $name = $request->input('name');
        $description = $request->input('description');
        $email = $request->input('email');
        $password = $request->input('password');
        $type_id = $request->input('type_id');
        $api_token = Hash::make(str_random(60));
        $data = compact('name', 'description', 'email', 'password', 'type_id', 'api_token');

        if (!$validator->fails()) {
            User::firstOrCreate($data);
            return Response::create("Success", 200);
        } else {
            return Response::create($validator->errors(), 422);
        }
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
        try {
            $user = User::findOrFail($id);
            $data = [
                'name' => $request->input('name') ?? $user->name,
                'description' => $request->input('description') ?? $user->description,
                'phone' => $request->input('phone') ?? $user->phone
            ];

            $validator = Validator::make($data, [
                'name' => 'required|unique:users',
                'phone' => 'required|unique:users',
                'description' => 'required|min:6'
            ]);


            if (!$validator->fails()) {
                $user->update($data);
                return Response::create($user, 200);
            } else {
                return Response::create($validator->errors(), 422);
            }
        } catch (ModelNotFoundException $e) {
            return Response::create("utilisateur non trouve", 404);
        }
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
