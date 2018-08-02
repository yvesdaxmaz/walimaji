<?php

namespace App\Http\Controllers;

use App\Models\ProductInput;
use Illuminate\Http\Request;

class ProductInputController extends Controller
{

    public function index()
    {
        $inputs=ProductInput::all()->toArray();
    }


    public function create()
    {

    }

    public function store(Request $request)
    {

        $data=$this->myValidation($request);
        $input= new ProductInput();
        $input->designation=$data['designation'];
        $input->description=$request->description;
        $input->type_id=$request->type_id;
        $input->image=file($data['image'])->store('images');
        $input->provider_id=$request->provider_id;
        $input->quantity=$data['quantity'];
        $input->entry_date=$data['entry_date'];
        $input->save();
    }

    public function show($id)
    {
        $input=ProductInput::find($id);
    }

    public function edit($id)
    {
        $input=ProductInput::find($id);
    }

    public function update(Request $request, $id)
    {
        $data=$this->myValidation($request);
        $input=ProductInput::find($id);
        $input->designation=$data['designation'];
        $input->description=$request->description;
        $input->type_id=$request->type_id;
        $input->image=file($data['image'])->store('images');
        $input->quantity=$data['quantity'];
        $input->entry_date=$data['entry_date'];
        $input->save();
    }

    public function destroy($id)
    {
        $input=ProductInput::find($id)->delete();
    }

    public function myValidation($request)
    {
        $data=$this->validate($request,[
            'designation'=>'bail|required|max:20',
            'image'=>'bail|required|dimensions:min_width=2000,min_height=2000',
            'quantity'=>'bail|numeric|required',
            'entry_date'=>'bail|required',
         ]);
        return $data;
    }
}
