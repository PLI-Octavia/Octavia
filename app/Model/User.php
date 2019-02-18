<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements \Czim\Paperclip\Contracts\AttachableInterface
{
    use Notifiable;
    use HasApiTokens, Notifiable;

    use \Czim\Paperclip\Model\PaperclipTrait;

    protected $fillable = [
        'firstname', 'lastname', 'email', 'password','role'
    ];

    public function __construct(array $attributes = [])
    {
        $this->hasAttachedFile('avatar', [
            'variants' => [
                'medium' => [
                    'auto-orient' => [],
                    'resize'      => ['dimensions' => '300x300'],
                ],
                'thumb' => '300x200',
            ],
            'attributes' => [
                'variants' => true,
            ],
        ]);

        parent::__construct($attributes);
    }
    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */

    /**
    * The attributes that should be hidden for arrays.
    *
    * @var array
    */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function children()
    {
        return $this->hasMany('App\Model\Child','parent_id','id');
    }

    public function user_courses()
    {
        return $this->hasMany('App\Model\UserCourses','user_id','id');
    }
}