<?php

namespace App\Http\Controllers;

use App\Models\TransformerProductType;
use Illuminate\Http\Request;

class TransformerProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producerProctuctTypes=TransformerProductType::all()->toArray();
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
        $type =new TransformerProductType();
        $type->designation = $data['designation'];
        $type->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransformerProductType  $transformerProductType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transformerProductType=TransformerProductType::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransformerProductType  $transformerProductType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transformerProductType=TransformerProductType::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransformerProductType  $transformerProductType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$this->myValidation($request);
        $type = TransformerProductType::find($id);
        $type->designation = $data['designation'];
        $type->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransformerProductType  $transformerProductType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TransformerProductType::find($id)->delete();
    }

    public function myValidation($request)
    {
        $data=$this->validate($request, [
            'designation'=>'bail|required|max:20',
        ]);
        return $data;
    }
}
