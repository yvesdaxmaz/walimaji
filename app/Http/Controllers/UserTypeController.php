<?php

namespace App\Http\Controllers;

use App\Models\UserType;
use Illuminate\Http\Request;

class UserTypeController extends Controller
{

    public function index()
    {
        $types=UserType::all()->toArray();
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $data=$this->myValidation($request);
        $type = new UserType;
        $type->designation = $data['designation'];
        $type->description = $request->description;
        $type->icon =  file($data['icon'])->store('icons');;
        $type->save();
    }

    public function show($id)
    {
        $type=UserType::find(id);
    }

    public function edit($id)
    {
        $types=UserType::find($id);
    }

    public function update(Request $request, $id)
    {
        $data=$this->myValidation($request);
        $type = UserType::find($id);
        $type->designation = $data['designation'];
        $type->description = $request->description;
        $type->icon =  file($data['icon'])->store('icons');;
        $type->save();
    }

    public function destroy($id)
    {
        UserType::find($id)->delete();
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
