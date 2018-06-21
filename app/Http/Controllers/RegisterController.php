<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;


class RegisterController extends Controller
{
    //register page

    public function index() {

        return view('register.index');
    }

    //register behaviour
    public function register() {
        //validate
        $this->validate(request(),[
            'name' => 'required|min:3|unique:users,name',
            'email' => 'required|unique:users,email|email',
            'password'=> 'required|min:5|max:10|confirmed',
        ]);


        //logic
        $name = request('name');
        $email = request('email');
        $password = bcrypt(request('password'));
        $user = User::create(compact('name','email','password'));

        //render
        return redirect('/login');

    }
}
