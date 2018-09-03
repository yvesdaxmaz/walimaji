<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Subscription;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function usersList(){
        $tradres=User::getAllTraders();
        $providers=User::getAllProviders();
        $transformers=User::getAllTransfomers();
        $producers=User::getAllProducers();
        $adminDetail=User::getAdminDetail();
        return view('admin.users.list',compact('adminDetail','tradres','transformers','producers','providers'));
    }

    public function userDetail($id){
        $adminDetail=User::getAdminDetail();

        $details=User::getWithAdressAndType($id,'');

        $products=Product::getWithReference($id);

        $followers=Subscription::getFollowers($id);

        $following= Subscription::getFollowing($id);

        return view('admin.users.detail',compact('details','products','followers','following','adminDetail'));
    }

    public function removeUser($id){
        User::find($id)->delete();
        return redirect()->back()->with('success', ['User removed with success !!!']);
    }

    public function ProductsList(){
        $adminDetail=User::getAdminDetail();
        $traderProducts=Product::getAllTraderWithPrice();
        $porducerProducts=Product::getAllProducerWithPrice();
        $providerProducts=Product::getAllProviderWithPrice();
        $transformerProducts=Product::getAllTransformerWithPrice();

        return view('admin.products.list',compact('traderProducts','providerProducts','porducerProducts','transformerProducts','adminDetail'));
    }
}
