<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftwareHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('softwarehouses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',100)->unique();
            $table->string('desc',500);
            $table->string('url',100);
            $table->string('rating')->default('3');
            $table->string('logo')->nullable();
            $table->string('city')->nullable();

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
        Schema::dropIfExists('softwarehouses');
    }
}
