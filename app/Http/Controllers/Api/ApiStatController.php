<?php

namespace App\Http\Controllers\Api;

use App\Model\Score;
use function GuzzleHttp\Promise\all;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
class ApiStatController extends Controller
{
    public function get(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'childId' => 'required',
            'gameId' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $history  = Score::all()->where('game_id', $request->get('gameId'))->where('user_id', $request->get('userId'));
        $total = $history->count();
        $average = $history->avg(function ($gameScore) {
            return $gameScore->score;
        });

        $result = [
            'history' => $history,
            'total' => $total,
            'average' => $average
        ];
        return response()->json(['success' => $result], 200);
    }

    public function addScore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'childId' => 'required',
            'gameId' => 'required',
            'score' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }

        $score = new Score();
        $score->game_id = $request->get('gameId');
        $score->template_id = $request->get('templateId');
        $score->child_id = $request->get('childId');
        $score->score = $request->get('score');

        $score->save();
    }
}
