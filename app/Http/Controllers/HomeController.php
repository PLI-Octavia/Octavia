<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Http\Resources\User as UserResource;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::findOrFail(1);
        return view('welcome')->withUser($user);
        //return UserResource::collection($users);
    }

    public function create(Request $request)
    {
        $user = User::findOrFail(1);
        $user->avatar = $request->file('avatar');
        // dd($user);
        $user->save();

        return (view('welcome')->withUser($user));
    }
}
