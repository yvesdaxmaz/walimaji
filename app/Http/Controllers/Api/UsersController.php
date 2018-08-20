<?php

namespace App\Http\Controllers\Api;

use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return Response::create($data, 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $password = Hash::make($request->input('password'));
        $type_id = $request->input('type_id');

        try {

            User::firstOrCreate([
                'name' => $name,
                'description' => $description,
                'email' => $email,
                'phone' => $phone,
                'password' => $password,
                'type_id' => $type_id,
                'api_token' => str_random(60)
            ]);
        }catch (\Exception $e){
            return Response::create("Error value");
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


        try {
            $user = User::findOrFail($id);
            $name = $request->input('name') ?? $user->name;
            $description = $request->input('description') ?? $user->description;
            $phone = $request->input('phone') ?? $user->phone;

            $data = compact('name', 'description', 'email', 'phone');
            $user->update($data);


        } catch (ModelNotFoundException $e) {
            return Response::create("Utilisateur n'existe plus ou pas");
        }
    }


}
