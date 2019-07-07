<?php

namespace App\Http\Controllers;

use App\Model\Games;
use App\Model\Topics;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use ZipArchive;

class GameController extends Controller
{
    public function games() {
        return view('game/games');
    }

    //view form
    public function upload() {
        $topics = Topics::all();
        return view('game/upload',compact('topics'));
    }

    //storage
    public function store(Request $request) {
        
        
        $file = $request->file('file');//file
        $destinationPath = '../storage/app/public/app/Games/'.$this->clean($request->name).'_'.$request->version;//storage with name of game cleaned and number of version
        $this->unzip($file,$destinationPath);//unzip

        $games = new games;

        $games->name = $request->name;
        $games->description = $request->description;
        $games->topic_id = $request->topic_id;
        $games->version = $request->version;
        $games->save();

        return redirect()->route('games'); //redirection
        
    }

    //Unzip file
    public function unzip($file,$destinationPath)
    {
        $zip = new ZipArchive;
        if ($zip->open($file) === TRUE) {
            $zip->extractTo($destinationPath);
            $zip->close();
            return 'ok';
        } else {
            return 'échec';
        }
    }

    //clean string for name of game
    function clean($string) {
        $string = str_replace(' ', '_', $string); // Replaces all spaces with hyphens.
     
        return preg_replace('/[^A-Za-z0-9\-]/', '_', $string); // Removes special chars.
     }

    public function gamesJson() {
        return datatables(Games::query())->toJson();
    }
}
