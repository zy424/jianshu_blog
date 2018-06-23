<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Post;
use \App\Comment;

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

        //validate
        $this->validate(request(),[
            'title' => "required|string|max:100|min:5",
            'content' => "required|string|min:10",
        ]);



        // logic
        $user_id = \Auth::id();
        $params = array_merge(request(['title','content']),compact('user_id'));
        $post = Post::create($params);

        //render
        return redirect("/posts");

    }

    // edit page
    public function edit(Post $post) {
        return view("post/edit", compact('post'));

    }

    // edit logic
    public function update(Post $post) {
        //validate
        $this->validate(request(),[
            'title' => "required|string|max:100|min:5",
            'content' => "required|string|min:10",
        ]);

        $this->authorize('update', $post);

        //logic
        $post->title = request('title');
        $post->content = request('content');
        $post->save();

        //render
        return redirect("/posts/{$post->id}");

    }

    // delete logic
    public function delete(Post $post) {
        //TODO: authorization validation

        $this->authorize('delete', $post);
        $post->delete();
        return redirect("/posts");
    }

    // upload image
    public function imageUpload(Request $request) {
        $path = $request->file('wangEditorH5File')->storePublicly(md5(time()));
        return asset('storage/'.$path);
    }

    //submit comment
    public function comment(Post $post) {
        //validate
        $this->validate(request(),[
            'content' => "required|min:10",
        ]);

        //logic
        $comment = new Comment();
        $comment-> user_id = \Auth::id();
        $comment-> content = request('content');

        $post->comments()->save($comment);

        //render
        return back();
    }

}
