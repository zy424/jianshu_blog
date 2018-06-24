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

    //like  build relationship with user
    public function like($user_id) {
        return $this->hasOne(\App\Like::class) -> where('user_id', $user_id);
    }

    //calculate all the likes number for the post
    public function likes() {
        return $this->hasMany(\App\Like::class);
    }

}
