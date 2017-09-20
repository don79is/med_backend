<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class MAPosts extends CoreModel
{
    protected $table = 'ma_posts';
    use Notifiable;



    protected $fillable = ['id','user_id','title','text'];

    public function userName(){
        return $this->hasOne(MAUsers::class, 'id', 'user_id');
    }
    protected $with = ['userName'];
}
