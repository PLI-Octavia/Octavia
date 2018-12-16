<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserCourses extends Model
{
    protected $table = "user_course";

    public function user()
    {
        return $this->hasOne('App\Model\User','id','user_id');
    }

    public function course()
    {
        return $this->hasOne('App\Model\Courses','id','course_id');
    }
}
