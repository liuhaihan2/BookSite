<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('booklists', function (Blueprint $table) {
    //         $table->bigIncrements('id');
    //         $table->timestamps();

    //         $table->bigIncrements('id');
    //         $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
    //         //foreign()：外键
    //         // references()：参照字段
    //         // on()：参照表
    //         // onDelete()：删除时的执行动作
    //         // 这里是跟着删除，比如删除了某篇文章，我们将article_tag中包含article_id一样的记录也删除
    //         $table->timestamps();
    //     });
    // }
    public function up()
    {
        Schema::create('booklists', function (Blueprint $table) {
            $table->increments('id')->comment('自增ID');
            $table->string('title')->comment('书单标题');
            $table->string('recommendation', 200)->comment('推荐语');
            // $table->string('tag')->comment('标签');
            $table->unsignedInteger('iamge_id')->comment('配图');//image_id
            $table->unsignedInteger('favorites_count')->comment('收藏总数')->default(0);
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
        Schema::dropIfExists('booklists');
    }
}
