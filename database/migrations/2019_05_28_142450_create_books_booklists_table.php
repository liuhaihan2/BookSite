<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksBooklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_booklists', function (Blueprint $table) {
            $table->increments('id');
            // $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            //foreign()：外键
            // references()：参照字段
            // on()：参照表
            // onDelete()：删除时的执行动作
            // 这里是跟着删除，比如删除了某篇文章，我们将article_tag中包含article_id一样的记录也删除
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books_booklists');
    }
}
