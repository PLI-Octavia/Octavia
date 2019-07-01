<?php

namespace App\Http\Controllers;

use App\Model\Child;
use App\Model\User;
use App\Http\Resources\User as UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $userCount = User::count();
        $childCount = Child::count();
        return view('home')->withUserCount($userCount)->withChildCount($childCount);
    }
}
