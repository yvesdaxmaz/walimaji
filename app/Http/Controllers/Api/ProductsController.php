<?php

namespace App\Http\Controllers\Api;

use App\Models\Product;
use App\Models\ProductReference;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::create(Product::all(), 200);
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
        $validator = Validator::make(Input::all(), Product::$rules);
        $quantity = $request->input('quantity');
        $description = $request->input('description');
        $idRef = $request->input('idRef');
        $idActor = $request->input('idActor');

        if (!$validator->fails()) {
            try {
                User::findOrFail($idActor);
                ProductReference::findOrFail($idRef);

                Product::create(compact('name', 'quantity', 'description', 'idRef', 'idActor'));
                return Response::create("Success", 200);
            } catch (ModelNotFoundException $e) {
                return Response::create("Id Utilisateur ou refrence incorrecte", 403);
            }
        } else {
            return Response::create($validator->errors(), 422);
        }
    }


    /**s
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            return Response::create(Product::findOrFail($id), 200);
        } catch (ModelNotFoundException $e) {
            return Response::create("Ce Produit n'existe pas ou plus", 404);
        }
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
        try {
            $product = Product::findOrFail($id);
            $quantity = $request->input('quantity') ?? $product->quantity;
            $description = $request->input('description') ?? $product->description;
            $idRef = $request->input('idRef') ?? $product->idRef;
            $idActor = $request->input('idActor') ?? $product->idActor;

            $validator = Validator::make(
                compact('quantity', 'description', 'idRef', 'idActor'),
                Product::$rules
            );

            if (!$validator->fails()) {
                try {
                    User::findOrFail($idActor);
                    ProductReference::findOrFail($idRef);

                    Product::create(compact('name', 'quantity', 'description', 'idRef', 'idActor'));
                    return Response::create("Success", 200);
                } catch (ModelNotFoundException $e) {
                    return Response::create("Utilisateur ou refrence non trouve", 403);
                }
            } else {
                return Response::create($validator->errors(), 422);
            }
        } catch (ModelNotFoundException $e) {
            return Response::create("Produit non trouve", 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            Product::destroy(Product::findOrFail($id)->id);
        } catch (ModelNotFoundException $e) {
            return Response::create("Produit non trouve", 404);
        }
    }
}
