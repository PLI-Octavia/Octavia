<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('users') && !Schema::hasColumn('users', 'role')) ; //check whether users table has email column
        {
            Schema::table('users', function (Blueprint $table)  {
                $table->integer('role')->after('name')->default(1);
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
        if(Schema::hasTable('users') && Schema::hasColumn('users', 'role')) ; //check whether users table has email column
        {
            Schema::table('users', function(Blueprint $table)
            {
                $table->dropColumn('role');
            });
        }
    }
}
