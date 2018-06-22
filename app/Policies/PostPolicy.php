<?php

namespace App\Policies;

use App\User;
use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //update article permission
    public function update(User $user, Post $post) {
        return $user->id == $post->user_id;
    }

    //delete article permission
    public function delete(User $user, Post $post) {
        return $user->id == $post->user_id;

    }

}
