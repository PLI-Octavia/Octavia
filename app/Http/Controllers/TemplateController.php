<?php

namespace App\Http\Controllers;

use App\Model\Games;
use Illuminate\Http\Request;
use App\Model\Template;
use Illuminate\Support\Facades\DB;

class TemplateController extends Controller
{
    public function formUpload(Games $game, Request $request) {
        if ($request->isMethod('post')) {
            if ($request->input('name') != null && $request->input('datas') != null && $game != null) {
                $template = new Template();
                $template->name = $request->input('name');
                $template->datas = $request->input('datas');
                $template->game_id = $game->id;

                $template->save();
                return view('template/templates');
            }
            return view('template/formUpload', ['error' => true]);
        }
        return view('template/formUpload', ['gameId' => $game->id]);
    }

    public function templates() {
        return view('template/templates');
    }

    public function templatesJson() {
        $template = Template::query()->with('game');
        return datatables($template)->toJson();
    }

    public function deleteTemplate(Template $template) {
        if($template != null) {
            $template->delete();
        }
        return view('template/templates');
    }
}
