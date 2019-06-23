<?php

namespace App\Http\Controllers;

use App\Model\Games;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function games() {
        return view('game/games');
    }

    public function gamesJson() {
        return datatables(Games::query())->toJson();
    }
}
