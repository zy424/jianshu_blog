<?php
/**
 * Created by PhpStorm.
 * User: zhy
 * Date: 2/07/18
 * Time: 11:20 PM
 */
namespace  App\Admin\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller {

    //user list
    public function index() {
        return view('admin/user/index');
    }
    //create new user
    public function create() {
        return view('admin/user/add');
    }
    // store new user
    public function store() {
        //return view('admin/user/index');
    }


}