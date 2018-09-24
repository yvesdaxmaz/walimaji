<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductReference;
use App\Models\ProductType;
use App\Models\Subscription;
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
        if (UserType::find(Auth::user()->type_id)->designation == 'admin'){
            $adminDetail=User::getAdminDetail();
            $productsCount=Product::count();
            $nombreUser=User::count();
            $nombreRef=ProductReference::count();
            $nombreTypeProd=ProductType::count();
            $recentsProducts=Product::getRecents(5);
            $recentUsers=User::getRecents(5);

            return view('admin.home', compact('data', 'tab', 'types','recentsProducts','recentUsers','productsCount','adminDetail','nombreRef','nombreTypeProd','nombreUser'));
        }
        $userDetail=User::getAdminDetail();
        $followersCount=Subscription::getFollowersCount(Auth::id());
        $followingCount=Subscription::getFollowingCount(Auth::id());
        $userProductsCount=Product::countByUser();
        $randomUsers=User::getRandomly();
        return view('user.home', compact('userProductsCount','randomUsers','followingCount','followersCount','userDetail','data', 'tab', 'types'));
    }
}
