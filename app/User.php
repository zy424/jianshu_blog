<?php

namespace App;

use App\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


//table => users
class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password'];

    //get the articles list of the user
    public function posts()
    {
        return $this->hasMany(\App\Post::class, 'user_id', 'id');
    }

    //get the fans of the user
    public function fans()
    {
        return $this->hasMany(\App\Fan::class, 'star_id', 'id');
    }

    //get the star of the user focuses

    public function stars()
    {
        return $this->hasMany(\App\Fan::class, 'fan_id', 'id');
    }

    //the uses want to focus somebody
    public function doFan($uid)
    {
        $fan = new \App\Fan();
        $fan->star_id = $uid;
        return $this->stars()->save($fan);
    }

    //delete the focus
    public function doUnFan($uid)
    {
        $fan = new \App\Fan();
        $fan->star_id = $uid;
        $this->stars()->delete($fan);
    }

    //if the user has been focused by the fan

    public function hasFan($uid)
    {
        return $this->fans()->where('fan_id', $uid)->count();
    }

    //if the user focuses a star
    public function hasStar($uid)
    {
        return $this->stars()->where('star_id', $uid)->count();
    }

    //用户收到的通知
    public function notices()
    {
        return $this->belongsToMany(\App\Notice::class, 'user_notice', 'user_id', 'notice_id')->withPivot(['user_id', 'notice_id']);
    }

    //给用户增加通知
    public function addNotice($notice) {
        return $this->notices()->save($notice);//delete 使用 detach()
    }

    public function deleteNotice($notice)
    {
        return $this->notices()->detach($notice);
    }

    public function getAvatarAttribute($value)
    {
        if (empty($value)) {
            return '/storage/231c7829cbd325d978898cec389b3f65/egwV7WNPQMSPgMe7WmtjRN7bGKcD0vBAmpRrpLlI.jpeg';
        }
        return $value;
    }
}