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
    public function posts() {
        return $this->hasMany(\App\Post::class, 'user_id', 'id');
    }

    //get the fans of the user
    public function fans() {
        return $this->hasMany(\App\Fan::class, 'star_id', 'id');
    }

    //get the star of the user focuses

    public function stars(){
        return $this->hasMany(\App\Fan::class, 'fan_id', 'id');
    }

    //the uses want to focus somebody
    public function doFan($uid) {
        $fan = new \App\Fan();
        $fan->star_id = $uid;
        return $this->stars()->save($fan);
    }

    //delete the focus
    public function doUnFan($uid) {
        $fan = new \App\Fan();
        $fan->star_id = $uid;
        $this->stars()->delete($fan);
    }

    //if the user has been focused by the fan

    public function hasFan($uid) {
        return $this->fans()->where('fan_id', $uid)->count();
    }

    //if the user focuses a star
    public function hasStar($uid) {
        return $this->stars()->where('star_id', $uid)->count();
    }


}
