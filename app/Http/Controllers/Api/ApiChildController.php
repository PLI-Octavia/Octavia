<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Auth;
use App\Model\Child;
use Illuminate\Http\Request;
use App\Http\Resources\Child as ChildResource;
use Validator;

class ApiChildController extends Controller
{
    public function addChild(Request $request)
    {
        $currentAuthUser = Auth::user();
        $validator = Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'schoolclass_id' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()], 401);
        }
        $input = $request->all();
        $input['parent_id'] = $currentAuthUser->id;
        $child = Child::create($input);
        return response()->json(['success' => new ChildResource($child)], 200);
    }
}
