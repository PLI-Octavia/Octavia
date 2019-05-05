<?php

namespace App\Http\Controllers;

use App\Model\User;
use App\Http\Resources\User as UserResource;
use Illuminate\Http\Request;
use Datatables;

class UserController extends Controller
{
    public function users() {
        return view('user/users');
    }

    public function usersJson() {
        return datatables(User::query())->toJson();
    }
}
