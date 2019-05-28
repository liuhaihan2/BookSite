<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booklist extends Model
{
    /**
     * 获取书单主题显示图片
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function themeImage()
    {
        return $this->morphOne('App\Image', 'imageable');
    }

    /**
     * 获取该书单所属的收藏模型
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function favorites()
    {
        return $this->morphToMany(Favorite::class, 'favoritable')->withTimestamps();
    }

    /**
     * 获取该书单所属的标签模型
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphToMany
     */
    public function tags()
    {
        return $this->morphToMany('App\Tag', 'taggable')->withTimestamps();
    }

    /**
     * 获取该书单所包含的所有书模型
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function books()
    {
        return $this->belongsToMany('App\Book', 'books_booklists_table', 'book_id', 'booklist_id');
    }
}
