<?php

namespace App\Http\Controllers;

use App\Model\Topics;
use Illuminate\Http\Request;
use App\Http\Resources\Topic as TopicResource;
class TopicController extends Controller
{
    public function getTopics()
    {
        return response()->json(['success' => TopicResource::collection(Topics::all())], 200);
    }
}
