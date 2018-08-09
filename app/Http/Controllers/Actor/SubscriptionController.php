<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function getSubscrubers()
    {
        $users = DB::table('subscriptions')
            ->join('users', 'users.id', '=', 'subscriptions.idsubscriber')
            ->select('users.*')
            ->where('subscriptions.idActor','=',Auth::id())
            ->get();
    }

    public function getSubscriptions()
    {
        $users = DB::table('subscriptions')
            ->join('users', 'users.id', '=', 'subscriptions.idActor')
            ->select('users.*')
            ->where('subscriptions.idsubscriber','=',Auth::id())
            ->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $subscription= new Subscription();
        $subscription->idsubscriber=$request->idsubscriber;
        $subscription->idActor=Auth::id();
        $subscription->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscription  $subscription
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('subscriptions')
            ->where(['idActor'=>$id,'idsubscriber'=>Auth::id()]);
    }
}
