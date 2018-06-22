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
}
