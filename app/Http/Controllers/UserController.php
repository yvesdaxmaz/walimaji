<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductPrice;
use App\Models\ProductReference;
use App\Models\Subscription;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    public function index($id)
    {

    }

    public function detail($id)
    {
        $user = User::findOrFail($id);

        if ($user) {
            $details = User::getWithAdressAndType($user->id, $user->email)->get(0);
            $products = Product::getWithReference($user->id);
            $followers = Subscription::getFollowers($user->id);
            $following = Subscription::getFollowing($user->id);
            return view('user-detail', compact('details', 'products', 'followers', 'following'));
        }
    }

    public static function newSubscription($id)
    {
        $sub = new Subscription();
        $sub->idsubscriber = Auth::id();
        $sub->idActor = $id;
        $sub->save();
    }

    public function store(request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = Hash::make($request->input('password'));
        $api_token = str_random(60);
        $type_id = $request->input('type_id');

        return User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'type_id' => $type_id,
            'api_token' => $api_token
        ]);

    }

    public  function showFollowers(){
        $followers=Subscription::getFollowers(Auth::id());
        $userDetail=User::getAdminDetail();

        return view('user.subscribers',compact('followers','userDetail'));

    }

    public function showFollowing(){
        $followings=Subscription::getFollowing(Auth::id());
        $userDetail=User::getAdminDetail();
        return view('user.subscriptions',compact('followings','userDetail'));
    }

    public function ShowUserDetail($id){
        $details=User::getWithAdressAndType($id,'');

        $products=Product::getWithReference($id);

        $followers=Subscription::getFollowersCount($id);

        $following= Subscription::getFollowingCount($id);
        $userDetail=User::getAdminDetail();
        //dd($adminDetail,$details,$products,$followers,$following);
        return view('user.detail',compact('details','products','followers','following','userDetail'));
    }

    public  function  showProfil(){
        $userDetail=User::getAdminDetail();
    }

    public function ShowReferenceDetail($idRef){
        $userDetail=User::getAdminDetail();
        $biggerPrice=ProductPrice::getBiggerPriceOf($idRef);
        $smallerPrice=ProductPrice::getSmallerPriceOf($idRef);
        $sellers=ProductReference::getAllSalers($idRef);
        $details=ProductReference::getWithTypeDesigantion($idRef);
        //dd($biggerPrice,$smallerPrice,$details);
        return view('user.product.detail', compact('userDetail','biggerPrice','smallerPrice','sellers','details'));

    }

    public function ShowProductsList(){
        $userDetail=User::getAdminDetail();
    }
}
