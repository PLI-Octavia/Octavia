<?php

namespace App\Http\Controllers\Api;

use App\Model\SchoolClass;
use Illuminate\Http\Request;
use App\Http\Resources\SchoolClass as SchoolClassResources;

class ApiSchoolClassController extends Controller
{
    public function get(Request $request)
    {
        return response()->json(['success' => SchoolClassResources::collection(SchoolClass::all())], 200);
    }
}
