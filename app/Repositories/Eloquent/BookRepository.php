<?php

namespace App\Repositories\Eloquent;

use Illuminate\Container\Container as App;

class BookRepository
{
    public function index()
    {
        $array = array('foo', 'bar');
        return $array;
    }
}

// class BookRepository extends Repository
// {
//     public function __construct(App $app)
//     {
//         parent::__construct($app);
//     }
//     /**
//      * 指定模型名称
//      *
//      * @return mixed
//      */
//     function model()
//     {
//         return 'App\Models\Book';
//     }

//     /**
//      * 获取首页六本书推荐
//      *
//      * @return array
//      */
//     public function index()
//     {
//         $array = array('foo', 'bar');
//         return $array;
//     }
// }
