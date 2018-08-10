<?php

namespace App\Http\Controllers\Actor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productPrices=DB::table('product_prices')
                        ->where('actor_id','=',Auth::id())
                        ->orderBy('id','desc')
                        ->first();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD:app/Http/Controllers/Admin/ProducerProctuctTypeController.php
=======
        //
>>>>>>> 2ab1671b474f67ab578c1a5583b143e5dd2905b0:app/Http/Controllers/Actor/ProductPriceController.php
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
        $price= new ProductPrice();
        $price->idProduct=$request->idProduct;
        $price->idActor=$request->idActor;
        $price->price_with_tax=$data['price_with_tax'];
        $price->price_without_tax=$data['price_without_tax'];
        $price->date_time=$data['date_time'];
        $price->save();
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

    public function myValidation($request)
    {
<<<<<<< HEAD:app/Http/Controllers/Admin/ProducerProctuctTypeController.php
        $data=$this->validate($request, [
            'designation'=>'bail|required|max:20',
         ]);
=======
        $data=$this->validate($request,[
            'price_with_tax'=>'bail|required|numeric',
            'price_without_tax'=>'bail|required|numeric',
            'date_time'=>'bail|required',
        ]);
>>>>>>> 2ab1671b474f67ab578c1a5583b143e5dd2905b0:app/Http/Controllers/Actor/ProductPriceController.php
        return $data;
    }
}
