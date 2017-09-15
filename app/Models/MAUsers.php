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
        return $this->belongsToMany(MARoles::class, 'ma_users_roles_connections', 'user_id', 'role_id' );
    }


    protected $with = ['roles'];
}
