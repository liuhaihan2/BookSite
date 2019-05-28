<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppreciationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appreciations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_id')->comment('用户ID');
            $table->string('name')->comment('鉴赏名字');
            $table->string('appreciation_induction', 200)->comment('鉴赏简介');
            $table->string('book_id')->default(0)->comment('鉴赏书籍');
            $table->string('theme_image')->comment('配图');
            $table->unsignedInteger('favorites_count')->default(0)->comment('收藏总数');
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
        Schema::dropIfExists('appreciations');
    }
}
