<?php

namespace App;

use App\Model;

class Comment extends Model
{
    //comment the article
    public function post(){
        return $this->belongsTo("App\Post");
    }

    //comment user

    public function user() {
        return $this->belongsTo("App\User");
    }

}
