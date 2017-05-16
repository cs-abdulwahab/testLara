<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFingerPrintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finger_prints', function (Blueprint $table) {

            $table->increments('id');

            $table->binary('fingerdata');
            $table->string('fingerstring');
            $table->mediumText('finger_mediumText');
            $table->longText('finger_longText');

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
        Schema::dropIfExists('finger_prints');
    }
}
