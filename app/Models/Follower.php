<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    //其实 follower 自己就是一张中间表 它所关联的两张表都是User
    protected $fillable = [
        'follower_id', //关注ID
        'followed_id'  //被关注ID
    ];
}
