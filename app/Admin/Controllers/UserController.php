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

    public function role(\App\AdminUser $user) {
        $roles = \App\AdminRole::all();
        $myRoles = $user->roles;
        return view('admin/user/role', compact('roles', 'myRoles', 'user'));

    }
    //储存用户角色
    public function storeRole(\App\AdminUser $user) {
        $this->validate(request(),[
            'roles' => 'required|array',
            ]);
        $roles=\App\AdminRole::findMany(request('roles'));
        $myRoles = $user->roles;
        //add
        $addRoles = $roles->diff($myRoles);
        foreach($addRoles as $role) {
            $user->assignRole($role);
        }
        //delete
        $deleteRoles = $myRoles->diff($roles);
        foreach($deleteRoles as $role) {
            $user->deleteRole($role);
        }

    }




}