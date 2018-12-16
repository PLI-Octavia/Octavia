<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    public function user_courses()
    {
        return $this->hasMany('App\Model\UserCourses','course_id','id');
    }
}
