<?php
/**
 * Created by PhpStorm.
 * User: zhy
 * Date: 8/07/18
 * Time: 4:58 PM
 */

namespace  App\Admin\Controllers;

use App\Http\Controllers\Controller;
use \App\AdminPermission;

class PermissionController extends Controller
{
    //权限列表页面
    public function index() {
        return view("/admin/permission/index");
    }

    //创建权限页面
    public function create() {
        return view("/admin/permission/add");
    }

    // 创建权限实际行为

    public function store() {

    }


}