<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UniqueConstraintInUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::table('users', function (Blueprint $table) {

                $table->dropUnique(['email']); // Drop unique index in 'email' from 'users' table
                $table->unique('name');

            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('users', function($table)
        {
            $table->unique('email');
            $table->dropUnique('users_name_unique');

        });


    }
}
