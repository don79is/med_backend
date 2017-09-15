<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MARoles extends CoreModel
{
    protected $table = 'ma_roles';
    use Notifiable;


    protected $fillable = ['id','name'];


}
