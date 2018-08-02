<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{

    public function index()
    {
        $type=ProductType::all()->toArray();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data=$this->myValidation($request);
        $type =new ProductType;
        $type->designation = $data['designation'];
        $type->description = $request->description;
        $type->icon =  file($data['icon'])->store('icons');;
        $type->save();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $type=ProductType::find($id);
    }


    public function update(Request $request, $id)
    {
        $data=$this->myValidation($request);
        $type = ProductType::find($id);
        $type->designation = $data['designation'];
        $type->description = $request->description;
        $type->icon =  file($data['icon'])->store('icons');;
        $type->save();
    }


    public function destroy($id)
    {
        ProductType::find($id)->delete();
    }

    public function myValidation($request)
    {
        $data=$this->validate($request,[
            'designation'=>'bail|required|max:20',
            'icon'=>'bail|dimensions:min_width=200,min_height=200',
        ]);
        return $data;
    }

}
