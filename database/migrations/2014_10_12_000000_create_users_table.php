<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id')->comment('自增ID');
            $table->string('nickname')->comment('用户昵称');
            $table->string('email', 50)->nullable()->comment('邮箱地址');
            $table->char('mobile', 11)->nullable()->comment('手机号码');
            $table->string('password')->comment('密码');
            $table->unsignedInteger('image_id')->comment('头像');//image_id
            $table->unsignedInteger('favorites_count')->comment('收藏总数')->default(0);
            $table->unsignedInteger('comments_count')->comment('评论总数')->default(0);
            $table->unsignedInteger('appreciations_count')->comment('读后感总数')->default(0);
            $table->unsignedBigInteger('followers_count')->default(0)->comment('关注总数')->default(0);
            $table->unsignedBigInteger('followering_count')->default(0)->comment('被关注总数')->default(0);

            //其实这个我也不太理解，但是我看都有啊
            $table->rememberToken()->comment('记住用户名');
            $table->timestamps();

            // 不理解的column
            // $table->char('confirmation_token', 40)->comment('邮箱token');
            // $table->boolean('is_active')->default(0)->comment('激活状态');

            //待加入的column
            // $table->string('social_type')->nullable()->comment('第三方登录类型');
            // $table->unsignedBigInteger('social_id')->nullable()->comment('第三方账号ID');
        });

        $table->unique(['name', 'email', 'mobile']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
