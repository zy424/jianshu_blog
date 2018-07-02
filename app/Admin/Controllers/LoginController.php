<?php
/**
 * Created by PhpStorm.
 * User: zhy
 * Date: 1/07/18
 * Time: 11:32 PM
 */

namespace  App\Admin\Controllers;

use App\Http\Controllers\Controller;

class LoginController extends Controller {
    public function index() {
        return view('admin.login.index');
    }

    public function login() {
        //validate
        $this->validate(request(),[
            'name' => 'required|min:2',
            'password' => 'required|min:5|max:10',

        ]);

        //logic
        $user = request(['name', 'password']);
        if(\Auth::guard('admin')->attempt($user)) {
            return redirect('/admin/home');
        }

        //render
        return \Redirect::back() -> withErrors('Name is not matched with password');

    }

    public function logout() {
        \Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
}
