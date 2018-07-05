<?php

namespace App;

use App\Model;
use Illuminate\Database\Eloquent\Builder;

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

    //the articles that belong to one user
    public function scopeAuthorBy(Builder $query, $user_id) {
        return $query->where('user_id', $user_id);
    }

    public function postTopics() {
        return $this->hasMany(\App\PostTopic::class, 'post_id', 'id');
    }
    //the articles that not belong to a topic
    public function scopeTopicNotBy(Builder $query, $topic_id) {
        return $query->doesntHave('postTopics', 'and', function($q) use($topic_id) {
            $q->where('topic_id', $topic_id);
        });
    }

    //全局scope的方式
    protected static function boot() {
        parent::boot();

        static::addGlobalScope('avaiable', function(Builder $builder){
            $builder->whereIn('status', [0, 1]);
        });
    }

}
