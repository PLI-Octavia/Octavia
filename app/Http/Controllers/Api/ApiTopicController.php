<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Model\Topics;
use Illuminate\Http\Request;
use App\Http\Resources\Topic as TopicResource;

class ApiTopicController extends Controller
{
    public function getTopics()
    {
        return response()->json(['success' => TopicResource::collection(Topics::all())], 200);
    }
}
