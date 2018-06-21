<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //login page

    public function index() {

        return view('login.index');
    }

    //login behaviour

    public function login() {
        //validate
        $this->validate(request(),[
            'email' => 'required|email',
            'password' => 'required|min:5|max:10',
            'is_remember' => 'integer',
        ]);

        //logic
        $user = request(['email', 'password']);
        $is_remember = boolval(request('is_remember'));
        if(\Auth::attempt($user,$is_remember)) {
            return redirect('/posts');
        }
        //render
        return \Redirect::back() -> withErrors('Email address is not matched with password');

    }

    //logout  behaviour
    public function logout() {
        \Auth::logout();
        return redirect('/login');
    }
}
