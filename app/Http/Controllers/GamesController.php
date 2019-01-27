<?php

namespace App\Http\Controllers;

use App\Model\Games;
use Illuminate\Http\Request;
use App\Http\Resources\Game as GameResource;

class GamesController extends Controller
{
    public function get(Request $request)
    {
        if ($request->has('topic')) {
            return (Games::where('topic_id', $request->get('topic'))->paginate(1));
        } else {
            return response()->json(['success' => GameResource::collection(Games::all())], 200);
        }

    }

    public function getOne(Games $game)
    {
        // ToDo check is $game is a good object
        return $game;
    }
}
