<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddParentUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('users') && !Schema::hasColumn('users', 'parent_id')) ; //check whether users table has email column
        {
            Schema::table('users', function (Blueprint $table)  {
                $table->integer('parent_id')->after('name')->nullable()->default(NULL);
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
        if(Schema::hasTable('users') && Schema::hasColumn('users', 'parent_id')) ; //check whether users table has email column
        {
            Schema::table('users', function(Blueprint $table)
            {
                $table->dropColumn('parent_id');
            });
        }
    }
}
