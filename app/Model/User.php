<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HasApiTokens, Notifiable;

    public function __construct(array $attributes = array()) {
        parent::__construct($attributes);
    }
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'name', 'email', 'password','role'
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

    public function user_courses()
    {
        return $this->hasMany('App\Model\UserCourses','user_id','id');
    }
}