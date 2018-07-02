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

    }

    public function logout() {

    }
}
