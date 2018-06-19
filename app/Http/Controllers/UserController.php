<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //personal setting page

    public function setting() {

        return view('user.setting');
    }

    //personal behaviour

    public function settingStore() {

    }
}
