<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function __construct(array $attributes = array()) {
        parent::__construct($attributes);
    }
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name', 'email', 'password',
    ];
    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function parent()
    {
        return $this->hasOne('App\Model\User','id','parent_id');
    }

    public function children()
    {
        return $this->hasMany('App\Model\User','parent_id','id');
    }
}