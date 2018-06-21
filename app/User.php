<?php

namespace App;

use App\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

//table => users
class User extends Authenticatable
{
    protected $fillable = [
        'name', 'email', 'password'];
}
