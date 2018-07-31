<?php

namespace App\Http\Controllers;

use App\Models\InputType;
use Illuminate\Http\Request;

class InputTypeController extends Controller
{

    public function index()
    {
        $types=InputType::all()->toArray();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $data = $this->myValidation($request);
        $type = new InputType();
        $type->designation = $data['designation'];
        $type->description = $request->description;
        $type->icon = file($data['icon'])->store('icons');
        $type->save();
    }


    public function show($id)
    {
        $type=InputType::find(id);
    }


    public function edit($id)
    {
        $types=InputType::find($id);
    }

    public function update(Request $request, $id)
    {
        $data=$this->myValidation($request);
        $type = InputType::find($id);
        $type->designation = $data['designation'];
        $type->description = $request->description;
        $type->icon = file($data['icon'])->store('icons');
        $type->save();
    }

    public function destroy($id)
    {
        InputType::find($id)->delete();
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
