<?php

namespace App\Http\Controllers;

use App\Models\UserAdress;
use App\Models\UserType;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * WelcomeController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest');
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
        return view('welcome', compact('data', 'tab', 'types'));
    }
}
