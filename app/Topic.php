<?php

namespace App;

use App\Model;

class Topic extends Model
{
    //the all articles that belong to the topic
    public function posts() {
        $this->belongsToMany(\App\Post::class, 'post_topics', 'topic_id', 'post_id');
    }

    //the number of articles that belong to the topic
    public function postTopics() {
        $this->hasMany(\App\PostTopic::class, 'topic_id');
    }
}
