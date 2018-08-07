<?php

namespace App\Http\Controllers;

use App\Models\ProducerProctuctType;
use Illuminate\Http\Request;

class ProducerProctuctTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producerProctuctTypes=ProducerProctuctType::all()->toArray();
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
        $data=$this->myValidation($request);
        $type =new ProductType;
        $type->designation = $data['designation'];
        $type->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProducerProctuctType  $producerProctuctType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producerProctuctType=ProducerProctuctType::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProducerProctuctType  $producerProctuctType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producerProctuctType=ProducerProctuctType::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProducerProctuctType  $producerProctuctType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$this->myValidation($request);
        $type = ProducerProctuctType::find($id);
        $type->designation = $data['designation'];
        $type->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProducerProctuctType  $producerProctuctType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProducerProctuctType::find($id)->delete();
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
