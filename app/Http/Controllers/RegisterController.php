<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //register page

    public function index() {

        return view('register.index');
    }

    //register behaviour
    public function register() {


    }
}
