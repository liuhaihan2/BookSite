<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    //     // User
       factory(App\Models\User::class, 50)->create();
    //     // Book
       factory(App\Models\Book::class, 50)->create();
    //     // Booklist
       factory(App\Models\Booklist::class, 15)->create();
    //    // Appreciation
       factory(App\Models\Appreciation::class, 50)->create();
    //    // Comment
       factory(App\Models\Comment::class, 200)->create();
    //     // Tag
    //    factory(App\Models\Tag::class)->times(10)->create();

    //    $tags = factory(\App\Models\Tag::class)->times(10)->make();
    //     \App\Models\User::insert($tags->toArray());
    }
}
