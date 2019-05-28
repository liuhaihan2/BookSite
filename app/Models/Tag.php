<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    /**
     * 得到所有该标签的书
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphedByMany
     */
    public function books()
    {
        return $this->morphedByMany('App\Book', 'taggable');
    }

    /**
     * 得到所有该标签的书单
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphedByMany
     */
    public function booklists()
    {
        return $this->morphedByMany('App\Booklist', 'taggable');
    }

}
