<?php
/**
 * Created by PhpStorm.
 * User: zhy
 * Date: 2/07/18
 * Time: 9:11 PM
 */
namespace  App\Admin\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller {
    public function index() {
        return view('admin.home.index');
    }


}
