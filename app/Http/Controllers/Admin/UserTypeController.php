<?php

namespace App\Http\Controllers\Admin;

use App\Models\UserType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserTypeController extends Controller
{

    public function __construct()
    {
        Auth::check();
    }

    public function index()
    {
        $typeList=UserType::all()->toArray();
        return view('auth.register', compact('typeList'));
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $data=$this->myValidation($request);
        //dd($request);
        $type = new UserType();
        $type->designation = $data['designation'];
        $type->description = $request->description;
        $type->icon =  $request->file('icon')->store('icons');
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
        $type->icon = $request->file('icon')->store('icons');
        $type->save();
    }

    public function destroy($id)
    {
        UserType::find($id)->delete();
    }

    public function myValidation($request)
    {
        $data=$this->validate($request, [
            'designation'=>'bail|required|max:20',
            'icon'=>'bail|dimensions:max_width=200,max_height=200',
        ]);
        return $data;
    }
}
