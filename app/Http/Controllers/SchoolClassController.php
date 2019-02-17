<?php

namespace App\Http\Controllers;

use App\Model\SchoolClass;
use Illuminate\Http\Request;
use App\Http\Resources\SchoolClass as SchoolClassResources;

class SchoolClassController extends Controller
{
    public function get(Request $request)
    {
        return response()->json(['success' => SchoolClassResources::collection(SchoolClass::all())], 200);
    }
}
