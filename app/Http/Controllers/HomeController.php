<?php

namespace App\Http\Controllers;

use App\Models\ProductReference;
use App\Models\ProductType;
use App\Models\UserAdress;
use App\Models\UserType;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * affiche sur une carte, les pins de traders par default,
     * et les autres types de users en fonction du type demandE.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->query('tab')) {
            $types = ['trader' => 1, 'provider' => 2, 'producer' => 3, 'transformer' => 4];
            $tab = (array_key_exists($request->query('tab'), $types))?
                htmlspecialchars($request->query('tab')) :
                'trader';

            $data = UserAdress::getWithUserType(intval($types[$tab]));
        } else {
            $tab = 'trader';
            $data = UserAdress::getWithUserType(1);
        }
        $types = UserType::limit(4)->get();

        $type_designation=UserType::find(Auth::user()->type_id)->designation;
        if ($type_designation == 'admin'){
            $adminDetail=DB::table('users')
                ->where('email','=',$request->email)
                ->select('*')->get();
            $nombreUser=User::count();
            $nombreRef=ProductReference::count();
            $nombreTypeProd=ProductType::count();
            return view('admin.home', compact('adminDetail','nombreRef','nombreTypeProd','nombreUser'));
        }
        return view('user.home', compact('data', 'tab', 'types'));
    }
}
