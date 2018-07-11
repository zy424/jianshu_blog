<?php
/**
 * Created by PhpStorm.
 * User: zhy
 * Date: 9/07/18
 * Time: 9:06 PM
 */
namespace  App\Admin\Controllers;

use App\Http\Controllers\Controller;


class NoticeController extends Controller
{
    public function index()
    {
        $notices = \App\Notice::all();
        return view('admin/notice/index', compact('notices'));
    }

    public function create()
    {
        return view('admin/notice/create');
    }

    public function store()
    {
        $this->validate(request(),[
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $notice = \App\Notice::create(request(['title', 'content']));
        dispatch(new \App\Jobs\SendMessage($notice));
        return redirect('/admin/notices');
    }

}
