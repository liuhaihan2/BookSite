<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoriteablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoriteables', function (Blueprint $table) {
            $table->unsignedInteger('favorite_id')->comment('favorite ID');
            $table->morphs('favoriteable');
            $table->timestamps();

            $table->index(['favorite_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favoriteables');
    }
}
