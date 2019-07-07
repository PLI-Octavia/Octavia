<?php

namespace App\Http\Controllers\Api;

use App\Model\Score;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
class ApiStatController extends Controller
{
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
