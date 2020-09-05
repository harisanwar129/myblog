<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('category_id')->nullable();
            $table->foreign('category_id')
                  ->on('categories')
                  ->references('id')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->unsignedInteger('post_id')->nullable();
            $table->foreign('post_id')
                  ->on('posts')
                  ->references('id')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_posts');
    }
}
