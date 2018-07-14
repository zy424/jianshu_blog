<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{

    //personal centre page
    public function show(User $user) {
        //personal information: Friends/Followers/Articles
        $user = User::withCount(['stars', 'fans', 'posts'])->find($user->id);

        //personal articles list, the latest articles
        $posts = $user->posts()->orderBy('created_at', 'desc')->take(10)->get();

        //personal friends, including the friend's articles
        $stars = $user->stars;
        $susers = User::whereIn('id',$stars->pluck('star_id'))->withCount(['stars', 'fans', 'posts'])->get();

        //followers
        $fans = $user->fans;
        $fusers = User::whereIn('id',$fans->pluck('fan_id'))->withCount(['stars', 'fans', 'posts'])->get();


        return view('user/show',compact('user', 'posts', 'susers', 'fusers'));
    }

    //focus on one user
    public function fan(User $user) {
        $me = \Auth::user();
        $success = $me -> doFan($user->id);

        if ($success) {
            return [
                'error'=> 0,
                'msg' => '',
            ];
        } else {
            return [
                'error'=> 1,
                'msg' => 'failed to save into db',
            ];
        }

    }

    //cancel focus

    public function unfan(User $user) {
        $me = \Auth::user();
        $me -> doUnFan($user->id);
        return [
            'error'=> 0,
            'msg' => '',
        ];

    }

    public function setting()
    {
        $me = \Auth::user();
        return view('user/setting', compact('me'));
    }

    public function settingStore(Request $request, User $user)
    {
        $this->validate(request(),[
            'name' => 'min:3',
        ]);

        $name = request('name');
        if ($name != $user->name) {
            if(\App\User::where('name', $name)->count() > 0) {
                return back()->withErrors(array('message' => 'The user has been registered'));
            }
            $user->name = request('name');
        }
        if ($request->file('avatar')) {
            $path = $request->file('avatar')->storePublicly(md5(\Auth::id() . time()));
            $user->avatar = "/storage/". $path;
        }

        $user->save();
        return back();
    }
}
