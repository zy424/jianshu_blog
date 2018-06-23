<?php

namespace App;

use App\Model;

//table => posts
class Post extends Model
{
    // Related to user
    public function user() {
        return $this->belongsTo('App\User');
    }

    //comment model
    public function comments() {
        return $this->hasMany('App\Comment') -> orderBy('created_at', 'desc');
    }
}
