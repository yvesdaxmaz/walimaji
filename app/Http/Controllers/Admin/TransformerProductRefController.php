<?php

namespace App\Http\Controllers;

use App\Models\TraderProductRef;
use App\Models\TransformerProductRef;
use Illuminate\Http\Request;

class TransformerProductRefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transformerProductRefs=TransformerProductRef::all()->toArray();
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
        $ref =new TransformerProductRef();
        $ref->designation = $data['designation'];
        $ref->description = $data['description'];
        $ref->image =  file($data['image'])->store('images');
        $ref->type =  $request->type;
        $ref->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TransformerProductRef  $transformerProductRef
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transformerProductRef=TransformerProductRef::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TransformerProductRef  $transformerProductRef
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $transformerProductRef=TransformerProductRef::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TransformerProductRef  $transformerProductRef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TransformerProductRef  $transformerProductRef
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TransformerProductRef::find($id);
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
