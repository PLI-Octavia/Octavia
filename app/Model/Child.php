<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    public $table = 'child';

    protected $fillable = [
        'firstname', 'lastname', 'schoolclass_id', 'parent_id'
    ];

    public function parent()
    {
        return $this->hasOne('App\Model\User','id','parent_id');
    }

    public function schoolclass()
    {
        return $this->hasOne('App\Model\SchoolClass','id','schoolclass_id');
    }
}
