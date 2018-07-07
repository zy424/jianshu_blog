<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable
{
    protected $rememberTokenName = '';
    protected $guarded = [];

    //the possible roles for a user
    public function roles() {
        return $this->belongsToMany(\App\AdminRole::class, 'admin_role_user','user_id', 'role_id')->
        withPivot(['user_id','role_id']);

    }

    //判断一个用户是否有某个角色，或者某些角色
    public function isInRoles($roles) {
        return !!$roles->intersect($this->roles)->count();
    }

    //给用户分配角色
    public function assignRole($roles) {
        return $this->roles()->save($roles);
    }

    //取消用户分配的角色
    public function deleteRole($roles) {
        return $this->roles()->detach($roles);
    }

    //用户是否有权限
    public function hasPermission($permission) {
        return $this->isInRoles($permission->roles);
    }
}
