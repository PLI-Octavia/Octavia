<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    public $table = 'template';

    protected $fillable = [
        'name', 'datas', 'game_id'
    ];

    public function game()
    {
        return $this->hasOne('App\Model\Games','id','game_id');
    }
}
