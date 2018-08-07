<?php

namespace App\Http\Controllers;

use App\Models\InputType;
use Illuminate\Http\Request;

class InputTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types=InputType::all()->toArray();
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
        $data = $this->myValidation($request);
        $type = new InputType();
        $type->designation = $data['designation'];
        $type->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InputType  $inputType
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type=InputType::find(id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InputType  $inputType
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types=InputType::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InputType  $inputType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=$this->myValidation($request);
        $type = InputType::find($id);
        $type->designation = $data['designation'];
        $type->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InputType  $inputType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        InputType::find($id)->delete();
    }

    public function myValidation($request)
    {
        $data=$this->validate($request,[
            'designation'=>'required'
         ]);
        return $data;
    }
}
