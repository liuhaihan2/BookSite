<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appreciation extends Model
{
    /**
     * 获取该鉴赏所属的用户模型
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * 获取该鉴赏所属的书籍信息
     *
     * @return void
     */
    public function book()
    {
        return $this->belongsTo('App\Models\Book');
    }
    /**
     * 获取此鉴赏所有评论
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }

    /**
     * 获取该书鉴赏所属的收藏模型
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function favorites()
    {
        return $this->morphToMany(Favorite::class, 'favoritable')->withTimestamps();
    }

    // 需要加的是该品鉴的收藏状态  切换该品鉴的收藏状态
}
