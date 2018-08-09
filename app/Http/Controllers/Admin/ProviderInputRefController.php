<?php

namespace App\Http\Controllers;

use App\Models\ProviderInputRef;
use Illuminate\Http\Request;

class ProviderInputRefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $providerInputRef=ProviderInputRef::all()->toArray();
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
        $ref =new ProviderInputRef();
        $ref->designation = $data['designation'];
        $ref->description = $data['description'];
        $ref->image =  file($data['image'])->store('images');
        $ref->type =  $request->type;
        $ref->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProviderInputRef  $providerInputRef
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $providerInputRef=ProviderInputRef::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProviderInputRef  $providerInputRef
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $providerInputRef=ProviderInputRef::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProviderInputRef  $providerInputRef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$this->myValidation($request);
        $ref =ProviderInputRef::find($id);
        $ref->designation = $data['designation'];
        $ref->description = $data['description'];
        $ref->image =  file($data['image'])->store('images');
        $ref->type =  $request->type;
        $ref->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProviderInputRef  $providerInputRef
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ProviderInputRef::find($id)->delete();
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
