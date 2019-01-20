<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    public function topic()
    {
        return $this->hasOne('App\Model\Topics','id','topic_id');
    }
}
