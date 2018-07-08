<?php
/**
 * Created by PhpStorm.
 * User: zhy
 * Date: 8/07/18
 * Time: 4:57 PM
 */
namespace  App\Admin\Controllers;

use App\Http\Controllers\Controller;
use \App\AdminRole;

class RoleController extends Controller
{
    //角色列表
    public function index()
    {
        $roles = \App\AdminRole::paginate(10);
        return view("/admin/role/index");
    }

    //创建角色
    public function create()
    {
        return view("/admin/role/create");
    }

    //创建角色行为
    public function store()
    {

    }

    //角色和权限关系页面
    public function permission()
    {
        return view("/admin/role/permission");
    }

    //储存角色权限行为
    public function storePermission()
    {

    }

}

