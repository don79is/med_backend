<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MARoles extends Authenticatable
{
    protected $table = 'ma_roles';
    use Notifiable;

    public $incrementing = false;
    protected $fillable = ['id','name'];
}
