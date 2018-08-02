<?php

namespace App\Http\Controllers;

use App\Models\ProductPrice;
use Illuminate\Http\Request;

class ProductionPriceController extends Controller
{

    public function index()
    {
         $prices=ProductPrice::all();
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        $data=$this->myValidation($request);
        $price= new ProductPrice();
        $price->product_id=$request->product_id;
        $price->actor_id=$request->actor_id;
        $price->price_with_tax=$data['price_with_tax'];
        $price->price_without_tax=$data['price_without_tax'];
        $price->date_time=$data['date_time'];
        $price->save();
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }

    public function myValidation($request)
    {
        $data=$this->validate($request,[
            'price_with_tax'=>'bail|required|numeric',
            'price_without_tax'=>'bail|required|numeric',
            'date_time'=>'bail|numeric|required',
        ]);
        return $data;
    }
}
