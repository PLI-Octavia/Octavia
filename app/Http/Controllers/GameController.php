<?php

namespace App\Http\Controllers;

use App\Model\Games;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    public function games() {
        return view('game/games');
    }

    public function upload() {
        return view('game/upload');
    }
    public function store(Request $request) {
        
        $file = $request->file('file');
      //Display File Name
      echo 'File Name: '.$file->getClientOriginalName();
      echo '<br>';
   
      //Display File Extension
      echo 'File Extension: '.$file->getClientOriginalExtension();
      echo '<br>';
   
      //Display File Real Path
      echo 'File Real Path: '.$file->getRealPath();
      echo '<br>';
   
      //Display File Size
      echo 'File Size: '.$file->getSize();
      echo '<br>';
   
      //Display File Mime Type
      echo 'File Mime Type: '.$file->getMimeType();
   
      //Move Uploaded File
      $destinationPath = '../storage/app/public/app/Games/';
      $file->move($destinationPath,$file->getClientOriginalName());
       //return view('game/upload');
    }

    public function gamesJson() {
        return datatables(Games::query())->toJson();
    }
}
