<?php

namespace App\Http\Controllers;

use App\Model\User;
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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = new User();
        //On test les relations dans tous les sens
        $user = $user->findOrFail(2)->user_courses->first()->course->user_courses->first()->user;

        dd($user);
        return view('home');
    }
}
