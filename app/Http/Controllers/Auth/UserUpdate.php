<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserUpdate extends Controller
{

    public function index()
    {
        $users=User::all()->toArray();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        $user=User::find($id);
    }


    public function edit($id)
    {
        $user=User::find($id);
    }


    public function update(Request $request, $id)
    {
        $data= $this->myValidation($request);

        $user=User::find($id);
        $user->name=$data['name'];
        $user->description=$data['description'];
        $user->phone=$data['phone'];
        $user->save();

    }


    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
    }

    public function myValidation($request)
    {
        $data=$this->validate($request,[
            'name'=>'bail|required|max:20',
            'description'=>'max:250',
            'phone'=>'bail|required',
        ]);
        return $data;
    }
}
