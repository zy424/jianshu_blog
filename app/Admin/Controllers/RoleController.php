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
        return view("/admin/role/index",compact('roles'));
    }

    //创建角色
    public function create()
    {

        return view("/admin/role/create");
    }

    //创建角色行为
    public function store()
    {
        $this->validate(request(),[
            'name' => 'required|min:3',
            'description' => 'required',
        ]);
        \App\AdminRole::create(request(['name','description']));
        return redirect('/admin/roles');
    }

    //角色和权限关系页面
    public function permission(\App\AdminRole $role)
    {
        $permissions = \App\AdminPermission::all();
        $myPermission = $role->permissions;
        return view('admin/role/permission', compact('permissions', 'myPermissions', 'role'));
    }

    //储存角色权限行为
    public function storePermission(\App\AdminRole $role)
    {
        $this->validate(request(),[
            'permissions' => 'required|array',
        ]);
        $permissions=\App\AdminPermission::findMany(request('permissions'));
        $myPermissions = $role->permissions;

        //add
        $addpermissions = $permissions->diff($myPermissions);
        foreach( $addpermissions as $permission) {
            $role->grantPermission($permission);
        }
        //delete
        $deletePermissions = $myPermissions->diff($permissions);
        foreach($deletePermissions as $permission) {
            $role->deleteRole($permission);
        }

        return back();

    }

}

