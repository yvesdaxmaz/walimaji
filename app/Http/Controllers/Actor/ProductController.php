<?php

namespace App\Http\Controllers\Actor;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=DB::table('products')
            ->where('id',Auth::id())
            ->get()
            ->toArray();
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
        $data=$this->myValidation($request);
        $product =new Product();
        $product->quantity = $data['quantity'];
        $product->description = $request->description;
        $product->idRef =  $request->idRef;
        $product->idActor =  $request->idActor;
        $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=Product::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
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
        $data=$this->myValidation($request);
        $product =Product::find($id);
        $product->quantity = $data['quantity'];
        $product->description = $request->description;
        $product->idRef =  $request->idRef;
        $product->idActor =  $request->idActor;
        $product->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
    }

    public function myValidation($request)
    {
<<<<<<< HEAD:app/Http/Controllers/Admin/TransformerProductTypeController.php
        $data=$this->validate($request, [
            'designation'=>'bail|required|max:20',
=======
        $data=$this->validate($request,[
            'quantity'=>'numeric'
>>>>>>> 2ab1671b474f67ab578c1a5583b143e5dd2905b0:app/Http/Controllers/Actor/ProductController.php
        ]);
        return $data;
    }
}
