<?php

namespace App\Http\Controllers;

use App\Models\TraderProductType;
use Illuminate\Http\Request;

class TraderProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $traderProductType=TraderProductType::all()->toArray();
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
        $type =new TraderProductType();
        $type->designation = $data['designation'];
        $type->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TraderProductType  $traderProductType
     * @return \Illuminate\Http\Response
     */
    public function show( $id  )
    {
        $traderProductType=TraderProductType::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TraderProductType  $traderProductType
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $traderProductType=TraderProductType::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TraderProductType  $traderProductType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data=$this->myValidation($request);
        $type = TraderProductType::find($id);
        $type->designation = $data['designation'];
        $type->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TraderProductType  $traderProductType
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id )
    {
        TraderProductType::find($id);
    }

    public function myValidation($request)
    {
        $data=$this->validate($request,[
            'designation'=>'bail|required|max:20',
         ]);
        return $data;
    }
}
