<?php

namespace App\Http\Controllers;

use App\Model\Games;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function formUpload(Games $game) {
        return view('template/formUpload')->withGame($game);
    }
}
