<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableTelepon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telepon', function (Blueprint $table) {
            $table->increments('id');
            $table->string('no_telepon');
            $table->unsignedInteger('pengguna_id');
            $table->foreign('pengguna_id')
                  ->on('pengguna')
                  ->references('id')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('telepon');
    }
}
