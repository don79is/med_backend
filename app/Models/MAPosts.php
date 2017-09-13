<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MAPosts extends Authenticatable
{
    protected $table = 'ma_posts';
    use Notifiable;

    public $incrementing = false;

    protected $fillable = ['id','user_id','title','text'];
}
