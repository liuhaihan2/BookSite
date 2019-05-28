<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id')->comment('自增ID');
            $table->string('name')->comment('书名');
            $table->unsignedInteger('image_id')->comment('书封皮');//image_id
            $table->string('author')->comment('作者');
            $table->unsignedInteger('comments_count')->comment('评论总数')->default(0);
            $table->unsignedInteger('favorites_count')->comment('收藏总数')->default(0);
            $table->unsignedInteger('appreciations_count')->comment('鉴赏总数')->default(0);
            // $table->string('tag')->comment('分类标签');
            $table->text('body')->comment('书籍内容');
            $table->string('summary')->comment('摘要');
            $table->string('book_introduction', 200)->comment('书籍简介');
            $table->timestamps();

            //要加入的
            // $table->stinrg('need-time')->comment('阅读所需要的时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
}
