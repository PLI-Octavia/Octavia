<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('child')) {
            Schema::create('child', function (Blueprint $table) {
                $table->increments('id');
                $table->string('firstname');
                $table->string('lastname');
                $table->integer('schoolclass_id');
                $table->integer('parent_id');
                $table->timestamps();
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
        if(Schema::hasTable('child')) {
            Schema::dropIfExists('child');
        }
    }
}
