<?php

namespace App\Http\Controllers;

use App\Model\Games;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function get(Request $request)
    {
        if ($request->has('topic')) {
            return (Games::where('topic_id', $request->get('topic'))->paginate(1));
        } else {
            return (Games::paginate(5));
        }

    }

    public function getOne(Games $game)
    {
        // ToDo check is $game is a good object
        return $game;
    }
}
