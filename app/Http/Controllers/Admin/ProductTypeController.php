<?php

namespace App\Http\Controllers\Admin;

use App\Models\ProductType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productTypes=ProductType::all()->toArray();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $this->myValidation($request);
        $type = new ProductType();
        $type->designation = $data['designation'];
        $type->idActor=$request->idActor;
        $type->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productType=ProductType::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productType=ProductType::find($id);
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
        $data = $this->myValidation($request);
        $type =ProductType::find($id);
        $type->designation = $data['designation'];
        $type->idActor=$request->idActor;
        $type->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        InputType::find($id)->delete();
    }

    public function myValidation($request)
    {
        $data=$this->validate($request, [
            'designation'=>'required'
         ]);
        return $data;
    }
}
