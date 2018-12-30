<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('user_course')) {
            Schema::create('user_course', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('user_id')->unsigned();
                $table->integer('course_id')->unsigned();
                $table->timestamps();
            });

            Schema::table('user_course', function (Blueprint $table) {
                $table->foreign('user_id')->references('id')->on('users');
                $table->foreign('course_id')->references('id')->on('courses');
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
        Schema::table('user_course', function (Blueprint $table) {
            $table->dropForeign('user_id');
            $table->dropForeign('course_id');
        });

        Schema::dropIfExists('user_course');
    }
}
