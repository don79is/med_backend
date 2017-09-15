<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MAPosts extends CoreModel
{
    protected $table = 'ma_posts';
    use Notifiable;



    protected $fillable = ['id','user_id','title','text'];
}
