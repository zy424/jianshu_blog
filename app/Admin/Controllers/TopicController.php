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
        return view('admin/topic/index');
    }

    public function create()
    {
        return view('admin/topic/create');
    }

    public function store()
    {

    }

    public function destroy()
    {

    }
}
