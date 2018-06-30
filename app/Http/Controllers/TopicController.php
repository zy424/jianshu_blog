<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;

class TopicController extends Controller
{
    public function show(Topic $topic) {
        // a topic with the number of the articles
        $topic = Topic::withCount('postTopics')->find($topic->id);

        //the articles list for the article with the latest date selection
        $posts =  $topic->posts()->orderBy('created_at', 'desc')->take(10)->get();
        //belongs to my articles, but not publish
        $myposts = \App\Post::authorBy(\Auth::id())->topicNotBy($topic->id)->get();
        return view('topic/show', compact('topic', 'posts', 'myposts'));
    }

    public function submit(Topic $topic) {

    }
}
