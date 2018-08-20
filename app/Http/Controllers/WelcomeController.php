<?php

namespace App\Http\Controllers;

use App\Models\UserAdress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
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
            $types = ['trader' => 1, 'producer' => 2, 'transfomer' => 3, 'provider' => 4];
            $tab = (array_key_exists($request->query('tab'), $types))?
                htmlspecialchars($request->query('tab')) :
                'trader';

            $data = UserAdress::getWithUserType(intval($types[$tab]));
        } else {
            $tab = 'trader';
            $data = UserAdress::getWithUserType(1);
        }

        $types = UserType::limit(4)->get();
        return view('home', compact('data', 'tab', 'types'));
    }
}
