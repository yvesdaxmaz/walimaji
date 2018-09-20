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
        $user->description=$request->description;
        $user->facebook=$request->facebook;
        $user->tittwer=$request->tittwer;
        $user->instagram=$request->instagram;
        $user->phone=$data['phone'];
        $user->image=file($data['image'])->store('images');
        $user->save();
    }


    public function destroy($id)
    {
        $user=User::find($id);
        $user->delete();
    }

    public function myValidation($request)
    {
        $data=$this->validate($request, [
            'name'=>'bail|required|max:20',
            'phone'=>'numeric',
            'image'=>'bail|mines:jpeg,png|dimensions:min_width=100, max_width=2000, min_height=100, max_height=2000',
        ]);
        return $data;
    }
}
