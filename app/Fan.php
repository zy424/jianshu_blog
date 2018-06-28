<?php

namespace App;

use App\Model;

class Fan extends Model
{
    // get fan user
    public function fuser(){
        return $this->hasOne(\App\User::class, 'id', 'fan_id');
    }

    //get star user

    public function suser(){
        return $this->hasOne(\App\User::class, 'id', 'star_id');
    }
}
