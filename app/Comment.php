<?php

namespace App;

use App\Model;

class Comment extends Model
{
    //comment the article

    public function post(){
        return $this->belongsTo("App\Post");
    }
}
