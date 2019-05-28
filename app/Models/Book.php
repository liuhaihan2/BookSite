<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /**
     * 获取书籍封面
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }

    /**
     * 获取书籍所有评论
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * 获取该书籍所属的收藏模型
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function favorites()
    {
        return $this->morphToMany(Favorite::class, 'favoritable');
    }

    /**
     * 获取该书籍所属的标签模型
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable')->withTimestamps();
    }

    /**
     * 获取该书籍的所有鉴赏模型，也就是读后感模型
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appreciations()
    {
        return $this->hasMany(Appreciation::class)->withTimestamps();
    }

    /**
     * 获取该书籍所属的所有书单
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsToMany
     */
    public function lists()
    {
        return $this->belongsToMany('App\List');
    }
}
