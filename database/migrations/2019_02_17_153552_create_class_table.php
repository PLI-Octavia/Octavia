<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('class')) {
            Schema::create('class', function (Blueprint $table) {
                $table->increments('id');
                $table->string('class_name');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations...
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('class')) {
            Schema::dropIfExists('class');
        }
    }
}
