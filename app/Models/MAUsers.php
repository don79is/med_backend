<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MAUsers extends Authenticatable
{

    protected $table = 'ma_users';
    use Notifiable;

    public $incrementing = false;
    protected $fillable = ['id', 'role_id', 'avatar_id', 'first_name', 'last_name', 'position', 'email', 'password', 'show_in_front'];

    protected $hidden = [
        'password','remember_token',
    ];

    public function roles()
    {
        return $this->hasMany(MARoles::class, 'name', 'role_id');
    }


    protected $with = ['roles'];
}
