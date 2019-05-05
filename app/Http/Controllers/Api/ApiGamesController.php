<?php

namespace App\Http\Controllers\Api;

use App\Model\Games;
use Illuminate\Http\Request;
use App\Http\Resources\Game as GameResource;

class ApiGamesController extends Controller
{
    public function get(Request $request)
    {
        if ($request->has('topic')) {
            return (Games::where('topic_id', $request->get('topic'))->paginate(1));
        }
        return response()->json(['success' => GameResource::collection(Games::all())], 200);
    }

    public function getOne(Games $game)
    {
        if ($game != null) {
            $game->topic = $game->topic->topic;
            return response()->json(['success' => $game], 200);
        }
        return response(404);
    }
}
