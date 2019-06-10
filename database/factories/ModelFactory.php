<?php

use App\Models\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'nickname' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'mobile' => '17' . $faker->unique()->randomNumber(9, true),
        'password' => bcrypt('123456'),
        // 'image_id' => '../../public/img/avatars/default.jpg',//默认头像
        'image_id' => $faker->numberBetween(1, 50),
        'remember_token' => Str::random(10),
        'confirmation_token' => str_random(40),
    ];
});

// Book
$factory->define(App\Models\Book::class, function (Faker $faker) {
    return [
        'image_id' => $faker->numberBetween(1, 50),
        'name' => $faker->word,
        'author' => $faker->word,
        'summary' => $faker->text(50),
        'body' => $faker->text(400),
        'book_introduction' => $faker->text(200),
    ];
});

// Booklist
$factory->define(App\Models\Booklist::class, function (Faker $faker) {
    return [
        'iamge_id' => $faker->numberBetween(1, 50),
        'title' => $faker->word,
        'recommendation' => $faker->text(50)
    ];
});

//Appreciation
$factory->define(App\Models\Appreciation::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 50),
        'name' => $faker->word,
        'appreciation_induction' => $faker->text(150),
        'book_id' => $faker->numberBetween(1, 30),
    ];
});

// Tag
$factory->define(\App\Models\Tag::class, function (Faker $faker) {
    return [
        //总体的分类 按照掌阅的来 最后分为 文学艺术 人文社会 科幻科学  经济励志  生活  教育
        'name' => $faker->unique()->randomElement(['小说', '青春', '传记', '艺术', '文学', '历史', '建筑', '心理', '哲学', '国学', '社会科学', '科学', '政治', '法律','励志', '管理', '理财', '宗教', '军事', '养生', '健身', '美食', '体育', '少儿', '计算机', '医学', '外文']),
    ];
});

// Comment
$factory->define(\App\Models\Comment::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 50),
        'body' => $faker->sentence,
        'commentable_id' => $faker->numberBetween(1, 50),
        'commentable_type' => 'App\\Models\Book'
    ];
});
