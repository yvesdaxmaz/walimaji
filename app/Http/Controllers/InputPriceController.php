<?php

namespace App\Http\Controllers;

use App\Models\InputPrice;
use Illuminate\Http\Request;

class InputPriceController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data=$this->myValidation($request);
        $price= new InputPrice();
        $price->provider_id= $request->provider_id;
        $price->price_with_tax=$data['price_with_tax'];
        $price->price_without_tax=$data['price_without_tax'];
        $price->date_time= $request->date_time;
        $price->save();
    }

    public function show($provider_id)
    {

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
    public function myValidation($request)
    {
        $data=$this->validate($request,[
            'price_with_tax'=>'required|numeric',
            'price_without_tax'=>'required|numeric',
        ]);
        return $data;
    }
}
