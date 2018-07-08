<?php
/**
 * Created by PhpStorm.
 * User: zhy
 * Date: 2/07/18
 * Time: 11:20 PM
 */
namespace  App\Admin\Controllers;

use App\Http\Controllers\Controller;
use \App\AdminUser;

class UserController extends Controller {

    //user list
    public function index() {
        $users = AdminUser::paginate(10);
        return view('admin/user/index', compact('users'));
    }
    //create new user
    public function create() {
        return view('admin/user/add');
    }
    // store new user
    public function store() {
        $this->validate(request(),[
            'name' => 'required|min:3',
            'password' => 'required',
        ]);

        $name = request('name');
        $password = bcrypt(request('password'));
        AdminUser::create(compact('name','password'));

        return redirect('/admin/users');
    }

    //用户角色页面

    public function role() {
        return view('admin/user/role');

    }
    //储存用户角色
    public function storeRole() {

    }




}