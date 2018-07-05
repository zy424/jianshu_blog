<?php
/**
 * Created by PhpStorm.
 * User: zhy
 * Date: 5/07/18
 * Time: 10:16 PM
 */
namespace  App\Admin\Controllers;

use App\Http\Controllers\Controller;
use \App\Post;

class PostController extends Controller {
    public function index() {
        return view('admin.post.index');
    }

    public function status(Post $post) {

    }


}