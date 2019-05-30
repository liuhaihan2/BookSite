<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Favorite extends Model
{
    protected $fillable = ['user_id'];

    /**
     * 得到所有被收藏的书
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphedByMany
     */
    public function books()
    {
        return $this->morphedByMany('App\Models\Book', 'favoriteable');
    }

    /**
     * 得到所有被收藏的读后感\鉴赏
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphedByMany
     */
    public function appreciations()
    {
        return $this->morphedByMany('App\Models\Appreciation', 'favoriteable');
    }

    /**
     * 得到所有被收藏的书单
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphedByMany
     */
    public function booklists()
    {
        return $this->morphedByMany('App\Models\Booklist', 'favoriteable');
    }
}
