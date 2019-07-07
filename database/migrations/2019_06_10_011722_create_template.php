<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('template')) {
            Schema::create('template', function (Blueprint $table) {
                $table->increments('id');
                $table->string('name');
                $table->json('datas');
                $table->integer('game_id');
                $table->timestamps();
            });

            Schema::table('template', function (Blueprint $table) {
                $table->foreign('game_id')->references('id')->on('games');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('template');
    }
}
