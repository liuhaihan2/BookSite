<?php

use App\User;
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
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'mobile' => '17' . $faker->unique()->randomNumber(9, true),
        'password' => bcrypt('123456'),
        'avatar' => '../../public/img/avatars/default.jpg',
        'remember_token' => Str::random(10),
        'confirmation_token' => str_random(40),
    ];
});

// Poem
$factory->define(App\Http\Frontend\Models\Poem::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 50),
        'category_id' => $faker->numberBetween(1, 50),
        'title' => $faker->word,
        'summary' => $faker->text(50),
        'body' => $faker->text(200),
        'dynasty' => $faker->randomElement(['夏朝', '商朝', '周朝', '秦朝', '汉代', '晋代', '南北朝', '隋朝', '唐代', '宋代', '元代', '明代', '清代', '当代', '当下']),
        'is_original' => $faker->boolean
    ];
});

// Tag
$factory->define(\App\Http\Frontend\Models\Tag::class, function (\Faker\Generator $faker) {
    return [
        'name' => $faker->unique()->randomElement(['夏朝', '商朝', '周朝', '秦朝', '汉代', '晋代', '南北朝', '隋朝', '唐代', '宋代', '元代', '明代', '清代', '当代', '当下']),
    ];
});

// Comment
$factory->define(\App\Http\Frontend\Models\Comment::class, function (\Faker\Generator $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 50),
        'body' => $faker->sentence,
        'commentable_id' => $faker->numberBetween(1, 50),
        'commentable_type' => 'App\Http\Frontend\Models\Poem'
    ];
});
