<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    public function games()
    {
        return $this->hasMany('App\Model\Games','topic_id','id');
    }
}
