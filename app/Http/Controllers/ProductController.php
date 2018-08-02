<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products=Product::all()->toArray();
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        $data=$this->myValidation($request);
        $product= new Product();
        $product->designation=$data['designation'];
        $product->description=$request->description;
        $product->type_id=$request->type_id;
        $product->image=file($data['image'])->store('images');
        $product->producer_id=$request->producer_id;
        $product->save();
    }


    public function show($id)
    {
        $product=Product::find($id);
    }


    public function edit($id)
    {
        $product=Product::find($id);
    }

    public function update(Request $request, $id)
    {
        $data=$this->myValidation($request);
        $product= Product::find($id);
        $product->designation=$data['designation'];
        $product->description=$request->description;
        $product->type_id=$request->type_id;
        $product->image=file($data['image'])->store('images');
        $product->save();
    }


    public function destroy($id)
    {
        $product=Product::find($id)->delete();
    }

    public function myValidation($request)
    {
        $data=$this->validate($request,[
            'designation'=>'bail|required|max:20',
            'image'=>'bail|required|dimensions:min_width=2000,min_height=2000',
            'quantity'=>'bail|numeric|required',
        ]);
        return $data;
    }
}
