<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;

class PostController extends Controller
{
    // articles list
    public function index() {
        $posts = Post::orderby('create_at','desc')->get();
        return view("post/index", compact('posts'));

    }

    // article page
    public function show() {

        return view("post/show", ['']);

    }

    // create article page
    public function create() {
        return view("post/create");

    }

    // create logic
    public function store() {

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
