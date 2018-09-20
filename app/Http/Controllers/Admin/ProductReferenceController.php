<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductReference;
use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productReferences=ProductReference::all()->toArray();
        return view('admin.product-reference.list',compact('productReferences'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product-reference.add');
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
        $ref =new ProductReference();
        $ref->designation = $data['designation'];
        $ref->description = $data['description'];
        $ref->image =  file($data['image'])->store('images');
        $ref->type =  $request->type;
        $ref->idActor =  $request->idActor;
        $ref->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productReference=ProductReference::getWithTypeDesigantion($id);
        return view('admin.product-reference.show',compact('productReference'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productReference=ProductReference::find($id);
        $types=ProductType::all()->toArray();
        return view('admin.product-reference.edit',compact('productReference','types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data=$this->myValidation($request);
        $ref =ProductReference::find($request->id);
        $ref->designation = $data['designation'];
        $ref->description = $data['description'];
        $ref->image =  file($data['image'])->store('images');
        $ref->type =  $request->type;
        $ref->idActor =  $request->idActor;
        $ref->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function myValidation($request)
    {
        $data=$this->validate($request, [
            'designation'=>'bail|required|max:20',
            'description'=>'required',
            'image'=>'bail|required|dimensions:min_width=2000,min_height=2000',
            'type'=>'required',
        ]);
        return $data;
    }
}
