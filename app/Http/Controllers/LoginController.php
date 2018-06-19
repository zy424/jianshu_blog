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

    }

    //logout  behaviour
    public function logout() {


    }
}
