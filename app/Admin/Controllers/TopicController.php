<?php
/**
 * Created by PhpStorm.
 * User: zhy
 * Date: 9/07/18
 * Time: 9:06 PM
 */
namespace  App\Admin\Controllers;

use App\Http\Controllers\Controller;


class TopicController extends Controller
{
    public function index()
    {
        $topics = \App\Topic::all();
        return view('admin/topic/index', compact('topics'));
    }

    public function create()
    {
        return view('admin/topic/create');
    }

    public function store()
    {
        $this->validate(request(),[
            'name' => 'required|string',
        ]);

        \App\Topic::create(['name' => request('name')]);
        return redirect('/admin/topics');
    }

    public function destroy(\App\Topic $topic)
    {
        $topic->delete();

        return [
            'error' => '0',
            'message' => ''
        ];
    }
}
