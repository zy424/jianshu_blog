<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostController extends Controller
{
    // articles list
    public function index() {
        $posts = Post::orderby('created_at','desc')->paginate(6);
        return view("post/index", compact('posts'));

    }

    // article page
    public function show(Post $post) {

        return view("post/show", compact('post'));

    }

    // create article page
    public function create() {
        return view("post/create");

    }

    // create logic
    public function store() {
        /*$post = new Post();
        $post->title = request('title');
        $post->content = request('content');
        $post->save();*/

        //$params = ['title'=>request('title'),'content' => request('content')];
        $params = request(['title','content']);
        $post = Post::create($params);
        return redirect("/posts");

    }

    // edit page
    public function edit() {
        return view("post/edit");

    }

    // edit logic
    public function update() {

    }

    // delete logic
    public function delete() {

    }



}
