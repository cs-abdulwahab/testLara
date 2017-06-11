<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubFacultyPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_faculty', function (Blueprint $table) {
            $table->integer('club_id')->unsigned()->index();
            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
            $table->integer('faculty_id')->unsigned()->index();
            $table->foreign('faculty_id')->references('id')->on('faculties')->onDelete('cascade');

            $table->boolean('flag')->default(false);


            $table->primary(['club_id', 'faculty_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('club_faculty');
    }
}
